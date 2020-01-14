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
    public function ersGreen(){
        return view('archives.ersGreen');
    }
    public function ersBlue(){
        return view('archives.ersBlue');
    }
    public function f1(){
        return view('archives.f1');
    }
    public function f2(){
        return view('archives.f2');
    }
    public function f3(){
        return view('archives.f3');
    }
    public function f4(){
        return view('archives.f4');
    }
    public function jeszczeNic(){
        return view('archives.jeszczeNic');
    }
}
