<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function createAnnouncement()
    {
        return view('announcements.create');
    }
    public function showAnnouncement(Announcement $announcement)
    {
        return view('announcements.show', compact('announcement'));
    }
    public function indexAnnouncement()
    {
        $announcements_all = Announcement::where('is_accepted', true)->get();
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at','desc')->paginate(6);
        return view('announcements.index', compact('announcements','announcements_all'));
    }
    public function addToFavorites(Announcement $announcement)
    {
        $user = auth()->user();
        if ($user->favoriteAnnouncements->contains($announcement)) {
           
            $user->favoriteAnnouncements()->detach($announcement);
            return redirect()->back()->with('success', 'Annuncio rimosso dai preferiti!');
        } else {

            $user->favoriteAnnouncements()->attach($announcement);
            return redirect()->back()->with('success', 'Annuncio aggiunto ai preferiti!');
        }
    }

    public function showFavorites()
    {
        $user = auth()->user();
        $Announcements = $user->favoriteAnnouncements()->orderBy('created_at','desc')->paginate(6);

        return view('announcements.index', compact('Announcements'));
    }

}
