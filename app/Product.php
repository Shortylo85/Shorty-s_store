<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'description','specifications','category','photo','price'
    ];
}
