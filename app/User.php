<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The clubs that belong to the user.
     */
    public function clubs()
    {
        return $this->belongsToMany(Club::class,
            'clubs_users',
            'user_id',
            'club_id');
    }

    /**
     * The games that belong to the user
     */
    public function games()
    {
        return $this->belongsToMany(Game::class,
            'games_users',
            'user_id',
            'game_id');
    }
}
