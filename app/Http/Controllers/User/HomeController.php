<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\blog;

class HomeController extends Controller
{
    public function home(){
        $blogs=blog::all();
    	return view('user.home', compact('blogs'));
    }

    public function about(){
        $blogs = blog::all();
    	return view('user.about', compact('blogs'));
    }

    public function contact(){
    	return view('user.contact');
    }

    public function myblog(){
        $blogs = blog::all();
    	return view('user.myblog', compact('blogs'));
    }

    public function signin(){
        return view('user.signin');
    }

    public function blog1(){
        return view('user.blog1');
    }
}
