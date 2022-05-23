<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function service()
    {
        return view('pages.our-services.psychological_services');
    }

    public function workforce()
    {
        return view('pages.our-services.workforce_dev');
    }

    public function services_to_school()
    {
        return view ('pages.our-services.services_to_school');
    }

    public function services_for_parents()
    {
        return view ('pages.our-services.services_for_parents');
    }

    public function career()
    {
        return view ('pages.career');
    }

    public function team()
    {
        return view ('pages.team');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function models_consultation()
    {
        return view('pages.service-model.consultation');
    }

    public function models_assessment()
    {
        return view('pages.service-model.assessment');
    }

    public function models_intervention()
    {
        return view('pages.service-model.intervention');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to('newanalysis.associates@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('message', 'Thanks for your message. We will be in touch.');
    }

}
