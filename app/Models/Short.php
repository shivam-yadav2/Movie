<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Short extends Model
{
    //
    protected $fillable = [
        'heading',
        'category',
        'image',
        'url'
    ];

    protected $table = 'shorts';
    public $timestampe = true;
}
