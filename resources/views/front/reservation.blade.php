@extends('front.layout.master')

@section('title', 'Reservation')

@section('content')

    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
         style="background-image: url({{asset('front/images/bg-title-page-02.jpg')}});">
        <h2 class="tit6 t-center">
            Reservation
        </h2>
    </section>


    <!-- Reservation -->
    <section class="section-reservation bg1-pattern p-t-100 p-b-113">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-b-30">
                    <div class="t-center">
						<span class="tit2 t-center">
							Reservation
						</span>

                        <h3 class="tit3 t-center m-b-35 m-t-2">
                            Book table
                        </h3>
                    </div>

                    <reservation_booking_form
                        page="reservation">
                    </reservation_booking_form>
                </div>
            </div>

            <div class="info-reservation flex-w p-t-80">
                <div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
                    <h4 class="txt5 m-b-18">
                        Reserve by Phone
                    </h4>

                    <p class="size25">
                        Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus.
                        <span class="txt25">Nulla vulputate</span>
                        , lectus vel volutpat efficitur, orci
                        <span class="txt25">lacus sodales</span>
                        sem, sit amet quam:
                        <span class="txt24">(001) 345 6889</span>
                    </p>
                </div>

                <div class="size24 w-full-md p-t-40">
                    <h4 class="txt5 m-b-18">
                        For Event Booking
                    </h4>

                    <p class="size26">
                        Donec feugiat ligula rhoncus:
                        <span class="txt24">(001) 345 6889</span>
                        , varius nisl sed, tinci-dunt lectus sodales sem.
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection