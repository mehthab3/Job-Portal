<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
   
    public $fillable = [
        'name','email','password','industry','created_at'
    ];

    public $hidden = [
        'id'
    ];
   

}
