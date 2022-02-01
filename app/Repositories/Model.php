<?php

namespace App\Repositories;

class Model extends \Illuminate\Database\Eloquent\Model
{

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

}
