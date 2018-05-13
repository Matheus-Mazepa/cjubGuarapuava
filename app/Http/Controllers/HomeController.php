<?php

namespace App\Http\Controllers;

use App\Repository\ParticipantRepository;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participantRepository = new ParticipantRepository();
        $totalParticipants = 154 - $participantRepository->all()->count();
        return view('home', compact('totalParticipants'));
    }
}
