<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\Integer;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'phone',
        'login',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Получение пользователя по id
     * @param int $id - id пользователя
     * @return object
     */
    protected static function getUserById(int $id): object
    {
        return self::where('id', $id)->first();
    }

    /**
     * Получение пользователя по логину
     * @param string $login - логин пользователя
     * @return object
     */
    protected static function getUserByLogin(string $login): object
    {
        return self::where('login', $login)->first();
    }

    /**
     * Получение пользователя по телефон
     * @param int $phone - телефон пользователя
     * @return object
     */
    protected static function getUserByPhone(int $phone): object
    {
        return self::where('phone', $phone)->first();
    }
}
