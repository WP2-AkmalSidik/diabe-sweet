@extends('layout.app')
@section('content')
  <section class="h-[100vh] w-[350px] m-auto overflow-hidden bg-[url('../assets/Home.jpg')] scale-90 bg-cover bg-center flex flex-col justify-center items-center gap-y-52 rounded-3xl">
    <img src="{{ asset('assets/Group 63.png') }}" alt="" class="w-[250px] mt-[10rem]">
    <a href="{{ route('login') }}" class="bg-[#FF76CE] px-7 py-2 rounded-full font-bold text-white">SIGN IN</a>
  </section>
@endsection
