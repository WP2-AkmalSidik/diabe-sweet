@extends('layout.app')
@section('content')
<section
    class="h-[730px] w-[350px] m-auto overflow-hidden bg-white bg-cover bg-center rounded-3xl flex flex-col items-center p-7 container-snap overflow-y-auto scale-90">
    <div class="flex flex-row items-center justify-start mt-4 absolute left-7">
        <a href="{{route('dashboard')}}">
            <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="scale-75">
                <path d="M11 2L2 11L11 20" stroke="#FF76CE" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </a>
        <h1 class="text-xl font-bold text-[#FF76CE] ml-[5rem]">Dokter Kami</h1>
    </div>

    <h2 class="mt-16 text-center font-semibold text-[0.9rem]">Butuh solusi? Tanyakan kebutuhan <br> dan keluhan Anda
        kepada kami</h2>

    <div class="grid grid-rows-1 mt-4 w-full gap-y-4">

        <div class=" bg-white border-2 border-[#FF76CE] rounded-xl p-1.5 flex flex-row justify-between items-center">
            <img src="{{asset('assets/dokter1.png')}}" alt="" class="h-16">

            <div class="flex flex-col w-[135px]">
                <h1 class="text-[0.7rem] font-bold">Dr. Tya Yunari</h1>
                <h2 class="text-[0.7rem] text-gray-500">Spesialis Endokrin</h2>

                <div class="flex flex-row gap-4 mt-2">
                    <img src="{{asset('assets/tahun.svg')}}" alt="">
                    <img src="{{asset('assets/rating.svg')}}" alt="">
                </div>
            </div>

            <a href="https://wa.me/087767633878" target="_blank"
                class="bg-[#FF76CE] py-1 px-4 rounded-full text-[0.7rem] text-white font-bold">Chat</a>
        </div>

        <div class=" bg-white border-2 border-[#FF76CE] rounded-xl p-1.5 flex flex-row justify-between items-center">
            <img src="{{asset('assets/dokter2.png')}}" alt="" class="h-16">

            <div class="flex flex-col w-[135px]">
                <h1 class="text-[0.7rem] font-bold">Dr. Hendra Wongso</h1>
                <h2 class="text-[0.7rem] text-gray-500">Spesialis Endokrin</h2>

                <div class="flex flex-row gap-4 mt-2">
                    <img src="{{asset('assets/tahun.svg')}}" alt="">
                    <img src="{{asset('assets/rating.svg')}}" alt="">
                </div>
            </div>

            <a href="https://wa.me/087767633878" target="_blank" class="bg-[#FF76CE] py-1 px-4 rounded-full text-[0.7rem] text-white font-bold">Chat</a>
        </div>

        <div class=" bg-white border-2 border-[#FF76CE] rounded-xl p-1.5 flex flex-row justify-between items-center">
            <img src="{{asset('assets/dokter3.png')}}" alt="" class="h-16">

            <div class="flex flex-col w-[135px]">
                <h1 class="text-[0.7rem] font-bold">Dr. Rafli Sultan Sulaiman</h1>
                <h2 class="text-[0.7rem] text-gray-500">Spesialis Endokrin</h2>

                <div class="flex flex-row gap-4 mt-2">
                    <img src="{{asset('assets/tahun.svg')}}" alt="">
                    <img src="{{asset('assets/rating.svg')}}" alt="">
                </div>
            </div>

            <a href="https://wa.me/087767633878" target="_blank" class="bg-[#FF76CE] py-1 px-4 rounded-full text-[0.7rem] text-white font-bold">Chat</a>
        </div>

        <div class=" bg-white border-2 border-[#FF76CE] rounded-xl p-1.5 flex flex-row justify-between items-center">
            <img src="{{asset('assets/dokter4.png')}}" alt="" class="h-16">

            <div class="flex flex-col w-[135px]">
                <h1 class="text-[0.7rem] font-bold">Dr. Nadine Maulan</h1>
                <h2 class="text-[0.7rem] text-gray-500">Spesialis Endokrin</h2>

                <div class="flex flex-row gap-4 mt-2">
                    <img src="{{asset('assets/tahun.svg')}}" alt="">
                    <img src="{{asset('assets/rating.svg')}}" alt="">
                </div>
            </div>

            <a href="https://wa.me/087767633878" target="_blank" class="bg-[#FF76CE] py-1 px-4 rounded-full text-[0.7rem] text-white font-bold">Chat</a>
        </div>
    </div>
</section>
@endsection
