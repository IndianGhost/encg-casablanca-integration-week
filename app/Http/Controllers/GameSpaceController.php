<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Game;
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
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkUserTel');
    }

    public function game_space()
    {
        $viewPath = 'pages.games';

        $games = Game::get();

        foreach ($games as $game) {
            $attachment = Attachment::where('category', 'GAME_PRESENTATION_IMG')
                ->where('game_id', $game->game_id)
                ->first();
            $game->game_presentation_img = $attachment->path;
            $game->is_auth_user_subscribed = $game->users->contains(Auth::id());
        }

        return view($viewPath, compact('games'));
    }
}
