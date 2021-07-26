<?php

namespace App\Http\Controllers;

use App\Models\Enums\CategoryEnum;
use App\Repositories\Attachment\AttachmentRepositoryInterface;
use App\Repositories\Game\GameRepositoryInterface;
use Illuminate\Support\Facades\Auth;

/**
 * Class GameSpaceController
 * @package App\Http\Controllers
 *
 * @author abellaali
 */
class GameSpaceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param AttachmentRepositoryInterface $attachmentRepositoryInterface
     * @param GameRepositoryInterface $gameRepositoryInterface
     */
    public function __construct(AttachmentRepositoryInterface $attachmentRepositoryInterface,
                                GameRepositoryInterface $gameRepositoryInterface)
    {
        $this->middleware('auth');
        $this->middleware('checkUserTel');
        $this->attachment = $attachmentRepositoryInterface;
        $this->game = $gameRepositoryInterface;
    }

    public function game_space()
    {
        $viewPath = 'pages.games';
        $games = $this->gamesToBeDisplayed();

        return view($viewPath, compact('games'));
    }

    private function gamesToBeDisplayed()
    {
        $games = $this->game->getAll();

        foreach ($games as $game) {
            $attachment = $this->attachment
                ->findByCategoryAndGameId(CategoryEnum::GAME_PRESENTATION_IMG, $game->game_id)
                ->first();
            $game->game_presentation_img = $attachment->path;
            $game->is_auth_user_subscribed = $game->users->contains(Auth::id());
        }

        return $games;
    }
}
