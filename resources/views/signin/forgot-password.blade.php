@extends('layout.app')
@section('content')
<section class="h-[100vh] w-[350px] m-auto overflow-hidden scale-90 bg-cover bg-center rounded-3xl flex flex-col bg-white p-5">
    <h1 class="text-3xl font-bold text-center text-[#FF76CE] mt-10">Lupa Password</h1>
    <p class="text-center mt-5 text-[0.8rem] text-gray-500">Masukkan akun email Anda <br> untuk mengatur ulang kata password</p>

    <!-- Session Status -->
    @if (session('status'))
      <div class="mb-4 text-sm font-medium text-green-600">
        {{ session('status') }}
      </div>
    @endif

    <!-- Form untuk lupa password -->
    <form class="mt-7 flex flex-col justify-between h-full gap-2" method="POST" action="{{ route('password.email') }}">
      @csrf

      <!-- Email -->
      <input type="email" name="email" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@gmail.com" required autofocus>

      <!-- Error Message -->
      @if ($errors->has('email'))
        <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
      @endif

      <!-- Submit Button -->
      <button type="submit" class="bg-[#FF76CE] px-5 py-2 rounded-md font-bold mt-5 w-full text-center text-white">Submit</button>
    </form>
  </section>
@endsection
