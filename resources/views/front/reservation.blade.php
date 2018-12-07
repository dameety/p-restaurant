@extends('front.layout.master')

@section('title', 'Reservation')

@section('content')
    
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
                        page="reservation.blade.php">
                    </reservation_booking_form>
                </div>
            </div>

            <div class="info-reservation flex-w p-t-80">

            </div>
        </div>
    </section>

@endsection