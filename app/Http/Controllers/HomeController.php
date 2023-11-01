<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("accueil/home");
    }
    public function About(){
        return view("accueil/about");
    }
    public function Contact(){
        return view("accueil/contact");
    }
    public function Signin(){
        return view("accueil/signin");
    }
    public function Signup(){
        return view("accueil/signup");
    }


}