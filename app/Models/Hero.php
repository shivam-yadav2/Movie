<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    //
    protected $fillable = [
        'heading',
        'subheading',
        'image'
    ];

    protected $table = 'heros';
    public $timestamps = true;
}
