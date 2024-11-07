<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'Title',
        'Author',
        'Publication_Date',
        'Category',
        'Content',
        'Source',
    ];
}
