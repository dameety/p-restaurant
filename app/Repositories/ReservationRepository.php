<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Reservation;

class ReservationRepository extends ModuleRepository
{

    public function __construct(Reservation $model)
    {
        $this->model = $model;
    }
}
