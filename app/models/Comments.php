<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'Comments';

    protected $fillable = ["name", 'message'];
}
