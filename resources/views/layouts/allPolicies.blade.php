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
            <div class=" w-full relative rounded-sm  bg-gray-100  p-5 rounded-xl ">
                <a href="{{route('home')}}" class="text-gray-700 font-semibold">Home</a> > <a href="{{route('policies')}}" class="mb-5">Refund & Cancellation Policy
                </a><br><br>
                <span class="text-3xl text-black font-semibold ">Refund & Cancellation Policy</span><br>
                <ul class="list-disc ml-5 mt-5 mb-3 text-gray-500  " id="policies">
                    <li>The online booking can be done well in advance by paying the tariff mentioned.</li>
                    <li>The cancellation of booking can be entertained on the following grounds</li>
                    <li>The booking can be canceled two months in advance and 75%of the booking amount will be refunded</li>
                    <li> 50 % will be refunded if cancellation is done one month in advance</li>
                    <li>25% will be refunded if cancellation is done 15 days in advance.</li>
                    <li>No refund is possible in other cases
                    </li>
                </ul>

                <span class="text-3xl text-black font-semibold  mt-3">Refund Policy </span><br>
                <ul class="list-disc ml-5 mt-5 mb-10 text-gray-500 " id="policies">
                    <li>The full advance amount will be refunded if the cancellation of the booking takes place before 4 weeks
                        50 % of the advance amount will be refunded if the cancellation of the booking takes place between 3 weeks to 4 weeks
                        No refunds of booking amount will be entertained if the cancellation of booking takes place between below 2 weeks
                        The booking amount will not be refunded due to the non-arrival of the occupant at the date of the scheduled stay</li>
                </ul>


                <a href="{{route('home')}}" class="text-gray-700 font-semibold mt-10">Home</a> > <a href="{{route('policies')}}" class="mb-5">Shipping Delivery Policy

                </a><br><br>
                <span class="text-3xl text-black font-semibold ">Shipping Delivery Policy</span><br>
                <ul class="list-disc ml-5 mt-5 text-gray-500 " id="policies">
                    <li>Shipping Policy</li>
                </ul>

            </div>
        </div>

    </section>


    {{--    footer section here--}}
    @include('common.footer')
    {{--footer section ends here--}}

@endsection
