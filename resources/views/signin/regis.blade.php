@extends('layout.app')

@section('content')

<section
    class="container-snap h-[100vh] w-[350px] m-auto overflow-hidden overflow-y-auto bg-white scale-90 bg-cover bg-center rounded-3xl flex flex-col p-5">
    <h1 class="text-3xl font-bold text-center text-[#FF76CE] mt-10 uppercase">Register</h1>
    <form class="mt-8 flex flex-col gap-2" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama -->
        <input id="name" type="text" name="name"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            placeholder="Nama Lengkap" value="{{ old('name') }}" required autocomplete="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <!-- Alamat -->
        <input id="alamat" type="text" name="alamat"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            placeholder="Alamat" value="{{ old('alamat') }}" required>
        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />

        <!-- Tanggal Lahir -->
        <input id="tanggal_lahir" type="date" name="tanggal_lahir"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            value="{{ old('tanggal_lahir') }}" required>
        <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />

        <!-- Tinggi Badan -->
        <input id="tinggi_badan" type="number" name="tinggi_badan"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            placeholder="Tinggi Badan (cm)" value="{{ old('tinggi_badan') }}" required>
        <x-input-error :messages="$errors->get('tinggi_badan')" class="mt-2" />

        <!-- Berat Badan -->
        <input id="berat_badan" type="number" name="berat_badan"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            placeholder="Berat Badan (kg)" value="{{ old('berat_badan') }}" required>
        <x-input-error :messages="$errors->get('berat_badan')" class="mt-2" />

        <!-- Jenis Kelamin -->
        <select id="jenis_kelamin" name="jenis_kelamin"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />

        <!-- No. Telepon -->
        <input id="no_hp" type="text" name="no_hp"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            placeholder="No. Telepon" value="{{ old('no_hp') }}" required>
        <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />

        <!-- Email -->
        <input id="email" type="email" name="email"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            placeholder="you@gmail.com" value="{{ old('email') }}" required autocomplete="email">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <!-- Password -->
        <input id="password" type="password" name="password"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            placeholder="Password" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <!-- Konfirmasi Password -->
        <input id="password_confirmation" type="password" name="password_confirmation"
            class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
            placeholder="Ulangi Password" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <!-- Button -->
        <button type="submit"
            class="bg-[#FF76CE] px-5 py-2 rounded-md font-bold mt-2 w-full text-center text-white">Register</button>
    </form>

    <p class="text-center mt-4 text-[0.8rem] font-medium text-black">Sudah punya akun?
        <a href="{{ route('login') }}" class="font-bold text-[#FF76CE]">Login</a>
    </p>
</section>
@endsection