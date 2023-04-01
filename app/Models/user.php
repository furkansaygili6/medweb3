<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $id)
 */
class user extends Model
{
    protected $primaryKey ="user_id";
    use HasFactory;

    protected $fillable =[
        "user_id",
        "name",
        "email",
        "password",
    ];

    protected $hidden=[
        "password",
        "remember_token",
        ];
    protected $casts=[
        "email_verified_at"=> "datetime",
        ];
}
