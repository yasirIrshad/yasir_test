<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // <-- This is required


class Posts extends Model
{

    protected $table = 'posts';
    public $timestamps = true;
    use SoftDeletes; // <-- Use This Instead Of SoftDeletingTrait

    protected $fillable = [
        'title',
        'content',
    ];

}
