<?php

namespace App\Repositories\Attachment;

use App\Repositories\DefaultRepository;

interface AttachmentRepositoryInterface extends DefaultRepository
{
    public function findByGameId($game_id);

    public function findByClubId($club_id);

    public function findByCategoryAndGameId($category, $game_id);

    public function findByCategoryAndClubId($category, $club_id);
}
