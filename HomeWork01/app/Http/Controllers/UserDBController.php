<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class UserDBController extends Controller
{
    //
    public function showUsers()  {
        $users=DB::connection('mysql')->table('user')->select(['first_name','last_name','email'])->get();
        // $users=DB::connection('mysql')->table('user')->select(['*'])->get();
        echo"<pre>";
        print_r($users);
    }
}
