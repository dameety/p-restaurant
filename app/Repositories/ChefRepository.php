<?php

namespace App\Repositories;

use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use App\Models\Chef;

class ChefRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Chef $model)
    {
        $this->model = $model;
    }
}
