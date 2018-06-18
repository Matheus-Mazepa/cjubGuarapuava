<?php

namespace App\Http\Controllers;

use App\Repository\ImageRepository;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    const PER_PAGE = 12;

    private $imageRepository;

    public function __construct()
    {
        $this->imageRepository = new ImageRepository();
}

    public function index()
    {
        $total = $this->imageRepository->model->count();
        $pages = (int)($total/$this::PER_PAGE);
        if ($total%$this::PER_PAGE > 0)
            $pages++;

        $images = $this->imageRepository->model->paginate($this::PER_PAGE);
        return view('images.index', compact('images', 'pages'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function destroy($id)
    {
        $image = $this->imageRepository->find($id);
        $image->delete();
        return redirect()->to(route('images.index'));
    }

    public function store(Request $request)
    {
        $data = $request->only('images');

        $this->imageRepository->create($data);
        return redirect()->to(route('images.index'));
    }

    public function download($id)
    {
        $image = $this->imageRepository->find($id);
        if($image)
            return response()->download($image->path, 'imagem_cjub_Guarapuava_' . $image->id.'.jpeg');
    }

    public function getPage($page)
    {
        $page--;
        $offset = $this::PER_PAGE * $page;
        $images = $this->imageRepository->model->offset($offset)->limit($this::PER_PAGE)->get();

        return $images;
    }
}