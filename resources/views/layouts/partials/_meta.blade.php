<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

@if(!empty($meta))

    <meta name="robots" content="index, follow">

    <meta name="author" content="{{ $meta->author }}"/>
    <meta name="date" content="{{ $meta->updated_at }}" scheme="YYYY-MM-DD"/>
    <meta name="subject" content="{{ $meta->subject }}">
    <meta name="copyright" content="{{ $meta->copyright }}">

    <title>{{ $meta->title }}</title>
    <meta name="description" content="{{ $meta->description }}"/>
    <meta name="keywords" content=" {{ $meta->keywords }}">

    <meta property="og:type" content="{{ $meta->type }}"/>
    <meta property="og:locale" content="{{ $meta->language }}"/>
    <meta property="og:site_name" content="{{ $meta->title }}"/>

    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:title" content="{{ $meta->title }}"/>
    <meta property="og:description" content="{{ $meta->description }}"/>
    <meta property="og:image" content="{{ asset('images/meta/sixteen_nine.jpg') }}"/>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $meta->title }}">
    <meta name="twitter:description" content="{{ $meta->description }}">
    <meta name="twitter:image" content="{{ asset('images/meta/two_one.jpg') }}">

    <meta itemprop="name" content="{{ $meta->title }}">
    <meta itemprop="description" content="{{ asset('images/meta/four_three.jpg') }}">
    <meta itemprop="image" content=" {{ $meta->image }}">

@endif

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
<link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#000000">
<meta name="theme-color" content="#ffffff">


