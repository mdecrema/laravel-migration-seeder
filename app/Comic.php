<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',        
        'original_title',
        'author',
        'image',
        'release',
        'amount'
    ];
}
