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




                <div class="column is-8 is-offset-2">

                    <h1 class="title is-1">Datenschutz</h1>

                    <hr>


                    <h3 class="title is-4">Datenschutz</h3>
                    <p>
                        Gestützt auf Artikel 13 der schweizerischen Bundesverfassung und die datenschutzrechtlichen
                        Bestimmungen des Bundes (Datenschutzgesetz, DSG) hat jede Person Anspruch auf Schutz ihrer
                        Privatsphäre sowie auf Schutz vor Missbrauch ihrer persönlichen Daten. Wir halten diese
                        Bestimmungen ein. Persönliche Daten werden streng vertraulich behandelt und weder an Dritte
                        verkauft noch weitergegeben. In enger Zusammenarbeit mit unseren Hosting-Providern bemühen wir
                        uns, die Datenbanken so gut wie möglich vor fremden Zugriffen, Verlusten, Missbrauch oder vor
                        Fälschung zu schützen.

                        Beim Zugriff auf unsere Webseiten werden folgende Daten in Logfiles gespeichert: IP-Adresse,
                        Datum, Uhrzeit, Browser-Anfrage und allg. übertragene Informationen zum Betriebssystem resp.
                        Browser. Diese Nutzungsdaten bilden die Basis für statistische, anonyme Auswertungen, so dass
                        Trends erkennbar sind, anhand derer wir unsere Angebote entsprechend verbessern könne
                    </p>

                    <hr>

                    <h3 class="title is-4"> Datenschutzerklärung für die Nutzung von Facebook Plugins
                    </h3>


                    <p>
                        Auf unseren Seiten sind Plugins des sozialen Netzwerks Facebook, 1601 South California Avenue,
                        Palo Alto, CA 94304, USA integriert. Die Facebook-Plugins erkennen Sie an dem Facebook-Logo oder
                        dem “Like-Button” (“Gefällt mir”) auf unserer Seite. Eine Übersicht über die Facebook-Plugins
                        finden Sie unter Facebook Developer.


                        Wenn Sie unsere Seiten besuchen, wird über das Plugin eine direkte Verbindung zwischen Ihrem
                        Browser und dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie
                        mit Ihrer IP-Adresse unsere Seite besucht haben. Wenn Sie den Facebook “Like-Button” anklicken
                        während Sie in Ihrem Facebook-Account eingeloggt sind, können Sie die Inhalte unserer Seiten auf
                        Ihrem Facebook-Profil verlinken. Dadurch kann Facebook den Besuch unserer Seiten Ihrem
                        Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis
                        vom Inhalt der übermittelten Daten sowie deren Nutzung durch Facebook erhalten. Weitere
                        Informationen hierzu finden Sie in der Datenschutzerklärung von facebook unter Facebook Privacy.


                        Wenn Sie nicht wünschen, dass Facebook den Besuch unserer Seiten Ihrem Facebook-Nutzerkonto
                        zuordnen kann, loggen Sie sich bitte aus Ihrem Facebook-Benutzerkonto aus.
                    </p>

                    <hr>

                    <h3 class="title is-4"> Datenschutzerklärung für die Nutzung von Google Analytics
                    </h3>


                    <p>
                        Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (“Google”).
                        Google Analytics verwendet sog. “Cookies”, Textdateien, die auf Ihrem Computer gespeichert
                        werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den
                        Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen
                        Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der
                        IP-Anonymisierung auf dieser Webseite wird Ihre IP-Adresse von Google jedoch innerhalb von
                        Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den
                        Europäischen Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an
                        einen Server von Google in den USA übertragen und dort gekürzt. Google wird diese Informationen
                        benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für
                        die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der
                        Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen
                        gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte
                        diese Daten im Auftrag von Google verarbeiten. Die im Rahmen von Google Analytics von Ihrem
                        Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt. Sie
                        können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software
                        verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht
                        sämtliche Funktionen dieser Website voll umfänglich nutzen können. Durch die Nutzung dieser
                        Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der
                        zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.

                    </p>



                        <a style="margin-top: 50px;" class="button is-light is-inverted is-outlined is-fullwidth" href="{{ route('start.index') }}">Zurück zur Startseite</a>


                </div>


            </div>


        </div>
    </section>



@endsection

@section('scripts')

@endsection
