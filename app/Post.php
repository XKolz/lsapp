<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    //primary
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
