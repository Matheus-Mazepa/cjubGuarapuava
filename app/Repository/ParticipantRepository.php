<?php
namespace App\Repository;
use App\Repository\BaseRepository;
use App\Model\Participant;
/**
 * Created by PhpStorm.
 * User: matheusmazepa
 * Date: 28/10/2017
 * Time: 14:07
 */


class ParticipantRepository extends BaseRepository
{
    public function getModelClass()
    {
        return Participant::class;
    }

    public function all($columns = ['*'])
    {
        return $this->model->orderBy('paid_out', 'asc')->get();
    }

}