@extends('layouts.app')

@section('styles')

@endsection

@section('header-title')

@endsection

@section('content')

    @include('layouts.partials._header')

    <section class="hero is-light is-bold">
        <div class="hero-body">

            <div class="container">

                <div style="margin-top: 25px;" class="columns is-multiline">

                    <div class="column is-8 is-offset-2">

                        <h1 class="title is-2 is-3-mobile has-text-centered-mobile">Kostenlos teilnehmen</h1>
                        <hr>

                        <div class="columns is-multiline">


                            <div class="column is-3 is-offset-1 is-hidden-touch">

                                <img src="{{ asset('images/team/oliver.png') }}" alt="Oliver Reist">

                            </div>

                        <div class="column is-8-mobile is-offset-2-mobile is-6 is-offset-2 has-text-centered">

                            <div style="margin-top: 45px;" class="">

                                <a href="mailto:oliver.reist@genusshaus.com"><i style="margin-right: 15px;" class="far fa-envelope-open fa-2x"></i></a>
                                <a href="tel:0041795344051"><i style="margin-right: 15px;" class="fas fa-phone fa-2x"></i></a>
                                <a target="_blank" href="https://www.xing.com/profile/Oliver_Reist"><i style="margin-right: 15px;" class="fab fa-xing fa-2x"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/in/oliver-reist-a62b2b24/"><i class="fab fa-linkedin-in fa-2x"></i></a>

                            </div>


                            <p style="margin-top: 25px;"><b>Ihr Genussberater</b><br>Oliver Reist</p>






                            <img style="margin-top: 20px;" src="{{ asset('images/team/oliver_signature.png') }}" alt="Oliver Reist">





                        </div>


                        </div>

                        <form class="form-horizontal" method="POST" action="{{ route('contact.store') }}">
                            {{ csrf_field() }}


                            <div class="field">
                                <div class="control has-icons-right">
                                    <input title="company" id="company" name="company"
                                           class="input {{ $errors->has('company') ? ' is-danger' : '' }}  "
                                           type="text"
                                           placeholder="Ihr Restaurant"
                                           value="{{ old('company') }}" required autofocus>

                                    <span  class="icon is-small is-right">
                                  <i class="fas fa-star"></i>
                                    </span>

                                </div>

                                @if ($errors->has('company'))
                                    <p class="help is-danger">
                                        {{ $errors->first('company') }}
                                    </p>

                                @endif


                            </div>


                            <div class="field">
                                <div class="control has-icons-right">
                                    <input title="name" id="name" name="name"
                                           class="input {{ $errors->has('name') ? ' is-danger' : '' }}  "
                                           type="text"
                                           placeholder="Vorname & Nachname"
                                           value="{{ old('name') }}">

                                    <span  class="icon is-small is-right">
                                  <i class="fas fa-star"></i>
                                    </span>

                                </div>

                                @if ($errors->has('name'))
                                    <p class="help is-danger">
                                        {{ $errors->first('name') }}
                                    </p>

                                @endif

                            </div>

                            <div class="field">
                                <div class="control has-icons-right">
                                    <input title="E-Mail" id="email" name="email"
                                           class="input {{ $errors->has('email') ? ' is-danger' : '' }}  "
                                           type="email"
                                           placeholder="E-Mail Adresse"
                                           value="{{ old('email') }}" required>

                                    <span  class="icon is-small is-right">
                                   <i class="fas fa-star"></i>
                                    </span>

                                </div>

                                @if ($errors->has('email'))
                                    <p class="help is-danger">
                                        {{ $errors->first('email') }}
                                    </p>

                                @endif

                            </div>


                            <div class="field">
                                <div class="control has-icons-right">
                                    <input title="Telefonnummer" id="phone" name="phone"
                                           class="input {{ $errors->has('phone') ? ' is-danger' : '' }}  "
                                           type="text"
                                           placeholder="Telefonnummer"
                                           value="{{ old('phone') }}">



                                </div>

                                @if ($errors->has('phone'))
                                    <p class="help is-danger">
                                        {{ $errors->first('phone') }}
                                    </p>

                                @endif

                            </div>

                            <div class="field is-grouped is-grouped-centered">
                                <button type="submit" class="button is-light is-inverted is-outlined is-fullwidth">Absenden</button>

                            </div>


                        </form>




                    </div>


                </div>

            </div>


        </div>
    </section>


@endsection

@section('scripts')

@endsection
