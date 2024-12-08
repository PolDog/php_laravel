<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessorController extends Controller
{
    //
    public function index()
    {
       return view('user_form');
    }

    // public function store(Request $request)
    // {
    //     $userData=['user name'=>$request->first_name,'last name'=>$request->last_name,'email'=>$request->email];
    //     return response()->json($userData);
    // }

    public function store(Request $request)
    {
        $userData=['user name'=>$request->first_name,'last name'=>$request->last_name,'email'=>$request->email];
        return view('hello',['user'=>$userData]);
    }
}
