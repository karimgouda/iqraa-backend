<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12 col-md-12">
                <div class="d-flex align-items-center justify-content-center gap-2 pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                        href="{{settings('twitter')}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                        href="{{settings('facebook')}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                        href="{{settings('youtube')}}"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                        href="{{settings('linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <p class="text-light">
                    &copy; All Rgith Reserved <a href="https://klay-team.online/">
                        Klay Team
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
@include('web.frontend.layouts.footer.whatsappicon')

@include('web.frontend.layouts.footer.scrolltotop')

@include('web.frontend.layouts.footer.scripts')

@include('web.frontend.layouts.footer.js')