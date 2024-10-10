@extends('layout.app')
@section('content')
<section class="h-[100vh] w-[350px] m-auto overflow-hidden bg-white scale-90 bg-cover bg-center rounded-3xl flex flex-col items-center">
    <img src="{{ 'assets/doctor-view.png' }}" alt="" class="w-[80%] mt-36">
    <div class="rounded-3xl h-[45%] w-full bg-[#FF76CE] p-6 absolute bottom-0 flex flex-col justify-between">
      <div class="flex flex-col gap-3">
        <h1 class="text-2xl font-bold text-white">Halo Sobat Diabe-Sweet! <br>
          Selamat Datang...
        </h1>
        <h2 class="text-lg text-white">Kami siap melayani dengan sepenuh hati, menjaga kesehatan berasal dari diri masing-masing </h2>
      </div>

      <a href="{{ route('diabe') }}" class="bg-white px-5 py-2 rounded-full font-bold w-full text-center text-[#FF76CE]">Continue</a>
    </div>
  </section>
@endsection
