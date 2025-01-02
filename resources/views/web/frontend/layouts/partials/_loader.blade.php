<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5">
    <div class="row gx-4 d-none d-lg-flex">
        <div class="col-lg-6 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-map-marker-alt text-white"></small>
                </div>
                <small>{{settings('address_'.app()->getLocale())}}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-envelope-open text-white"></small>
                </div>
                <small>{{settings('emails')[0] ?? ''}}</small>
            </div>
        </div>
        <div class="col-lg-6 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-phone-alt text-white"></small>
                </div>
                <small>{{settings('phones')[0] ?? ''}}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="far fa-clock text-white"></small>
                </div>
                <small>{{settings('available_in_days_'.app()->getLocale())}} : {{settings('available_in_hours')}}</small>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
