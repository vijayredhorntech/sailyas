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
        <div class=" w-full 2xl:pl-40 2xl:pr-40 xl:pl-10 xl:pr-10 pl-10 pr-10 h-full   mt-10 rounded-sm ">
            <div class=" w-full relative rounded-sm  bg-gray-100  p-5 rounded-xl ">
                <a href="{{route('home')}}" class="text-gray-700 font-semibold">Home</a> > <a href="{{route('contact')}}" class="mb-5">Contact Us</a><br><br>
                <span class="text-3xl text-black font-semibold">Contact Us</span><br>
                <span class="text-gray-800">Contact us for any queries and help regarding our hotel and system.</span>

                <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-col flex-col justify-between mt-10">

                    <div class="text-center flex flex-col">
                        <i class="fa-solid fa-location-dot text-7xl"></i>
                        <span class="mt-3 text-gray-950 font-bold text-3xl ">Address</span>
                        <span class="mt-2 text-gray-500 font-semibold">SAILYA TENTING TREKKING Village and Po Rakchham <br> Tehsil Sangla District Kinnaur (HP) 172106</span>
                    </div>

                    <div class="text-center flex flex-col 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-10 mt-10">
                        <i class="fa-solid fa-phone-volume text-7xl"></i>
                        <span class="mt-3 text-gray-950 font-bold text-3xl ">Contact Info</span>
                        <span class="mt-2 text-gray-500 font-semibold">Phone: 6280907975</span>
                        <span class="mt-2 text-gray-500 font-semibold">Email: info@sailyas.com</span>
                    </div>

                    <div class="text-center flex flex-col 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-10 mt-10">
                        <i class="fa-solid fa-globe text-7xl"></i>
                        <span class="mt-3 text-gray-950 font-bold text-3xl">Website</span>
                        <span class="mt-2 text-gray-500 font-semibold">Website: www.sailyas.com</span>
                    </div>


                </div>

                <iframe class="mt-16 rounded-xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27250.35516372404!2d78.34667039069204!3d31.37844509302817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39063ea477ba2569%3A0xcc12f49fd5284cfb!2sRakchham%2C%20Himachal%20Pradesh!5e0!3m2!1sen!2sin!4v1681995197164!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </section>
    {{--    rooms section ends here--}}


    {{--    footer section here--}}
    @include('common.footer')
    {{--footer section ends here--}}

@endsection
