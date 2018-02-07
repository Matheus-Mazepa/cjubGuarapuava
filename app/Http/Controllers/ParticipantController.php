<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipantRequest;

use App\Repository\WorkshopRepository;

use App\Repository\ParticipantRepository;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function __construct()
    {
        $this->participantRepository = new ParticipantRepository();
        $this->workshopRepository = new WorkshopRepository();
    }

    public function create()
    {
        $workshops = $this->workshopRepository->toSelect();
        $total = $this->participantRepository->all()->count();
        return view('participants.create', compact('workshops', 'total'));
    }

    public function store(ParticipantRequest $request)
    {
        $this->participantRepository->create($request->all());
        return redirect()->route('home')->with('success', 'Participante cadastrado com sucesso!');
    }

    public function index()
    {
        $participants = $this->participantRepository->all();
        return view('participants.index', compact('participants'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->participantRepository->update($id, $data);
        return "Pagamento confirmado com sucesso";
    }
}
