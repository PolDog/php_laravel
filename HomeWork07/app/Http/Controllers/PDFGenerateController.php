<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserHW;

class PDFGenerateController extends Controller
{
    //
    public function index(Request $request, $id)
    {
        $user=UserHW::where('id',$id)->first();
        $data=[
            'name'=>$user->name,
            'surname'=>$user->surname,
            'email'=>$user->email
        ];

        /*{{ $user['last_name'] }}*/

        $pdf=\PDF::loadView('resume',['data'=>$data]);
        return $pdf->stream('resume.pdf');
    }
}
