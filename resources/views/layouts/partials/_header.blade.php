<section style="background: url('{{ asset('images/header/background.jpg') }}')center center; background-size:cover;
        " class="hero is-info">
    <div class="hero-head">
        @include('layouts.partials._navigation')
    </div>

    <div class="hero-body">
        <div class="container has-text-centered">

            <div class="column is-4 is-offset-4 ">
                <a href="{{ route('start.index') }}"><img src="{{ asset('images/genusshaus/logo.png') }}"
                                                          alt="Genusshaus"></a>

            </div>


            @yield('header-title')

        </div>

    </div>

</section>