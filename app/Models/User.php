<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App
 *
 * @author laravel
 */
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
     * The list of {@link Club} that belong to the current {@link User}
     *
     * @return BelongsToMany
     */
    public function clubs()
    {
        return $this->belongsToMany(Club::class,
            'clubs_users',
            'user_id',
            'club_id');
    }

    /**
     * The list of {@link Game} that belong to the current {@link User}
     *
     * @return BelongsToMany
     */
    public function games()
    {
        return $this->belongsToMany(Game::class,
            'games_users',
            'user_id',
            'game_id');
    }

    /**
     * The list of {@link Contact} that belongs to the current {@link User}
     *
     * @return BelongsToMany
     */
    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }
}
