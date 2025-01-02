<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="{{route('site.home')}}" class="navbar-brand d-flex align-items-center">
        <img src="{{asset('frontend')}}/img/Logo.png" alt="" width="100" height="100" />
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-4 py-lg-0">
            <a href="{{route('site.home')}}"  @class([request()->routeIs('site.home') ? 'nav-item nav-link active' : 'nav-item nav-link'])>{{__('site.shared.Home')}}</a>
            <a href="{{route('site.about')}}" @class([request()->routeIs('site.about') ? 'nav-item nav-link active' : 'nav-item nav-link'])>{{__('site.shared.About')}}</a>
            <a href="{{route('site.services')}}" @class([request()->routeIs('site.services') ? 'nav-item nav-link active' : 'nav-item nav-link'])>{{__('site.shared.Services')}}</a>
            <a href="{{route('site.contact')}}" @class([request()->routeIs('site.contact') ? 'nav-item nav-link active' : 'nav-item nav-link'])>{{__('site.shared.Contact')}}</a>
        </div>


        <div class="h-100 d-lg-inline-flex align-items-center d-none mx-3">
            <a class="btn btn-square rounded-circle bg-light text-primary me-2"
               href="{{settings('facebook')}}"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{settings('twitter')}}"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{settings('linkedin')}}"><i
                    class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-0"
               href="{{settings('instagram')}}"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
