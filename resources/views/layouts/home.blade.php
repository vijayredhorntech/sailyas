@extends('master')

@section('main')

    {{--    slider here--}}
     <div class="carousel w-full h-full">
        <div id="slide1" class="carousel-item relative w-full h-full">
            <img src="https://www.sailyas.com/storage/slider/sangla_03.jpg" class="w-full 2xl:h-full xl:h:full lg:h-full md:h-full sm:h-96 h-96 object-cover" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide3" class="btn btn-circle btn-sm">❮</a>
                <a href="#slide2" class="btn btn-circle btn-sm">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full h-full">
            <img src="https://www.sailyas.com/storage/slider/sangla_02.jpg" class="w-full 2xl:h-full xl:h:full lg:h-full md:h-full sm:h-96 h-96 object-cover" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide1" class="btn btn-circle btn-sm">❮</a>
                <a href="#slide3" class="btn btn-circle btn-sm">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full h-full">
            <img src="https://www.sailyas.com/storage/slider/sangla_04.jpg" class="w-full 2xl:h-full xl:h:full lg:h-full md:h-full sm:h-96 h-96 object-cover" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide2" class="btn btn-circle btn-sm">❮</a>
                <a href="#slide1" class="btn btn-circle btn-sm">❯</a>
            </div>
        </div>

    </div>
    {{--    slider ends here--}}
    {{--   header here--}}
     @include('common.header')
    {{--header ends here--}}




    {{--accomodation section here--}}
    <section>
        <h1 class="text-center mt-10 text-black text-4xl font-semibold mb-10">Accomodation</h1>

        <div
            class="flex 2xl:flex-row  xl:flex-row lg:flex-row md:flex-row  sm:flex-col flex-col 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 justify-center  ">

            <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full w-full  flex relative  rounded-xl mr-12">
                <img src="https://www.sailyas.com/storage/accomodations/dome.jpg" class="rounded-xl h-full w-full"
                     alt="">
                <div class="absolute top-0 left-0 p-5 w-full  rounded-xl  bg-gradient-to-b from-black">
                    <h1 class="text-white mb-5 text-2xl font-bold">Stay at dome</h1>
                    <a href="#" class=" bg-white mt-5 p-2 rounded-md text-black">Book Experience</a>
                </div>
            </div>


            <div
                class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0  sm:mt-5 mt-5 flex relative rounded-xl  ">
                <img src="https://www.sailyas.com/storage/accomodations/tent.jpg" class="rounded-xl h-full w-full"
                     alt="">
                <div class="absolute top-0 left-0 p-5 w-full  bg-gradient-to-b from-black rounded-xl ">
                    <h1 class="text-white mb-5 text-2xl font-bold">Stay at dome</h1>
                    <a href="#" class=" bg-white mt-5 p-2 rounded-md text-black">Book Experience</a>
                </div>
            </div>


        </div>

    </section>
    {{--    accomodation section ends here--}}


    {{--    things to do section here--}}
    <section>
        <h1 class="text-center mt-10 text-black text-4xl font-semibold mb-10">Thing To Do </h1>

        <div
            class="flex  2xl:flex-row  xl:flex-row lg:flex-row md:flex-col  sm:flex-col flex-col 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 h-full justify-center  ">

            <div
                class="flex 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-full w-full 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col ">
                <div
                    class=" 2xl:w-1-4 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full w-full flex relative 2xl:h-5/6 xl:h-5/6 lg:h-5/6  md:h-96 h-96  rounded-xl mr-5">
                    <img src="	https://www.sailyas.com/storage/events/thing-3.jpg"
                         class="rounded-xl h-full w-full object-cover" alt="">
                    <div class="absolute top-0 left-0 p-5 w-full  rounded-xl  bg-gradient-to-b from-black">
                        <h1 class="text-white mb-5 text-2xl font-bold">Village Walk</h1>
                        <a href="#" class=" bg-white mt-5 p-2 rounded-md text-black">Experience</a>
                    </div>
                </div>

                <div
                    class=" 2xl:w-1-4 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full w-full flex relative 2xl:h-5/6 xl:h-5/6 lg:h-5/6  md:h-96 h-96 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0  sm:mt-0 mt-5  rounded-xl 2xl:mr-5 xl:mr-5 lg:mr-5 mg:mr-0  ">
                    <img src="	https://www.sailyas.com/storage/events/thing-4.jpg"
                         class="rounded-xl h-full w-full object-cover" alt="">
                    <div class="absolute top-0 left-0 p-5 w-full  bg-gradient-to-b from-black rounded-xl ">
                        <h1 class="text-white mb-5 text-2xl font-bold">Wilderness Camping</h1>
                        <a href="#" class=" bg-white mt-5 p-2 rounded-md text-black">Experience</a>
                    </div>
                </div>
            </div>


            <div
                class="flex 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-full w-full 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col  2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-5 mt-5 ">
                <div
                    class=" 2xl:w-1-4 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full w-full  flex relative 2xl:h-5/6 xl:h-5/6 lg:h-5/6  md:h-96 h-96  rounded-xl mr-5">
                    <img src="	https://www.sailyas.com/storage/events/thing-1.jpg"
                         class="rounded-xl h-full w-full object-cover" alt="">
                    <div class="absolute top-0 left-0 p-5 w-full  rounded-xl  bg-gradient-to-b from-black">
                        <h1 class="text-white mb-5 text-2xl font-bold">Rock Climbing</h1>
                        <a href="#" class=" bg-white mt-5 p-2 rounded-md text-black">Experience</a>
                    </div>
                </div>

                <div
                    class=" 2xl:w-1-4 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0  sm:mt-0 mt-5  flex relative 2xl:h-5/6 xl:h-5/6 lg:h-5/6  md:h-96 h-96 rounded-xl  ">
                    <img src="	https://www.sailyas.com/storage/events/thing-2.jpg"
                         class="rounded-xl h-full w-full object-cover" alt="">
                    <div class="absolute top-0 left-0 p-5 w-full  bg-gradient-to-b from-black rounded-xl ">
                        <h1 class="text-white mb-5 text-2xl font-bold">Trekking</h1>
                        <a href="#" class=" bg-white mt-5 p-2 rounded-md text-black">Experience</a>
                    </div>
                </div>
            </div>

        </div>

    </section>
    {{--    thing to do section ends here--}}

    {{--    reach us section here--}}
    <section>
        <div
            class="flex w-full 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 h-full justify-center  2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-10 mt-10 rounded-xl ">
            <div class=" w-full relative 2xl:h-96 xl:h-96 lg:h-80 md:h-64 h-52 bg-green-900 rounded-xl">
                <img src="https://www.sailyas.com/assets/images/query.jpg"
                     class="w-full object-cove 2xl:h-96 xl:h-96 lg:h-80 md:h-64 h-52 rounded-xl" alt="">
                <div class="absolute top-0 left-0 w-full  text-center  bg-gradient-to-b from-black pt-10 rounded-xl">
                    <h1 class="text-white mb-5 text-3xl font-bold ">IF YOU HAVE ANY QUERY</h1>
                    <a href="#" class=" bg-white mt-5 p-2 rounded-md text-black">Experience</a>
                </div>
            </div>
        </div>

    </section>
    {{--reach us section ends here--}}

    {{--    footer section here--}}
    @include('common.footer')
    {{--footer section ends here--}}

@endsection
