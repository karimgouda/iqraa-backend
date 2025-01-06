@extends('web.frontend.layout')

@section('title', __('site.shared.About'))

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('site.shared.About')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{route('site.home')}}">{{__('site.shared.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">{{__('site.shared.Pages')}}</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        {{__('site.shared.About')}}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($services as $key=>$service)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.{{++$key}}s">
                        <div class="h-100 bg-dark p-4 p-xl-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #000000">
                                    <img class="img-fluid" src="{{public_storage($service->image)}}" alt="Icon" />
                                </div>
                                <h1 class="display-1 mb-0" style="color: #000000">{{++$key}}</h1>
                            </div>
                            <h5 class="text-white">{{$service->title}}</h5>
                            <hr class="w-25" />
                            <span>{{str()->limit($service->description)}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{public_storage($about->image)}}" style="object-fit: cover" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px"></div>
                        <h1 class="display-5 mb-4">{{$about->title}}</h1>
                        <p class="mb-4 pb-2">
                            {{$about->description}}
                        </p>
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5">{{__('pages.Explore More')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
