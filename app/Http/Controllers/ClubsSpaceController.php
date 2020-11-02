<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Club;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('checkUserTel');
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
    public function club_stand($id)
    {
        $viewPath = 'pages.club-stand';

        $club = Club::find($id);

        $isMember = $club->users->contains(Auth::id());

        $attachments = Attachment::where('club_id', $id)->get();

        foreach ($attachments as $attachment) {
            switch ($attachment->category) {
                case 'STAND_FOREGROUND':
                    $club->stand_foreground = $attachment->path;
                    break;
                case 'STAND_PRESENTATION_IMG':
                    $club->stand_presentation_img = $attachment->path;
                    break;
                case 'STAND_VIDEO':
                    $club->stand_video = $attachment->path;
                    break;
                case 'STAND_DOCUMENT':
                    $club->stand_document = $attachment->path;
                    break;
            }
        }

        return view($viewPath)
            ->with([
                'club' => $club,
                'isMember' => $isMember
            ]);
    }
}
