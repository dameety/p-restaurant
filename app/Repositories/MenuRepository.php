<?php

namespace App\Repositories;


use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Menu;

class MenuRepository extends ModuleRepository
{
    use HandleSlugs;

    public function __construct(Menu $model)
    {
        $this->model = $model;
    }
}
