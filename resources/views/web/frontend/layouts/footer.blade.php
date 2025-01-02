<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{settings('address_'.app()->getLocale())}}</p>
                @foreach(settings('phones') as $phone)
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>{{$phone}}
                    </p>
                @endforeach

                @foreach(settings('emails') as $email)
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>{{$email}}
                    </p>
                @endforeach

                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="{{settings('twitter')}}"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                       href="{{settings('facebook')}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="{{settings('youtube')}}"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="{{settings('linkedin')}}"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Services</h5>
                <a class="btn btn-link" href="">Business Security</a>
                <a class="btn btn-link" href="">Fire Detection</a>
                <a class="btn btn-link" href="">Alarm Systems</a>
                <a class="btn btn-link" href="">CCTV & Video</a>
                <a class="btn btn-link" href="">Smart Home</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
@include('web.frontend.layouts.footer.whatsappicon')

@include('web.frontend.layouts.footer.scrolltotop')

@include('web.frontend.layouts.footer.scripts')

@include('web.frontend.layouts.footer.js')
