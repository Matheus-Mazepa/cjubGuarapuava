<?php

namespace App\Http\Controllers;

use App\Repository\WorkshopRepository;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshopRepository = new WorkshopRepository();
        $workshops = $workshopRepository->all();
        return view('workshops.index', compact('workshops'));
    }
}
