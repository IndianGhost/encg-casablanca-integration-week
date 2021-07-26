<?php

namespace App\Http\Controllers;

use App\Models\Enums\CategoryEnum;
use App\Repositories\Attachment\AttachmentRepositoryInterface;
use App\Repositories\Club\ClubRepositoryInterface;
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
     * @param AttachmentRepositoryInterface $attachmentRepositoryInterface
     * @param ClubRepositoryInterface $clubRepositoryInterface
     */
    public function __construct(AttachmentRepositoryInterface $attachmentRepositoryInterface,
                                ClubRepositoryInterface $clubRepositoryInterface)
    {
        $this->middleware('auth');
        $this->middleware('checkUserTel');
        $this->attachment = $attachmentRepositoryInterface;
        $this->club = $clubRepositoryInterface;
    }

    /**
     * method returns the appropriate view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function club_space()
    {
        $viewPath = 'pages.clubs-space';
        $clubs = $this->clubsToBeDisplayedInClubSpace();
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
        $club = $this->club->find($id);
        $isMember = $club->users->contains(Auth::id());
        $this->prepareAttachmentsOfClubStand($club);

        return view($viewPath)
            ->with([
                'club' => $club,
                'isMember' => $isMember
            ]);
    }

    private function clubsToBeDisplayedInClubSpace()
    {
        $clubs = $this->club->getAll();
        foreach ($clubs as $club) {
            $attachment = $this->attachment
                ->findByCategoryAndClubId(CategoryEnum::AREA_HOVER_LOGO, $club->club_id)
                ->first();
            $club->area_hover_logo = $attachment->path;
        }
        return $clubs;
    }

    private function prepareAttachmentsOfClubStand($club)
    {
        $attachments = $this->attachment->findByClubId($club->club_id);
        foreach ($attachments as $attachment) {
            switch ($attachment->category) {
                case CategoryEnum::STAND_FOREGROUND:
                    $club->stand_foreground = $attachment->path;
                    break;
                case CategoryEnum::STAND_PRESENTATION_IMG:
                    $club->stand_presentation_img = $attachment->path;
                    break;
                case CategoryEnum::STAND_VIDEO:
                    $club->stand_video = $attachment->path;
                    break;
                case CategoryEnum::STAND_DOCUMENT:
                    $club->stand_document = $attachment->path;
                    break;
            }
        }
    }
}
