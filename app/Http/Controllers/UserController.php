<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 * @package App\Http\Controllers
 *
 * @author abellaali
 */
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public function subscribe_club($id)
    {
        $viewPath = 'pages.club-subscribed';
        $authenticated_user = Auth::user();
        $club = Club::find($id);
        $authenticated_user->clubs()->attach($club);
        return view($viewPath);
    }

    public function subscribe_game($id)
    {
        $viewPath = 'pages.game-subscribed';
        $authenticated_user = Auth::user();
        $game = Game::find($id);
        $authenticated_user->games()->attach($game);
        return view($viewPath);
    }

    public function update_auth_user(Request $request)
    {
        $user = Auth::user();
        if (!isset($request->telephone)) {
            return redirect(route('profile'));
        } else {
            $q = User::where('user_id', '=', $user->user_id);
            if (isset($request->password) &&
                isset($request->new_password) &&
                password_verify($request->password, $user->password)) {

                $q->update([
                    'telephone' => $request->telephone,
                    'password' => Hash::make($request->new_password)
                ]);
                return redirect(route('home'));
            }
            $q->update(['telephone' => $request->telephone]);
            return redirect(route('home'));
        }
    }
}
