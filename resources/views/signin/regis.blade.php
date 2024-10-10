@extends('layout.app')

@section('content')
<section class="h-[100vh] w-[350px] m-auto overflow-hidden bg-white scale-90 bg-cover bg-center rounded-3xl flex flex-col p-5">
    <h1 class="text-3xl font-bold text-center text-[#FF76CE] mt-10 uppercase">Register</h1>
    <form class="mt-8 flex flex-col gap-2" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email -->
        <input id="email" type="email" name="email" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <!-- Nama -->
        <input id="name" type="text" name="name" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nama Lengkap" value="{{ old('name') }}" required autocomplete="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <!-- Tanggal Lahir -->
        <input id="tanggal" type="date" name="tanggal" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" value="{{ old('tanggal') }}" required>
        <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />

        <!-- Umur -->
        <input id="umur" type="text" name="umur" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Umur" value="{{ old('umur') }}" required>
        <x-input-error :messages="$errors->get('umur')" class="mt-2" />

        <!-- Alamat -->
        <input id="alamat" type="text" name="alamat" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Alamat" value="{{ old('alamat') }}" required>
        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />

        <!-- No. Telepon -->
        <input id="number" type="number" name="number" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="No. Telepon" value="{{ old('number') }}" required>
        <x-input-error :messages="$errors->get('number')" class="mt-2" />

        <!-- Password -->
        <input id="password" type="password" name="password" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Password" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <!-- Konfirmasi Password -->
        <input id="password_confirmation" type="password" name="password_confirmation" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Ulangi Password" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <!-- Button -->
        <button type="submit" class="bg-[#FF76CE] px-5 py-2 rounded-md font-bold mt-5 w-full text-center text-white">Register</button>
    </form>

    <p class="text-center mt-4 text-[0.8rem] font-medium text-black">Sudah punya akun?
        <a href="{{ route('login') }}" class="font-bold text-[#FF76CE]">Login</a>
    </p>
</section>
@endsection
