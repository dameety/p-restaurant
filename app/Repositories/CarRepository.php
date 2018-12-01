<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Car;

class CarRepository extends ModuleRepository
{
    use HandleSlugs;

    public function __construct(Car $model)
    {
        $this->model = $model;
    }
}
