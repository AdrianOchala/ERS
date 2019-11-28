<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function splits(){
        return view('pages.splits');
    }
    public function ads(){
        return view('pages.ads');
    }
    public function grafs(){
        return view('pages.grafs');
    }
    public function calendar(){
        return view('pages.calendar');
    }
    public function community(){
        return view('pages.community');
    }
    public function archives(){
        return view('pages.archives');
    }

}
