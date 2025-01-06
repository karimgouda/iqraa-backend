@extends('web.frontend.layout')

@section('title', __('site.shared.Services'))

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('site.shared.Services')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-white" href="{{route('site.home')}}">{{__('site.shared.Home')}}</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">{{__('site.shared.Pages')}}</a>
                </li>
                <li class="breadcrumb-item text-white active" aria-current="page">
                    {{__('site.shared.Services')}}
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px"></div>
            <h1 class="display-5 mb-5">{{__('pages.Our Services')}}</h1>
        </div>
        <div class="row g-0 service-row">
            @foreach($blogs as $key=>$blog)
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.{{++$key}}s">
                <div class="service-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-2 mb-4" style="width: 100%; height: 200px">
                        <img class="img-fluid" src="{{public_storage($blog->image)}}" alt="Icon" />
                    </div>
                    <h4 class="mb-3">{{$blog->title}}</h4>
                    <p class="mb-4">
                        {{$blog->description}}
                    </p>
                    <a class="btn" href="/"><i
                            class="fa fa-arrow-right text-white me-3"></i>{{__('pages.Read More')}}</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Service End -->
@endsection