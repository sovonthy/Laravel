<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function view(){
        return view('welcome');
    }

    public function action(){
        $action = "action";
        return view('pages.action' ,compact('action'));
    }

    public function about(){
        $about = "about";
        return view('pages.about', compact('about'));
    }

    public function join(){
        $join = "join";
        return view('pages.join', compact('join'));
    }

    public function news(){
        $news = "news";
        return view('pages.news', compact('news'));
    }

    public function contact(){
        $contact = "contact";
        return view('pages.contact', compact('contact'));
    }
    public function showCustomer(){
        $showCustomer = array("Chandaraty", "Maly", "Samphas", "Donat");
        return view('pages.customer', compact('showCustomer'));
    }
}
