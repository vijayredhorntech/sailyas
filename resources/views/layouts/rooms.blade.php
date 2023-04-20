@extends('master')

@section('main')

    {{--    slider here--}}
    <div class="carousel w-full h-full">
        <div id="slide1" class="carousel-item relative w-full h-96 bg-[url('https://www.sailyas.com/assets/images/inner-banner.jpg')] bg-no-repeat bg-center bg-cover">

        </div>


    </div>
    {{--    slider ends here--}}
    {{--   header here--}}
    @include('common.header')
    {{--header ends here--}}

{{--    rooms section here--}}
    <section>
        <div class="flex w-full 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 h-full justify-center  mt-10 rounded-sm ">
            <div class=" w-full relative rounded-sm  bg-gray-100  p-5 rounded-xl ">
                  <div class="flex  border-b-2  border-b-gray-300  py-5">
                      <div class="flex w-full 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-col  flex-col relative ">
                          <div>
                              <img src="https://www.sailyas.com/storage/room_types/dome.JPG" class="2xl:w-96 xl:w-96 lg:w-96 md:w-96 sm:w-full w-full h-80 rounded-xl object-cover mr-3" alt="">
                          </div>
                          <div>
                              <h1 class="text-blue-500 text-2xl font-bold">Luxurious Dome</h1>
                              <h1 class="text-gray-500">Kinnaur, Himachal Pardesh</h1>
                              <h1 class="text-black">No Ratings Yet 0 / 5</h1>
                              <h1 class="text-gray-500 mt-3">Inclusions</h1>
                              <h1 class="text-black font-semibold"><i class="fa-solid fa-bed text-gray-500"></i> Room Service <br> <i class="fa-solid fa-hotel text-gray-500"></i> Restaurant</h1>
                          </div>

                          <div class="absolute 2xl:right-10 xl:right-10 lg:right-10 md:right-10 sm:-right-3 -right-7  2xl:bottom-10 xl:bottom-10 lg:bottom-10 md:bottom-10 sm:-bottom-3 -bottom-3  flex flex-col border-l-2 border-l-gray-300 px-3">
                              <span class="text-gray-500 text-md font-semibold"> &#8377 <del>Rs. 5000</del></span>
                              <span class="text-2xl text-red-600 font-bold">&#8377 Rs. 4500</span>
                              <span class="text-gray-500 text-xs">Per Room / Per Night</span>
                              <a href="{{route('bookingStage1')}}" class=" p-2 bg-blue-600 text-white rounded-md mt-2">Book Now</a>
                          </div>
                      </div>




                  </div>
            </div>
        </div>
        <div class="flex w-full 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 h-full justify-center  mt-5 rounded-sm ">
            <div class=" w-full relative rounded-sm  bg-gray-100  p-5 rounded-xl ">
                  <div class="flex  border-b-2  border-b-gray-300  py-5">
                      <div class="flex w-full 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-col  flex-col relative ">
                          <div>
                              <img src="https://www.sailyas.com/storage/room_types/swiss_tent_2.JPG" class="2xl:w-96 xl:w-96 lg:w-96 md:w-96 sm:w-full w-full h-80 rounded-xl object-cover mr-3" alt="">
                          </div>
                          <div>
                              <h1 class="text-blue-500 text-2xl font-bold">Swiss Tent</h1>
                              <h1 class="text-gray-500">Kinnaur, Himachal Pardesh</h1>
                              <h1 class="text-black">No Ratings Yet 0 / 5</h1>
                              <h1 class="text-gray-500 mt-3">Inclusions</h1>
                              <h1 class="text-black font-semibold"><i class="fa-solid fa-bed text-gray-500"></i> Room Service <br> <i class="fa-solid fa-hotel text-gray-500"></i> Restaurant</h1>
                          </div>

                          <div class="absolute 2xl:right-10 xl:right-10 lg:right-10 md:right-10 sm:-right-3 -right-7  2xl:bottom-10 xl:bottom-10 lg:bottom-10 md:bottom-10 sm:-bottom-3 -bottom-3  flex flex-col border-l-2 border-l-gray-300 px-3">
                              <span class="text-gray-500 text-md font-semibold"> &#8377 <del>Rs. 3000</del></span>
                              <span class="text-2xl text-red-600 font-bold">&#8377 Rs. 2700</span>
                              <span class="text-gray-500 text-xs">Per Room / Per Night</span>
                              <a href="{{route('bookingStage1')}}" class=" p-2 bg-blue-600 text-white rounded-md mt-2">Book Now</a>
                          </div>
                      </div>




                  </div>
            </div>
        </div>

    </section>
{{--    rooms section ends here--}}


    {{--    footer section here--}}
    @include('common.footer')
    {{--footer section ends here--}}

@endsection
