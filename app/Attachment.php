<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'category' => 'required', //To add `Illuminate\Validation\Rule::in(['LOGO', 'IMAGE', 'VIDEO', 'OTHER'])`
        'path' => 'required|string|max:255',
    ];

    /**
     * Get the club that owns the attachment.
     */
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    /**
     * Get the game that owns the attachments
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
