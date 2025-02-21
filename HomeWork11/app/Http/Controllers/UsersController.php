<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UsersController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;
    //
    public function index(){
        $this->authorize('view-any',User::class);
        return User::all();
        
    }
}
