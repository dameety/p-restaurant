<?php

namespace App\Repositories;


use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Booking;

class BookingRepository extends ModuleRepository
{
    use HasSlug;

    public function __construct(Booking $model)
    {
        $this->model = $model;
    }
}
