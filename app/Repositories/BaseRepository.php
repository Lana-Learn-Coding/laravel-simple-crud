<?php


namespace App\Repositories;


use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    function findAll()
    {
        return $this->model::select();
    }

    function findOne(int $id)
    {
        return $this->model::findOrFail($id);
    }

    function create(array $attribute)
    {
        return $this->model::create($attribute);
    }

    function update(int $id, array $attribute)
    {
        $attribute['id'] = $id;
        return $this->model::findOrFail($id)->update($attribute);
    }

    function delete(int $id)
    {
        return $this->model::destroy($id);
    }
}
