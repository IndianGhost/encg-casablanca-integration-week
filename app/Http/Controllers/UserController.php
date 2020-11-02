<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Support\Facades\Auth;

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

    public function subscribe_club($id)
    {
        $viewPath = 'pages.club-subscribed';
        $authenticated_user = Auth::user();
        $club = Club::find($id);
        $authenticated_user->clubs()->attach($club);
        return view($viewPath);
    }
}
