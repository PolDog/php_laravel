<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // name, age, position, address
    $users=[
        ['name'=>'user1','age'=>20,'position'=>1,'addres'=>'Russia 1'],
        ['name'=>'user2','age'=>10,'position'=>2,'addres'=>'Russia 2'],
        ['name'=>'user3','age'=>15,'position'=>3,'addres'=>'Russia 3'],
        ['name'=>'user4','age'=>40,'position'=>4,'addres'=>'Russia 4']
    ];
    return view('home',['usersArray'=>$users]);
});

Route::get('/contacts',function(){
    $contacts=[
        ['addres'=>'Russia 1','post_code'=>200,'email'=>'no1@mail.com','phone'=>'123 45 89'],
        ['addres'=>'Russia 2','post_code'=>300,'email'=>'','phone'=>'111 45 89'],
        ['addres'=>'Russia 3','post_code'=>400,'email'=>'no3@mail.com','phone'=>'333 45 89'],
        ['addres'=>'Russia 4','post_code'=>500,'email'=>'no4@mail.com','phone'=>'555 45 89'],
    ];
    return view('contacts',['contactsArray'=>$contacts]);
});
