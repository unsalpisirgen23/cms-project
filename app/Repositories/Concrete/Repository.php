<?php

namespace App\Repositories\Concrete;

use App\Repositories\Agreement\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Repository implements RepositoryInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function get($id,array $selector = ['*'])
    {
       return $this->model->where('id',"=",$id)->first($selector);
    }

    public function getAll(array $selector = ['*'])
    {
        return $this->model->get($selector);
    }

    public function add(array $entity)
    {
        foreach ($entity as $key=>$value)
        {
            $this->model->$key = $value;
        }
       return $this->model->save();
    }

    public function remove($id)
    {
       $this->model->where('id',"=",$id)->delete();
       return true;
    }

    public function update($id,array $entity = [])
    {
        $this->model->where("id","=",$id)->update($entity);
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function exists(array $condition = [])
    {
        foreach ($condition as  $key=>$value){
            if ($this->model->where($key,"=",$value)->get()->count() > 0)
            {
                return true;
            }
            else{
                return  $value;
            }
        }
    }

    public function lastInsertId()
    {
       return DB::getPdo()->lastInsertId();
    }

}
