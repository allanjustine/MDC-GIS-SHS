<?php

namespace App\Http\Controllers\Normal_View;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class NormalAnnouncementController extends Controller
{

    public function announcement()
    {
        $announcements = Announcement::orderBy('id', 'desc')->paginate(5);

        return view('normal-view.pages.announcement', compact('announcements'));
    }
}
