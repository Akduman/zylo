<?php

namespace Zylo\Pattern\App\Interfaces;

use Illuminate\Database\Eloquent\Model;


interface IEloquentRepository
{
   public function create(array $attributes);
   public function remove(Model $model);
   public function update(Model $model,array $input);
   public function find($id);
   public function ListAll();


}