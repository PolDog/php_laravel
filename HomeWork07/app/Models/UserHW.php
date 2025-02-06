<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHW extends Model
{
    /** @use HasFactory<\Database\Factories\UserHWFactory> */
    use HasFactory;
    public $fillable=['name','surname','email'];
}
