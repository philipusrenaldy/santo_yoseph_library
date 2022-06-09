<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserHistory extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'user_id',
        'book_id',
        'date'
    ];
}
