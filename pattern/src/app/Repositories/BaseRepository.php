<?php

namespace Zylo\Pattern\App\Repositories;


use Zylo\Pattern\App\Interfaces\IEloquentRepository;
use Illuminate\Database\Eloquent\Model;


class BaseRepository implements IEloquentRepository
{
   

    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function find($id) 
    {
        return $this->model->find($id);
    }

    public function update($id,array $input)
    {         
        return $this->model->find($id)->update($input);     
    }

    public function ListAll()
    {
       return $this->model->all();    
    }

    public function remove($id)
    {           
        return $this->model->find($id)->delete();        
    }
 
}