@extends('layout.app')

@section('content')
<section
    class="h-[730px] w-[350px] m-auto overflow-hidden bg-white bg-cover bg-center rounded-3xl flex flex-col items-center p-7 gap-y-4 container-snap overflow-y-auto scale-90">

    <!-- Header -->
    <h1 class="text-2xl font-bold text-center text-[#FF76CE] uppercase">Detail Pengguna</h1>

    <!-- Foto Profil di Tengah Atas -->
    <img src="{{ $user->foto ? asset('storage/' . $user->foto) : asset('assets/user.svg') }}" alt="User Profile"
        class="rounded-full h-[120px] w-[120px] object-cover h">

    <!-- Data Pengguna -->
    <div class="flex flex-col gap-y-2 w-full text-black font-semibold">
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            Nama: {{ $user->name }}
        </div>
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            Alamat: {{ $user->alamat }}
        </div>
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            Tinggi Badan: {{ $user->tinggi_badan }} cm
        </div>
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            Berat Badan: {{ $user->berat_badan }} kg
        </div>
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            Umur: {{ \Carbon\Carbon::parse($user->tanggal_lahir)->age }} Tahun
        </div>
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            Jenis Kelamin: {{ $user->jenis_kelamin }}
        </div>
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            No. HP: {{ $user->no_hp }}
        </div>
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            Email: {{ $user->email }}
        </div>

        <!-- Informasi Tambahan Kesehatan -->
        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            <p>Kategori Diabetes:
                @php
                $gula = $catatanKesehatan->gula ?? 0;
                $kategoriDiabetes = '';
                $borderColor = '';

                if ($gula < 140) { $kategoriDiabetes='Non Diabetes' ; $borderColor='text-green-500' ; } elseif ($gula <
                    200) { $kategoriDiabetes='Waspada' ; $borderColor='text-yellow-400' ; } else {
                    $kategoriDiabetes='Diabetes' ; $borderColor='text-red-500' ; } @endphp <span
                    class="{{ $borderColor }}">{{ $kategoriDiabetes }}</span>
            </p>
            <p>Gula Darah: {{ $gula }} mg/dL</p>
        </div>

        <div class="mt-1 px-3 py-3 bg-gray-200 border-2 shadow-sm border-gray-500 block w-full rounded-md sm:text-sm focus:ring-1 text-center">
            <p>Berat Badan Ideal:
                @php
                $tinggiM = ($user->tinggi_badan ?? 1) / 100; // Pastikan tinggi tidak 0
                $jenisKelamin = $user->jenis_kelamin;
                $beratIdeal = $jenisKelamin === 'Pria' ? ($tinggiM * 100) - 100 : ($tinggiM * 100) - 105;
                $statusBerat = '';

                if ($user->berat_badan < $beratIdeal - 5) { $statusBerat='Kurang' ; $weightColor='text-yellow-500' ; }
                    elseif ($user->berat_badan > $beratIdeal + 5) {
                    $statusBerat = 'Berlebih';
                    $weightColor = 'text-red-500';
                    } else {
                    $statusBerat = 'Ideal';
                    $weightColor = 'text-green-500';
                    }
                    @endphp
                    {{ number_format($beratIdeal) }} KG - <span class="{{ $weightColor }}">{{ $statusBerat }}</span>
            </p>
        </div>
    </div>

    <!-- Tombol Kembali -->
    <a href="{{ route('admin') }}"
        class="bg-[#FF76CE] px-5 py-3 rounded-md font-bold mt-2 w-full text-center text-white">Kembali</a>
</section>
@endsection