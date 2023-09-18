<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->limit(6)->get();
        return view('welcome', compact('announcements'));
    }

    public function workWithUs(){
        return view('work-with-us');
    }

    public function searchAnnouncement(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(9);
        return view('announcement.index', compact('announcements'));
    }

    public function categoryShow(Category $category){
        return view('category-show', compact('category'));
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
