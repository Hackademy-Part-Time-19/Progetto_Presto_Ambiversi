<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{
    protected $categories;

    public function __construct()
    {
        // Fetch the Site Settings object
        $this->categories = Category::all();
        View::share('categories', $this->categories);
    }
    public function welcome()
    {

        $announcements = Announcement::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
        return view('homepage', compact('announcements'));
    }
    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }

    public function searchAnnouncements(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted',true)->paginate(6);
        return view('announcements.index',compact('announcements'));
    }
}
