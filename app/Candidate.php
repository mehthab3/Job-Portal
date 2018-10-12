<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{

    public $fillable = [
        'name','email','password','role','experience','skills','location','company_name','profile','education','created_at'
    ];

    public $hidden = [
        'id'
    ];
}
