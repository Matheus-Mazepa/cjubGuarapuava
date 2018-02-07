<?php
namespace App\Repository;
use App\Repository\BaseRepository;
/**
 * Created by PhpStorm.
 * User: matheusmazepa
 * Date: 28/10/2017
 * Time: 14:05
 */

class WorkshopRepository extends BaseRepository
{
    public function getModelClass()
    {
        return \App\Model\Workshop::class;
    }

    public function toSelect()
    {
        $workshops = $this->model->all();
        $workshops = $workshops->reject(function ($item) {
            return $item->participants()->count() >= $item->vacancies;
        })->mapWithKeys(function ($item){
            $formattedName =  "{$item->name} - Ministrante {$item->minister} - Vagas disponiveis {$item->available_vacancies}";
            return [$item->id => $formattedName];
        });
        return $workshops->toArray();
    }
}