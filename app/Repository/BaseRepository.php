<?php
/**
 * Created by PhpStorm.
 * User: matheusmazepa
 * Date: 28/10/2017
 * Time: 13:49
 */
namespace App\Repository;


abstract class BaseRepository
{
    protected $model;
    protected $modelClass;

    public function __construct()
    {
        $this->model = $this->makeModel();
    }

    abstract public function getModelClass();

    public function makeModel($options = [])
    {
        $modelClass = $this->getModelClass();
        return new $modelClass($options);
    }

    public function all($columns = ['*'])
    {
        return $this->model->all();
    }

    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id);
    }

    public function findBy($field, $value, $columns = ['*'])
    {
        return $this->model->where($field, '=', $value)->addSelect($columns);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function delete($id)
    {
        $object = $this->model->find($id);
        $object->delete();

        return $object;
    }

    public function update($id, $data)
    {
        $this->model->find($id)->update($data);
    }

    public function paginate($perPage = 15, $columns = ['*'])
    {
        return $this->model->paginate($perPage, $columns);
    }
}