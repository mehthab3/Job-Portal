<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $fillable = [
        'title','description','location','vacancies_count','experience','salary','created_at'
    ];

    public $hidden = [
        'id'
    ];
}
