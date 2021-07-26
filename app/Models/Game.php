<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
     * The list of {@link User} that belong to the current {@link Game}
     *
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class,
            'games_users',
            'game_id',
            'user_id');
    }

    /**
     * The list of {@link Attachment} that belong to the current {@link Game}
     *
     * @return BelongsToMany
     */
    public function attachments()
    {
        return $this->belongsToMany(Attachment::class);
    }
}
