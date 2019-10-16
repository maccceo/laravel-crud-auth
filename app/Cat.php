<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
    	'name',
    	'race',
    	'cat_rfid'
    ];
}
