@extends('layout.app')
@section('content')
<section class="h-[100vh] w-[350px] m-auto overflow-hidden scale-90 bg-cover bg-center rounded-3xl flex flex-col bg-white p-5">
    <h1 class="text-3xl font-bold text-center text-[#FF76CE] mt-10">Reset Password</h1>
    <p class="text-center mt-5 text-[0.8rem] text-gray-500">Masukkan password baru anda</p>

    <!-- Form untuk reset password -->
    <form class="mt-7 flex flex-col justify-between h-full gap-2" method="POST" action="{{ route('password.store') }}">
      @csrf

      <!-- Password Reset Token -->
      <input type="hidden" name="token" value="{{ $request->route('token') }}">

      <!-- Email -->
      <input type="email" name="email" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Email" value="{{ old('email', $request->email) }}" required autofocus>

      <!-- Error Message Email -->
      @if ($errors->has('email'))
        <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
      @endif

      <!-- Password -->
      <input type="password" name="password" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Kata Sandi Baru" required>

      <!-- Error Message Password -->
      @if ($errors->has('password'))
        <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
      @endif

      <!-- Confirm Password -->
      <input type="password" name="password_confirmation" class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Ulangi Kata Sandi Baru" required>

      <!-- Error Message Confirm Password -->
      @if ($errors->has('password_confirmation'))
        <span class="text-red-500 text-sm">{{ $errors->first('password_confirmation') }}</span>
      @endif

      <!-- Submit Button -->
      <button type="submit" class="bg-[#FF76CE] px-5 py-2 rounded-md font-bold mt-5 w-full text-center text-white">Submit</button>
    </form>
  </section>
@endsection
