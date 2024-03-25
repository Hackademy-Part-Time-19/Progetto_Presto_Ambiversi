<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement(){
        return view('announcements.create');
    }

public function index(Category $category = null){
  return view('announcements.index',compact('category' ));
}


}
