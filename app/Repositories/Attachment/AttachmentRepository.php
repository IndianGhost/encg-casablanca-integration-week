<?php


namespace App\Repositories\Attachment;

use App\Models\Attachment;

class AttachmentRepository implements AttachmentRepositoryInterface
{
    public $attachment;

    public function __construct(Attachment $attachment)
    {
        $this->attachment = $attachment;
    }

    public function getAll()
    {
        return $this->attachment->getAll();
    }

    public function find($id)
    {
        return $this->attachment->findAttachment($id);
    }

    public function update(array $data, $attribute, $attribute_value, $operator = "=")
    {
        return Attachment::where($attribute, $operator, $attribute_value)->update($data);
    }

    public function delete($id)
    {
        return $this->attachment->deleteAttachment($id);
    }

    public function findByGameId($game_id)
    {
        return Attachment::where('game_id', $game_id)->get();
    }

    public function findByClubId($club_id)
    {
        return Attachment::where('club_id', $club_id)->get();
    }

    public function findByCategoryAndGameId($category, $game_id)
    {
        return Attachment::where('category', $category)
            ->where('game_id', $game_id)
            ->get();
    }

    public function findByCategoryAndClubId($category, $club_id)
    {
        return Attachment::where('category', $category)
            ->where('club_id', $club_id)
            ->get();
    }
}
