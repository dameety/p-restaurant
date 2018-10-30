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
        </div>
    </section>

@endsection