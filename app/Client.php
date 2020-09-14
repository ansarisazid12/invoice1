<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    protected $fillable = [
        'name','phone','email','gst','pan','address','city','state','country','pincode'
    ];
}
