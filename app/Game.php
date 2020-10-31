<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 * @package App
 *
 * @author abellaali
 */
class Game extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'game_id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'games';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'short_description', 'description',
    ];

    /**
     * Validation rules of attributes
     *
     * @var string[]
     */
    public static $rules = [
        'name' => 'required|string|max:255',
    ];

    /**
     * The users that belong to the game.
     */
    public function users()
    {
        return $this->belongsToMany(User::class,
            'games_users',
            'game_id',
            'user_id');
    }

    /**
     * The attachments that belong to the game.
     */
    public function attachments()
    {
        return $this->belongsToMany(Attachment::class);
    }
}
