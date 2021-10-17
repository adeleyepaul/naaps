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
        return view('pages.psychological_services');
    }

    public function workforce()
    {
        return view('pages.workforce_dev');
    }

    public function services_to_school()
    {
        return view ('pages.services_to_school');
    }

    public function services_for_parents()
    {
        return view ('pages.services_for_parents');
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
