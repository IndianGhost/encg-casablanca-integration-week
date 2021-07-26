<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Attachment
 * @package App
 *
 * @author abellaali
 */
class Attachment extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'attachment_id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attachments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category', 'path',
    ];

    /**
     * Validation rules of attributes
     *
     * @var string[]
     */
    public static $rules = [
        'title' => 'required|unique:attachments',
        'category' => 'required',
        'path' => 'required|string|max:255',
    ];

    /**
     * The {@link Club} that owns the current {@link Attachment}
     *
     * @return BelongsTo
     */
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    /**
     * The {@link Game} that owns the current {@link Attachment}
     *
     * @return BelongsTo
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function getAll()
    {
        return static::all();
    }

    public function findAttachment($id)
    {
        return static::find($id);
    }


    public function deleteAttachment($id)
    {
        return static::find($id)->delete();
    }
}
