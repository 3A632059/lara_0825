<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //練習1-2
    protected $table='posts';

    //練習2-3
    protected $fillable=[
        'title',
        'content',
        'is_feature'
    ];

}
