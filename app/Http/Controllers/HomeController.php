<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Doctor;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {
        $most_blogs = Blog::query()->orderByDesc('views')->limit('3')->get();
        $doctors = Doctor::query()->orderByDesc('created_at')->limit('4')->get();
        return view('home',compact('most_blogs','doctors'));
    }
    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function about()
    {
        return view('about.about');
    }



}
