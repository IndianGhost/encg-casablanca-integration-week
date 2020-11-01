<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Club;

/**
 * Class ClubsSpaceController
 * @package App\Http\Controllers
 *
 * @author abellaali
 */
class ClubsSpaceController extends Controller
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

    /**
     * method returns the appropriate view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function club_space()
    {
        $viewPath = 'pages.clubs-space';

        $clubs = Club::get();

        foreach ($clubs as $club) {
            $attachment = Attachment::where('category', 'AREA_HOVER_LOGO')
                ->where('club_id', $club->club_id)
                ->first();
            $club->area_hover_logo = $attachment->path;
        }

        return view($viewPath, compact('clubs'));
    }

    /**
     * method returns the appropriate view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function club_stand()
    {
        return view('pages.club-stand');
    }
}
