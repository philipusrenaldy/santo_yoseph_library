<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'address',
        'phoneNumber',
        'NISN',
        'is_admin',
        'is_guru',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function getAllUser()
    {
        return DB::table('users as u1')
            ->select(
                'u1.id',
                'u1.username',
                'u1.email',
                'u1.name',
                'u1.phoneNumber',
                'u1.address',
                'u1.NISN',
                'u1.created_at',
                'u1.updated_at',
                'u1.deleted_at',
            );
    }
}
