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
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap');
    </style>
    <style>
    * {
        font-family: "Cairo", serif !important;
    }
    </style>
    @st
    ack('head-scripts')
</head>
