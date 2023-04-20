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
                <a href="{{route('home')}}" class="text-gray-700 font-semibold">Home</a> > <a href="{{route('aboutus')}}" class="mb-5">About Us
                </a><br><br>
                <span class="text-3xl text-black font-semibold ">About Us</span><br>
                <ul class="list-disc ml-5 mt-5 mb-3 text-gray-500  " id="policies">
                    <li>The Sailya has been derived from the ancestor's name. The Sailya tenting is having 7 Swiss tents and 3 geodesic dome tents having the latest features to make the stay of the tourists more comfortable. It is twin-sharing bases have both modern and traditional foods. It has the facilities of tracking facility which is available on demand. The area where tents are provided is in the Kinner Kailash range in district Kinnaur. The Baspa river is the river that flows between camp and the Rakchham village. The area is surrounded by snowcap mountains. The area is very peaceful and good for health and stress buster.It is between Sangla and Chitkul and a good place to stay and enjoy the trip to these two places. The tent is surrounded by Rakchham Chitkul Wildlife Sanctuary.</li>

                </ul>





            </div>
        </div>

    </section>


    {{--    footer section here--}}
    @include('common.footer')
    {{--footer section ends here--}}

@endsection
