<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Views;
class PagesController extends Controller
{
    public function profile(){
    	return view('pages.profile');
    }

    public function settings(){
    	return view('pages.settings');
    }

    public function blade(){

    	$gender='male';

    	$text = 'Hello there!';
    	return view('blade.bladetest', compact('gender','text'));
    }
}
