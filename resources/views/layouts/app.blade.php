<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>

    @include('layouts.partials._meta')

    <script defer src="{{ asset('js/fontawesome.js') }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bulma-v062.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    @yield('styles')

    @include('layouts.partials._analytics')

</head>

<body>

@yield('content')

@include('layouts.partials._footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {
            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {
                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);
                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>


@yield('scripts')

<script type="text/javascript" src="{{ asset('js/retina.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>

@if (Session::has('notify'))

    <script>

        swal({
            title: "{{ Session::get('notify.title') }}",
            text: "{{ Session::get('notify.text') }}",
            icon: "{{ Session::get('notify.type') }}",
            timer: 3000,
        });

    </script>

    {{ Session::forget('notify')  }}

@endif

</body>

</html>
