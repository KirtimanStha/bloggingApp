<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;

class PanelController extends Controller
{


	public function __construct(){
		$this->middleware('auth:admin');
	}


    public function profile(){
    	return view('admin.profile');
    }

    public function create(){
    	return view('admin.create');
    }

    public function dashboard(){
        $all_messages = Message::all(); 
        $unread_messages = Message::where('read', 0);
    	return view('admin.dashboard',compact('all_messages', 'unread_messages'));
    }
}
