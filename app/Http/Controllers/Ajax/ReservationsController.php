<?php

namespace App\Http\Controllers\Ajax;

use App\Mail\ReservationReceived;
use App\Models\Reservation;
use App\Http\Controllers\AjaxController;
use App\Repositories\ReservationRepository;
use App\Http\Requests\Front\ReservationRequest;
use Illuminate\Support\Facades\Mail;

class ReservationsController extends AjaxController
{
    private $reservationRepo;

    public function __construct(ReservationRepository $reservationRepo)
    {
        $this->reservationRepo = $reservationRepo;
    }

    public function store(ReservationRequest $request)
    {
        $reservation = Reservation::create($request->all());

        Mail::to($reservation->email)->send(new ReservationReceived($reservation));

        return $this->sendResponse($reservation, 'Your reservation has been received successfully.');
    }
}
