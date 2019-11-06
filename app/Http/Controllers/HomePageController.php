<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('user.index');
    }
    
    public function faq(){
        return view('user.faq');
    }
    
    public function login(){
        return view('user.login');
    }
    
    public function signup(){
        return view('user.signup');
    }
    
    public function privacypolicy(){
        return view('user.pirvacy');
    }
    
    public function aboutus(){
        return view('user.aboutus');
    }
    
    public function contactus(){
        return view('user.contactus');
    }
    
    public function productView(){
        return view('user.productview');
    }
    
     public function howToBuy(){
        return view('user.howtobuy');
    }
    
    public function translate(){
        return view('user.translate');
    }
    
    public function productbyCategory(){
        return view('user.productbycategory');
    }
    
    public function termCondition(){
        return view('user.term-and-codition');
    }
    
    public function productCompare(){
        return view('user.productcompare');
    }
}
