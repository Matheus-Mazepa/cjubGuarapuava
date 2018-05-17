<?php

namespace App\Repository;


use App\Model\Images;

class ImageRepository extends BaseRepository
{

    public function getModelClass()
    {
       return Images::class;
    }

    public function create($data)
    {
        $images = $data['images'];

        foreach ($images as $image) {
            $name = $image->hashName();
            $image->storeAs('public/images', $name);
            $path = 'storage/images/' . $name;
            $this->model->create(['path' => $path]);
        }
    }
}