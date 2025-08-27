<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
     protected $fillable = [
        'heading',
        'category',
        'embed_code',
        'image',
        'url'
    ];

    protected $table = 'videos';
    public $timestampe = true;
}
