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

        return view('admin.pages.announcement.announcement', compact('announcements', 'count'));
    }
    public function announcementCreate()
    {
        return view('admin.pages.announcement.announcement-create');
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

        return redirect('/admin/announcements')->with('message', 'New Announcement Added');
    }
    public function edit(Announcement $announcement)
    {
        return view('admin.pages.announcement.announcement-update', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'title' => 'required|max:255',
            'remarks' => 'required',
        ]);

        $announcement->update([
            'title'         =>      $request->input('title'),
            'remarks'       =>      $request->input('remarks')
        ]);

        return redirect('/admin/announcements')->with('message', 'Announcement was updated successfully');
    }

    public function toDelete(Announcement $announcement)
    {
        return view('admin.pages.announcement.announcement-confirm-delete', compact('announcement'));
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect('/admin/announcements')->with('message', 'Announcement |' . $announcement->title .  '| was deleted successfully');
    }
}
