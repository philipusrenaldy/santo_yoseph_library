<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'book_name',
        'author',
        'publisher',
        'published_at',
        'published_city',
        'NISN',
        'book_code',
        'ISBN',
        'book_size',
        'note',
        'abstract',
        'synopsis'
    ];

    public function getData()
    {

    }
}
