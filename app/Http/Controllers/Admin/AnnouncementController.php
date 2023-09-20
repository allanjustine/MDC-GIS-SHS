<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function announcement()
    {
        $count = Announcement::count();
        $announcements = Announcement::orderBy('id', 'asc')->paginate(10);

        return view('admin.pages.announcement', compact('announcements', 'count'));
    }
    public function announcementCreate()
    {
        return view('admin.pages.announcement-create');
    }

    public function announcementStore(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'remarks' => 'required',
        ]);

        Announcement::create([
            'title'         =>      $request->input('title'),
            'remarks'       =>      $request->input('remarks')
        ]);

        return redirect('/admin/announcements/create')->with('message', 'New Announcement Added');
    }
    public function announcementUpdate($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.pages.announcement-update', compact('announcement'));
    }
}
