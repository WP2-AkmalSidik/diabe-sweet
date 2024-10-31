@extends('layout.app')

@section('content')
<section
    class="h-auto w-full max-w-md mx-auto overflow-hidden bg-white bg-center rounded-3xl flex flex-col items-center p-7 container-snap overflow-y-auto scale-90">

    <!-- Header -->
    <h1 class="text-2xl font-bold text-center text-[#FF76CE] uppercase mb-4">Detail Pengguna</h1>

    <!-- Foto Profil di Tengah Atas -->
    <div class="bg-white h-[120px] w-[120px] rounded-full overflow-hidden border-4 border-[#FF76CE] shadow-md mb-6">
        <img src="{{ $user->foto ? asset('storage/' . $user->foto) : asset('assets/user.svg') }}" alt="User Profile"
            class="rounded-full h-full w-full object-cover">
    </div>

    <!-- Data Pengguna -->
    <div class="flex flex-col gap-4 w-full text-black font-semibold">
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
            <p>Nama: {{ $user->name }}</p>
        </div>
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
            <p>Alamat: {{ $user->alamat }}</p>
        </div>
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
            <p>Tinggi Badan: {{ $user->tinggi_badan }} cm</p>
        </div>
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
            <p>Berat Badan: {{ $user->berat_badan }} kg</p>
        </div>
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
            <p>Umur: {{ \Carbon\Carbon::parse($user->tanggal_lahir)->age }} Tahun</p>
        </div>
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
            <p>Jenis Kelamin: {{ $user->jenis_kelamin }}</p>
        </div>
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
            <p>No. HP: {{ $user->no_hp }}</p>
        </div>
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
            <p>Email: {{ $user->email }}</p>
        </div>

        <!-- Informasi Tambahan Kesehatan -->
        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
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

        <div class="px-4 py-2 bg-gray-100 rounded-lg shadow-md text-center">
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
        class="bg-[#FF76CE] px-5 py-3 rounded-md font-bold mt-6 w-full text-center text-white">Kembali</a>
</section>
@endsection