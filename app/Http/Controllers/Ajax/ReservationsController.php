<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Reservation;
use App\Mail\ReservationReceived;
use App\Http\Controllers\AjaxController;
use App\Notifications\NewReservation;
use App\Repositories\ReservationRepository;
use App\Http\Requests\Front\ReservationRequest;
use Illuminate\Notifications\Notification;
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
        $reservation = $this->reservationRepo->create($request->all());

        activity()->performedOn($reservation)->log('created');

        $object = json_decode($reservation, true);
        $reservation = new Reservation($object);

        Mail::to($reservation->email)->send(new ReservationReceived($reservation) );

        Notification::route('mail', config('app.email'))
                ->notify(new NewReservation($reservation));

        return $this->sendResponse($reservation, 'Your reservation has been received successfully.');
    }
}
