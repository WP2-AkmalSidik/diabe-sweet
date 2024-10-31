@extends('layout.app')

@section('content')
<section
    class="h-[730px] w-[350px] m-auto overflow-hidden bg-[#FF76CE] bg-cover bg-center rounded-3xl flex flex-col items-center p-7 container-snap overflow-y-auto scale-90">
    <div class="w-full flex flex-row justify-between items-center">
        <h1 class="text-xl text-start font-bold text-white mb-5">Selamat Datang, <br>Petugas</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 2C5.20435 2 4.44129 2.31607 3.87868 2.87868C3.31607 3.44129 3 4.20435 3 5V19C3 19.7956 3.31607 20.5587 3.87868 21.1213C4.44129 21.6839 5.20435 22 6 22H12C12.7956 22 13.5587 21.6839 14.1213 21.1213C14.6839 20.5587 15 19.7956 15 19V5C15 4.20435 14.6839 3.44129 14.1213 2.87868C13.5587 2.31607 12.7956 2 12 2H6ZM16.293 7.293C16.4805 7.10553 16.7348 7.00021 17 7.00021C17.2652 7.00021 17.5195 7.10553 17.707 7.293L21.707 11.293C21.8945 11.4805 21.9998 11.7348 21.9998 12C21.9998 12.2652 21.8945 12.5195 21.707 12.707L17.707 16.707C17.5184 16.8892 17.2658 16.99 17.0036 16.9877C16.7414 16.9854 16.4906 16.8802 16.3052 16.6948C16.1198 16.5094 16.0146 16.2586 16.0123 15.9964C16.01 15.7342 16.1108 15.4816 16.293 15.293L18.586 13H10C9.73478 13 9.48043 12.8946 9.29289 12.7071C9.10536 12.5196 9 12.2652 9 12C9 11.7348 9.10536 11.4804 9.29289 11.2929C9.48043 11.1054 9.73478 11 10 11H18.586L16.293 8.707C16.1055 8.51947 16.0002 8.26516 16.0002 8C16.0002 7.73484 16.1055 7.48053 16.293 7.293Z"
                        fill="black" />
                </svg>
            </button>
        </form>
    </div>

    <h1 class="text-base font-bold text-white text-center">Data Pengguna</h1>

    <div class="w-full mt-4 flex flex-row justify-between">
        <div class="w-[70%] bg-white rounded-xl">
            <input type="text" name="search" id="search" placeholder="Cari Pengguna"
                class="w-full rounded-xl border-none placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black"
                required>
        </div>
        <button type="button"
            class="w-[25%] bg-black text-white flex items-center justify-center rounded-xl">Search</button>
    </div>

    <div class="grid grid-cols-2 mt-4 w-full gap-4">
        @foreach ($users as $user)
        <div class="bg-white w-full flex flex-col justify-between items-center rounded-xl p-3 gap-y-2">
            <h1 class="text-sm font-semibold text-black">{{ $user->nama_singkat }}</h1>

            <div class="h-[60px] w-[60px]">
                <img src="{{ $user->foto ? asset('storage/' . $user->foto) : asset('assets/user.svg') }}"
                    alt="User Image" class="rounded-full h-full w-full object-cover">
            </div>
            <h1 class="text-sm text-center font-semibold text-black p-2">{{ $user->umur }} Tahun
                <br />{{ strtoupper($user->alamat_singkat) }}
            </h1>
            <a href="#" class="bg-[#FF76CE] py-1 px-3 rounded-full text-[0.7rem] text-white font-semibold">Detail</a>
        </div>
        @endforeach
    </div>
</section>
@endsection