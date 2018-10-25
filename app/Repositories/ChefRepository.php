<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Chef;

class ChefRepository extends ModuleRepository
{
    

    public function __construct(Chef $model)
    {
        $this->model = $model;
    }
}
