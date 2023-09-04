<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('sites.index');
    }
    
    public function about(){
        return view('sites.about');
    }
    
    public function news(){
        return view('sites.news');
    }
    
    public function treatment(){
        return view('sites.treatment');
    }
    
    public function doctor(){
        return view('sites.doctor');
    }
    
    public function testimonial(){
        return view('sites.testimonial');
    }

    public function contact(){
        return view('sites.contact');
    }
}
