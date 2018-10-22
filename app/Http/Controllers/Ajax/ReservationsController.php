<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\AjaxController;
use App\Repositories\ReservationRepository;

class ReservationsController extends AjaxController
{
    private $reservationRepo;

    public function __construct(ReservationRepository $reservationRepo)
    {
        $this->reservationRepo = $reservationRepo;
    }

    public function store(Request $request)
    {
        $reservation = Reservation::create($request->all());

        return $this->sendResponse($reservation, 'Your reservation has been received successfully.');
    }
}
