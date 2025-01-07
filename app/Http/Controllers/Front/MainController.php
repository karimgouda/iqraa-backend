<?php

namespace App\Http\Controllers\Front;

use App\Models\Goal;
use App\Models\Build;
use App\Models\Skill;
use App\Models\Banner;
use App\Models\Leader;
use App\Models\Worker;
use App\Models\Company;
use App\Models\Discuss;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\Promise;
use App\Models\Quality;
use App\Models\AboutSlider;
use App\Models\AboutHistory;
use App\Models\HomeCategory;
use App\Models\ServicesMenu;
use Illuminate\Http\Request;
use App\Models\AboutStatistic;
use App\Models\Characteristic;
use App\Models\ServicesGallery;
use App\Models\ServicesTrouble;
use App\Models\ServicesSolution;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\PrivacyPolicy;
use App\Models\TermsCondition;
use App\Services\SEOFrontRenderService;

class MainController extends Controller
{
    public function __construct()
    {
        SEOFrontRenderService::generalRender();
    }

    /**
     * Home Page
     *
     * @return Response
     */
    public function home()
    {
        $features           = Feature::get();
        $characteristics    = Characteristic::limit(3)->get();
        $services  = AboutSlider::limit(3)->get();
        $workers = Worker::limit(6)->get();
        $testimonials = HomeCategory::get();
        $about = Quality::first();
        $blogs = Build::limit(3)->get();
        return view('web.frontend.pages.home', compact('features', 'characteristics','services','workers','testimonials','about','blogs'));
    }

    /**
     * About Page
     *
     * @return Response
     */
    public function about()
    {
        $services  = AboutSlider::limit(3)->get();
        $about = Quality::first();
        $workers = Worker::limit(6)->get();
        return view('web.frontend.pages.about',compact('services','about','workers'));
    }

    /**
     * Services Page
     *
     * @return Response
     */
    public function services()
    {
        $blogs = Build::get();
        return view('web.frontend.pages.services',compact('blogs'));
    }

    /**
     * Contact Page
     *
     * @return Response
     */
    public function contact()
    {
        return view('web.frontend.pages.contact');
    }

    /**
     * Store new contact
     *
     * @param ContactRequest $request
     * @return void
     */
    public function storeContact(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success', __("pages.contact.We've received your request successfully!"));
    }

    /**
     * Privacy & Policy Page
     *
     * @return Response
     */
    public function privacyPolicy()
    {
        $banner             = Banner::where('page_type', 'privacy_&_policy')->first();
        $privacyPolicies    = PrivacyPolicy::get();

        return view('web.frontend.pages.privacy_&_policy', compact('banner', 'privacyPolicies'));
    }

    /**
     * Terms & Conditions Page
     *
     * @return Response
     */
    public function termsConditions()
    {
        $banner = Banner::where('page_type', 'terms_&_conditions')->first();
        $termConditions = TermsCondition::get();

        return view('web.frontend.pages.terms_&_conditions', compact('banner', 'termConditions'));
    }
}
