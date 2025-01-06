@extends('web.frontend.layout')

@section('title', __('site.shared.Home'))

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach($features as $feature)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{public_storage($feature->image)}}" alt="" />
            <div class="carousel-inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h1 class="display-3 text-white animated slideInDown mb-4">
                                {{$feature->title}}
                            </h1>

                            <a href="{{route('site.about')}}"
                                class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">{{__('pages.Read More')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
<!-- Carousel End -->

<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($services as $key=>$service)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <!-- Add a class or inline style to make the image circular -->
                            <div class="btn-square rounded-circle"
                                 style="width: 64px; height: 64px; background: #000000; overflow: hidden;">
                                <img class="img-fluid"
                                     src="{{asset('frontend')}}/img/Logo.png"
                                     alt="Icon"
                                     style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;" />
                            </div>

                            <h1 class="display-1 mb-0" style="color: #000000">{{++$key}}</h1>
                        </div>
                        <h5 class="text-white">{{$service->title}}</h5>
                        <hr class="w-25" />
                        <span>{{$service->description}}</span>
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
            <div class="col-lg-6 ps-lg-0" style="min-height: 500px">
                <div class="position-relative h-100">
                    <video class="position-absolute w-100 h-100" controls autoplay style="object-fit: cover">
                        <source src="{{asset('frontend/video.mp4')}}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px"></div>
                    <h1 class="display-5 mb-4">{{$about->title}}</h1>
                    <p class="mb-4 pb-2">
                        {{$about->description}}
                    </p>
                    <a href="{{route('site.about')}}"
                        class="btn btn-primary rounded-pill py-3 px-5">{{__('pages.Explore More')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->

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
                    <a class="btn" href="{{route('site.services')}}"><i
                            class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Service End -->





<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px"></div>
            <h1 class="display-5 mb-5">{{__('pages.Team Members')}}</h1>
        </div>
        <div class="row g-4">
            @foreach($workers as $key=>$worker)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.{{++$key}}s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="{{public_storage($worker->image)}}" alt="" />
                        <div class="team-social">
                            <a class="btn btn-square btn-dark rounded-circle m-1"
                                href="https://www.facebook.com/Eqraaserv1?mibextid=ZbWKwL"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-dark rounded-circle m-1"
                                href="https://www.instagram.com/Eqraaserv14/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">{{$worker->name}}</h5>
                        <span class="text-primary">{{$worker->description}}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px"></div>
            <h1 class="display-5 mb-5">{{__('pages.Testimonial')}}</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-item text-center"
                data-dot="<img class='img-fluid' src='{{public_storage($testimonial->image)}}' alt=''>">
                <p class="fs-5">
                    {{$testimonial->description}}
                </p>
                <h4>{{$testimonial->title}}</h4>
                <span class="text-primary">{{$testimonial->video}}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection
