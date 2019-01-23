<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'last_name', 'nationality','birthdate','sex','email','civil_status','id_number','title_name','type_of_title','level_of_title','status_of_title',
    ];
}
