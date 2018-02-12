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


           {{--     <div class="column is-8 is-offset-2">



                    <hr>

                </div>--}}


                <div class="column is-8 is-offset-2">


                    <h1 class="title is-1">Impressum</h1>
{{--
                    <div class="field is-grouped is-grouped-multiline">
                        <div class="control">
                            <div class="tags has-addons">
                                <span class="tag is-dark"><i class="far fa-envelope-open"></i></span>
                                <span class="tag is-dark"><i class="far fa-file-pdf"></i></span>
                                <span class="tag is-light">{{ \Carbon\Carbon::now()->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>--}}

                    <hr>

                    <h3 class="title is-4">Genusshaus</h3>
                    <p>
                        <a href="https://www.smartgate.ch">smartgate AG</a> <br>
                        Riehenring 18 <br>
                        4058 Basel<br>

                        <a href="https://www.genusshaus.ch"><i class="fas fa-home fa-lg imprint-icons"></i></a>
                        <a href="tel:0041615359826"><i class="fas fa-phone fa-lg imprint-icons"></i></a>
                        <a href="mailto:info@genusshaus.ch"><i class="fas fa-envelope fa-lg"></i></a>

                    </p>

                    <hr>


                    <h3 class="title is-4">Haftungsausschluss</h3>
                    <p>
                        Der Autor übernimmt keinerlei Gewähr hinsichtlich der inhaltlichen Richtigkeit, Genauigkeit,
                        Aktualität, Zuverlässigkeit und Vollständigkeit der Informationen. Haftungsansprüche gegen
                        den Autor wegen Schäden materieller oder immaterieller Art, welche aus dem Zugriff oder der
                        Nutzung bzw. Nichtnutzung der veröffentlichten Informationen, durch Missbrauch der
                        Verbindung oder durch technische Störungen entstanden sind, werden ausgeschlossen. Alle
                        Angebote sind unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten
                        oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen
                        oder die Veröffentlichung zeitweise oder endgültig einzustellen.
                    </p>

                    <hr>

                    <h3 class="title is-4">Haftung für Links</h3>


                    <p> Verweise und Links auf Webseiten Dritter liegen ausserhalb unseres Verantwortungsbereichs.
                        Es wird jegliche Verantwortung für solche Webseiten abgelehnt. Der Zugriff und die Nutzung
                        solcher Webseiten erfolgen auf eigene Gefahr des Nutzers oder der Nutzerin.
                    </p>

                    <hr>

                    <h3 class="title is-4">Urheberrechte</h3>


                    <p>
                        Die Urheber- und alle anderen Rechte an Inhalten, Bildern, Fotos oder anderen Dateien
                        gehören ausschliesslich der smartgate AG oder den speziell genannten Rechtsinhabern. Für die
                        Reproduktion jeglicher Elemente ist die schriftliche Zustimmung der Urheberrechtsträger im
                        Voraus einzuholen.

                    </p>

                    <a style="margin-top: 50px;" class="button is-light is-inverted is-outlined is-fullwidth" href="{{ route('start.index') }}">Zurück zur Startseite</a>


                </div>


            </div>


        </div>
    </section>




@endsection

@section('scripts')

@endsection
