@extends('layouts.app')

@section('styles')

@endsection


@section('content')

    <section style="background: url('{{ asset('images/header/background.jpg') }}')center center; background-size:cover;
            " class="hero is-info is-medium">
        <div class="hero-head">
            @include('layouts.partials._navigation')
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">

                <div class="column is-6-mobile is-offset-3-mobile is-4-tablet is-offset-4-tablet ">
                    <a href="{{ route('start.index') }}"><img src="{{ asset('images/genusshaus/logo.png') }}"
                                                              alt="Genusshaus"></a>
                </div>


                <p class="subtitle is-4">
                    Ihr digitaler Genussassistent
                </p>

                <div class="column is-6-mobile is-offset-3-mobile is-4-tablet is-offset-4-tablet ">
                    <a target="_blank"
                       href="https://itunes.apple.com/ch/app/genusshaus/id1317801092?l=en&mt=8&ign-mpt=uo%3D4"><img
                                src="{{ asset('images/ios/app_store.png') }}" alt="Genusshaus iOS App"></a>
                </div>


            </div>

        </div>

    </section>

    @if(!empty($places))
            <section class="hero is-light is-bold">
                <div class="hero-body">
                    <div class="container">

                        <p class="subtitle is-2 has-text-centered">
                            <strong>Basel</strong>
                        </p>

                        <div class="columns is-multiline">
                            <div class="column is-8 is-offset-2">
                                <div class="columns is-multiline">

                                    @foreach($places as $place)
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




    <section class="hero is-dark is-bold">
        <div class="hero-body">
            <div class="container">

                <p class="subtitle is-3 has-text-centered">
                    <strong>Tja</strong>
                </p>

                <div class="columns is-multiline">

                    <div class="column is-8 is-offset-2">

                        <div class="columns is-multiline">

                            <div class="column is-12">

                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                </p>

                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>
    </section>


    @include('layouts.components._partner')



@endsection

@section('scripts')

@endsection
