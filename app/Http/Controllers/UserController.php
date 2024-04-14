<?php

namespace App\Http\Controllers;

use App\Jobs\ResizeImage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $userImage = $request->image;
            $newFileName = "users/".Auth()->user()->id;
            $profile_path =  $userImage->store($newFileName,'public');
            Auth()->user()->update(['profile_photo_path'=>$profile_path]);
            dispatch(new ResizeImage($profile_path, 150, 150));
        }
        return redirect()->back()->with('message','foto profilo caricata');
    }
}
