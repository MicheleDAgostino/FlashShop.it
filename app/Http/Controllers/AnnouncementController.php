<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(){
        return view('announcement.create');
    }

    public function index(){

        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(9);
        return view('announcement.index', compact('announcements'));

    }

    public function show(Announcement $announcement){
        return view('announcement.show', compact('announcement'));
    }
}
