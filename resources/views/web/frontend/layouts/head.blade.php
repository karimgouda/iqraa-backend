<head>

    {!! settings('head_manager_script') !!}

    @include('web.frontend.layouts.partials._seo')

    @include('web.frontend.layouts.head.meta')

    <!-- Title -->
    <title> {{ settings('site_name_' . app()->getLocale()) }} - @yield('title') </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{public_storage(settings('site_favicon'))}}">

    @include('web.frontend.layouts.head.links')

    @include('web.frontend.layouts.head.css')

    @stack('head-styles')

    <link rel="canonical" href="{!! SEOMeta::getCanonical() !!}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <style>
    body,
    h1,
    h2,
    h3,
    h4,
    p,
    h6,
    h5 {
        font-family: "Cairo", serif !important;
    }
    </style>
    @st
    ack
    ('head-scripts')
</head>
