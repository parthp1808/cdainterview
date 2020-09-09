<?php

namespace App\Http\Controllers;

use App\Page;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = Page::where('name','main')->first();
        return view('welcome',compact('page'));
    }

    public function contact()
    {
        $page = Page::where('name','contact')->first();
        return view('contact',compact('page'));
    }

    public function contactSubmit(Request $request)
    {
        $setting = Setting::where('key','contact_email')->first();
        $email = $setting->value??'parthp1808@gmail.com';
        Mail::to($email)
            ->send(new \App\Mail\Contact($request->toArray()));
        session()->put('success', 'Your message was sent successfully');

        return redirect()->back();
    }
}
