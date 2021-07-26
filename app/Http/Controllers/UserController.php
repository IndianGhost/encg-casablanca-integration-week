<?php

namespace App\Http\Controllers;

use App\Repositories\Club\ClubRepositoryInterface;
use App\Repositories\Game\GameRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
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
     * @param ClubRepositoryInterface $clubRepositoryInterface
     * @param GameRepositoryInterface $gameRepositoryInterface
     * @param UserRepositoryInterface $userRepositoryInterface
     */
    public function __construct(ClubRepositoryInterface $clubRepositoryInterface,
                                GameRepositoryInterface $gameRepositoryInterface,
                                UserRepositoryInterface $userRepositoryInterface)
    {
        $this->middleware('auth');
        $this->club = $clubRepositoryInterface;
        $this->game = $gameRepositoryInterface;
        $this->user = $userRepositoryInterface;
    }

    public
    function profile()
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public
    function subscribe_club($id)
    {
        $viewPath = 'pages.club-subscribed';
        $authenticated_user = Auth::user();
        $club = $this->club->find($id);
        $authenticated_user->clubs()->attach($club);
        return view($viewPath);
    }

    public
    function subscribe_game($id)
    {
        $viewPath = 'pages.game-subscribed';
        $authenticated_user = Auth::user();
        $game = $this->game->find($id);
        $authenticated_user->games()->attach($game);
        return view($viewPath);
    }

    public
    function update_auth_user(Request $request)
    {
        $route_name = $this->updateUserPhoneNumberAndPassword($request) ? 'home' : 'profile';
        return redirect(route($route_name));
    }

    private
    function updateUserPhoneNumberAndPassword(Request $request)
    {
        if (isset($request->telephone)) {
            $user = Auth::user();
            $data = ['telephone' => $request->telephone];
            if (isset($request->password) &&
                isset($request->new_password) &&
                password_verify($request->password, $user->password)) {

                $data['password'] = Hash::make($request->new_password);

                return $this->user->update($data,
                    'user_id',
                    $user->user_id);
            }
            return $this->user->update($data, 'user_id', $user->user_id);
        }
        return false;
    }
}
