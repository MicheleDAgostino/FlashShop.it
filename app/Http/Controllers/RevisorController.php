<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::all()->where('is_accepted', null);
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Hai accetato l\'annuncio');
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Hai rifiutato l\'annuncio');
    }
}
