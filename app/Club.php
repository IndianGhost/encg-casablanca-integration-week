<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Club
 * @package App
 *
 * @author abellaali
 */
class Club extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'club_id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clubs';

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
     * The users that belong to the club.
     */
    public function users()
    {
        return $this->belongsToMany(User::class,
            'clubs_users',
            'club_id',
            'user_id');
    }

    /**
     * The attachments that belong to the club
     */
    public function attachments()
    {
        return $this->belongsToMany(Attachment::class);
    }
}
