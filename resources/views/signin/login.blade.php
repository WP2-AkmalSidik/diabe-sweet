@extends('layout.app')

@section('content')
<section
    class="h-[100vh] w-[350px] m-auto overflow-hidden bg-[url('../assets/bg-dokter.png')] scale-90 bg-cover bg-center rounded-3xl flex flex-col bg-white">

    <div class="h-[450px] w-full bg-[#FF76CE]/60 flex flex-row items-center justify-center rounded-b-[3rem]">
        <h1 class="font-bold absolute top-24 text-2xl text-white text-center">SELAMAT DATANG <br> <span
                class="text-center">Di Aplikasi Diabe-Sweet</span></h1>
        <div
            class="rounded-full bg-[#FF76CE] h-[100px] w-[100px] absolute mt-[60px] flex flex-row justify-center items-center">
            <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="scale-75">
                <path
                    d="M34.5 0.833313C39.0528 0.833313 43.4193 2.60682 46.6386 5.76368C49.858 8.92054 51.6666 13.2022 51.6666 17.6666C51.6666 22.1311 49.858 26.4127 46.6386 29.5696C43.4193 32.7265 39.0528 34.5 34.5 34.5C29.9471 34.5 25.5807 32.7265 22.3613 29.5696C19.1419 26.4127 17.3333 22.1311 17.3333 17.6666C17.3333 13.2022 19.1419 8.92054 22.3613 5.76368C25.5807 2.60682 29.9471 0.833313 34.5 0.833313ZM34.5 9.24998C32.2235 9.24998 30.0403 10.1367 28.4306 11.7152C26.8209 13.2936 25.9166 15.4344 25.9166 17.6666C25.9166 19.8989 26.8209 22.0397 28.4306 23.6181C30.0403 25.1966 32.2235 26.0833 34.5 26.0833C36.7764 26.0833 38.9596 25.1966 40.5693 23.6181C42.179 22.0397 43.0833 19.8989 43.0833 17.6666C43.0833 15.4344 42.179 13.2936 40.5693 11.7152C38.9596 10.1367 36.7764 9.24998 34.5 9.24998ZM34.5 38.7083C45.9587 38.7083 68.8333 44.3054 68.8333 55.5416V68.1666H0.166626V55.5416C0.166626 44.3054 23.0412 38.7083 34.5 38.7083ZM34.5 46.7041C21.7537 46.7041 8.32079 52.8483 8.32079 55.5416V60.1708H60.6791V55.5416C60.6791 52.8483 47.2462 46.7041 34.5 46.7041Z"
                    fill="white" />
            </svg>
        </div>
    </div>

    <div class="px-5 flex">
        <form
            class="h-[390px] w-full bg-white mt-[-12rem] rounded-3xl shadow-lg flex flex-col justify-center items-center px-5"
            method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col w-full gap-4">
                <h1 class="font-semibold text-center mb-3 mt-10">Silahkan login ke akun anda</h1>
                <div class="block">
                    <span
                        class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Email
                    </span>
                    <input type="email" name="email"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="you@gmail.com" required autofocus autocomplete="username" />
                </div>

                <div class="block">
                    <span
                        class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Password
                    </span>
                    <input type="password" name="password"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Password" required autocomplete="current-password" />
                </div>

            </div>
            <button type="submit"
                class="bg-[#FF76CE] px-5 py-2 rounded-full font-bold mt-12 w-full text-center text-white">SIGN
                IN</button>
            <a href="{{ route('password.request') }}" class="text-blue-400 font-medium text-[0.8rem] mt-3">Lupa
                Password?</a>
        </form>
    </div>
    <p class="text-center mt-8 text-[0.8rem] font-medium text-gray-500">Belum punya akun? <a
            href="{{ route('register') }}" class="font-bold text-[#FF76CE]">Register</a></p>
</section>
@endsection