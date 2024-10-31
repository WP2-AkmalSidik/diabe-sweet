@extends('layout.app')

@section('content')
<section
    class="h-[730px] w-[350px] m-auto overflow-hidden bg-white bg-cover bg-center rounded-3xl flex flex-col items-center p-7 container-snap overflow-y-auto scale-90">
    
    <h1 class="text-2xl font-bold text-center text-[#FF76CE] uppercase">Detail Pengguna</h1>

    <div class="mt-4 flex flex-col gap-2 w-full">
        @csrf

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1">Kiwkiw</div>

        <!-- Button Kembali -->
        <a href="#"
            class="bg-[#FF76CE] px-5 py-3 rounded-md font-bold mt-2 w-full text-center text-white">Kembali
        </a>
    </div>

</section>
@endsection