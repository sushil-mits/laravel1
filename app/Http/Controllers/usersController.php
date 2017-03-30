<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class usersController extends Controller
{
    public function index()
    {
    	$users=[
    		'0'=>[
    			'first_name'=>'Sushil',
    			'last_name'=>'Thapa',
    			'location'=>'Kathmandu'
    		],
    		'1'=>[
    			'first_name'=>'Ram',
    			'last_name'=>'Shrestha',
    			'location'=>'Pokhara'
    		],  		

    	];
    	return view('admin.users.index', compact('users'));

    }


    public function create(){

    	return view('admin.users.create');
    }

    public function store(Request $request){
    	User::create($request->all());
    	return 'success';
    	return $request->all();
    }
}
