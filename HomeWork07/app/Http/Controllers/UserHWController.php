<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserHW;

class UserHWController extends Controller
{
    //
    public function index(){
        return UserHW::all();
    }
    
    public function create(){
        return view('user');
    }

    public function get(Request $request, $id){
        $user=UserHW::where('id',$id)->first();
        return $user;
    }

    public function store(Request $request){
  
        $validated=$request->validate([
            'name'=>['required','max:50'],
            'surname'=>['required','max:50'],
            'email'=>['required','regex:/\b([a-z0-9._-]+@[a-z0-9.-]+)\b/i'],
        ]);
        return UserHW::create($validated);
}
}