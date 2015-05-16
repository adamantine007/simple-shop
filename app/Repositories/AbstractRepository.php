<?php namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;


class AbstractRepository {

    protected $model;

    function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function setModel(Model $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function save(Model $model)
    {
        return $model->save();
    }

    public function update(Model $model)
    {
        return $model->update();
    }

    public function delete(Model $model)
    {
        return $model->delete();
    }
}