<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class document extends Model
{
    protected $fillable = [
        'title','link', 'user_id',
    ];

}