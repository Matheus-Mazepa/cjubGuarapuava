<?php

namespace App\Http\Controllers;

use App\Repository\ParticipantRepository;
use Illuminate\Http\Request;

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
        $totalParticipants = 150 - $participantRepository->all()->count();
        return view('home', compact('totalParticipants'));
    }
}
