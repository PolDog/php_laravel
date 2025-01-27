<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeControlle extends Controller
{
    //
    public function index(){
        return view('get-employee-data');
    }

    public function store(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $address=$request->input('address');
        $json=$request->input('json_text');
        echo $name;
        echo"<br>";
        echo $email;
        echo"<br>";
        echo $address;
        echo"<br>";
        echo"<br>";
        $this->getPath($request);
        echo"<br>";
        $this->getUrl($request);
        echo"<br>";
        print_r(json_decode($json));
        echo"<br>";
    }

    public function update(Request $request, $id){
        $Id=$id;
        $name=$request->input('name');
        $email=$request->input('email');
        $address=$request->input('address');
    }

    public function getPath(Request $request){
        $path=$request->path();
        echo $path;
    }

    public function getUrl(Request $request){
        $url=$request->url();
        echo $url;
    }
}
