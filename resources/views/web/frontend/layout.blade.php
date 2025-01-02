<!DOCTYPE html>
<html @if (app()->getLocale() == 'ar') lang="ar" dir="rtl" @endif>

@include('web.frontend.layouts.head')
@livewireStyles

<body>


    @include('web.frontend.layouts.partials._loader')

    @include('web.frontend.layouts.header')

    @yield('content')


    @include('web.frontend.layouts.footer')
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    {!! settings('body_manager_script') !!}
    @livewireScripts
</body>

</html>
