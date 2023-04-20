@extends('master')

@section('main')

    {{--    slider here--}}
    <div class="carousel w-full h-full">
        <div id="slide1"
             class="carousel-item relative w-full h-96 bg-[url('https://www.sailyas.com/assets/images/inner-banner.jpg')] bg-no-repeat bg-center bg-cover">

        </div>


    </div>
    {{--    slider ends here--}}
    {{--   header here--}}
    @include('common.header')
    {{--header ends here--}}

    <section>
        <div class=" w-full 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 h-full   mt-5 rounded-sm ">
            <div class=" w-full  rounded-sm  bg-gray-100  py-2  rounded-xl h-full  ">
                @include('common.paymentStage2')
            </div>
        </div>

    </section>

    <section>
        <div class=" w-full 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 h-full   mt-10 rounded-sm ">
            <div class=" w-full relative rounded-sm  bg-gray-100  p-5 rounded-xl ">
                <span class="text-blue-500 space-x-3 font-semibold flex flex-wrap">
                    <i class="fa-solid fa-person-swimming"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-utensils"></i>
                    <span class="text-gray-500">Amenities and services</span>
                </span>
            </div>
        </div>

    </section>

    <section>
        <div class=" w-full 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 h-full   mt-5 rounded-sm ">
            <div class=" w-full relative rounded-sm  bg-gray-100  p-5 rounded-xl ">

                <div class="flex flex-wrap border-b-2 border-b-gray-300">
                    <a class=" font-semibold text-md text-blue-600 mt-5 border-b-4 border-b-red-500 mr-10"
                       href="#rooms">Room & Rates </a>
                    <a class=" font-semibold text-md text-blue-600 mt-5  mr-10" href="#location">Location </a>
                    <a class=" font-semibold text-md text-blue-600 mt-5  mr-10" href="">Guest Reviews</a>
                    <a class=" font-semibold text-md text-blue-600 mt-5 " href="#policies">Hotel Policies</a>
                </div>

                @include('common.hotelList')
                @include('common.hotelPolicies')


            </div>
        </div>

    </section>


    {{--    footer section here--}}
    @include('common.footer')
    {{--footer section ends here--}}

@endsection
