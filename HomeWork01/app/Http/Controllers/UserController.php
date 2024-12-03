<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __invoke(){
        DB::connection('mysql')->table('user')->insert(['first_name'=>'test1','last_name'=>'test1_last','email'=>'test_mail']);
        $users=DB::connection('mysql')->table('user')->select('first_name','email')->get();
        // foreach ($users as $user) {
        //     echo $user->first_name.'<br>';
        // }
        // echo"<pre>";
        // print_r($users);
        // return view('users',['users'=>$users]);
        return view('users_twig',['users'=>$users]);
    }
}
