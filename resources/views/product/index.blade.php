@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <section style="background: url('{{ asset('images/header_image.jpg') }}')center center; background-size:cover;
            " class="hero is-info is-medium">
        <div class="hero-head">
            @include('layouts.partials._navigation')
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">

                <div class="column is-4 is-offset-4 ">
                    <a href="{{ route('start.index') }}"><img src="{{ asset('images/genusshaus_logo.png') }}" alt="Genusshaus"></a>

                </div>

                <p class="subtitle is-4">
                    Funktionen & Leistungen
                </p>
            </div>

        </div>

    </section>


@endsection

@section('scripts')

@endsection
