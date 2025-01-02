<div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
    <div class="p-lg-5 ps-lg-0">
        <div class="section-title text-start">
            <h1 class="display-5 mb-4">{{__('site.shared.Contact')}}</h1>
        </div>
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <form wire:submit.prevent="save">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" wire:model="name" id="name" placeholder="Your Name" />
                        <label for="name">{{__('pages.Your Name')}}</label>
                    </div>
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" wire:model="email" id="email" placeholder="Your Email" />
                        <label for="email">{{__('pages.Your Email')}}</label>
                    </div>
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" wire:model="phone" id="subject" placeholder="Phone Number" />
                        <label for="subject">{{__('pages.Phone')}}</label>
                    </div>
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="form-floating">
                    <textarea class="form-control" wire:model="message" placeholder="{{__('pages.Your Message')}}" id="message"
                              style="height: 100px"></textarea>
                        <label for="message">{{__('pages.Your Message')}}</label>
                    </div>
                    @error('message')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit" wire:loading.attr="disabled">
                        <span wire:loading.remove>{{__('pages.Send Message')}}</span>
                        <span wire:loading>
                            <i class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></i> {{__('pages.Sending')}}...
                        </span>
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
