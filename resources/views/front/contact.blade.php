@extends('front.layout.master')

@section('title', 'Contact')

@section('content')

    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
         style="background-image: url({{asset('front/images/bg-title-page-02.jpg')}});">
        <h2 class="tit6 t-center">
            Contact
        </h2>
    </section>


    <!-- Contact form -->
    <section class="section-contact bg1-pattern p-t-90 p-b-113">
        <!-- Map -->
        <div class="container">

            <contact_map
                latitude="{{$latitude}}"
                longitude="{{$longitude}}">
            </contact_map>

        </div>

        <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
                Send us a Message
            </h3>

            <contact_form></contact_form>

            <div class="row p-t-135">
                <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/map-icon.png" alt="IMG-ICON">
                        </div>

                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

                            <span class="txt23 size38">
								8th floor, 379 Hudson St, New York, NY 10018
							</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/phone-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

                            <span class="txt23 size38">
								(+1) 96 716 6879
							</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/clock-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Opening Hours
							</span>

                            <span class="txt23 size38">
								09:30 AM – 11:00 PM <br/>Every Day
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection