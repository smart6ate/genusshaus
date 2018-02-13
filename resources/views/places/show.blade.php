@extends('layouts.app')

@section('styles')

@endsection


@section('content')

    @if(!empty($place))
    <section style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url('{{ $place->image_url  }}')center center; background-size:cover;
            " class="hero is-info is-medium">
        <div class="hero-head">
            @include('layouts.partials._navigation')
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">

                <div class="column is-6-mobile is-offset-3-mobile is-4-tablet is-offset-4-tablet ">

                    <p class="title is-1">
                       {{ $place->name }}
                    </p>

                </div>

            </div>

        </div>

    </section>


            <section class="hero is-light is-bold">
                <div class="hero-body">
                    <div class="container">


                        <div class="column is-8 is-offset-2">


                            <p class="subtitle is-4">
                                Beschreibung:
                            </p>

                            <hr>

                            <p>

                                {{ $place->description }}

                            </p>


                        </div>






                    </div>
                </div>
            </section>

    @endif




    @if(!empty($recommendations))
        <section class="hero is-dark is-bold">
            <div class="hero-body">
                <div class="container">

                    <p class="subtitle is-2 has-text-centered">
                        <strong>Recommendations</strong>
                    </p>

                    <div class="columns is-multiline">
                        <div class="column is-8 is-offset-2">
                            <div class="columns is-multiline">

                                @foreach($recommendations as $place)
                                    <div class="column is-4">


                                        <a href="{{ route('places.show', $place->uuid) }}">


                                            <div class="card">
                                                <div class="card-image">
                                                    <figure class="image is-4by3">
                                                        <img src="{{ $place->image_url }}" alt="{{ $place->name }}">
                                                    </figure>
                                                </div>
                                                <div class="card-content">

                                                    <div class="content">
                                                        <strong>{{ $place->name }}</strong>
                                                    </div>
                                                </div>
                                            </div>

                                        </a>

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif

    @include('layouts.components._partner')



@endsection

@section('scripts')

@endsection
