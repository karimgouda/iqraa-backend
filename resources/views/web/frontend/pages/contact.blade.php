@extends('web.frontend.layout')

@section('title', __('site.shared.Contact'))

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('site.shared.Contact')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{route('site.home')}}">{{__('site.shared.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">{{__('site.shared.Pages')}}</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        {{__('site.shared.Contact')}}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                @livewire('contact')
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover"
                                src="{{settings('map_link')}}"
                                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
