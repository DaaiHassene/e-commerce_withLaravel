<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender',
        'subject',
        'msg'
    ];
    
}