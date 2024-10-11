@extends('layout.app')
@section('content')
<section
    class="h-[100vh] w-[350px] m-auto overflow-hidden bg-[#FF76CE] scale-90 bg-cover bg-center rounded-3xl flex flex-col items-center p-7">
    <a href="{{route('dashboard')}}" class="absolute left-7 top-8">
        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="scale-75">
            <path d="M11 2L2 11L11 20" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>

    <h1 class="text-xl font-bold text-white text-center">
        Catatan Kesehatan
    </h1>

    <h2 class="mt-2 text-center font-semibold text-[0.8rem] text-white">
        Konsumsi Obat Tepat Jadwal <br />Untuk Jaga Gula Darah Anda
    </h2>
    <div class="flex flex-row justify-center items-center gap-2">
        @if ($catatanKesehatan)
        <!-- Cek jika catatan kesehatan sudah ada -->
        <!-- EDIT -->
        <a href="#" class="p-2 mt-2 bg-white rounded-lg" onclick="openModal()">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.1665 2.52846H3.99984C3.11578 2.52846 2.26799 2.87964 1.64286 3.50477C1.01775 4.12989 0.666504 4.97773 0.666504 5.86179V14.1951C0.666504 15.0792 1.01775 15.927 1.64286 16.5521C2.26799 17.1773 3.11578 17.5285 3.99984 17.5285H13.1665C15.0082 17.5285 15.6665 16.0285 15.6665 14.1951V10.0285M16.7332 4.5285L8.78325 12.4785C7.99158 13.2701 5.64156 13.6368 5.11656 13.1118C4.59156 12.5868 4.94989 10.2368 5.74156 9.44512L13.6999 1.48681C13.8962 1.27269 14.1337 1.10057 14.3984 0.980825C14.663 0.861075 14.9492 0.796158 15.2396 0.790042C15.5299 0.783933 15.8186 0.836717 16.088 0.945225C16.3574 1.05373 16.6021 1.21573 16.8072 1.4214C17.0122 1.62707 17.1736 1.87215 17.2813 2.14187C17.3891 2.41159 17.4412 2.70034 17.4342 2.99072C17.4273 3.28109 17.3616 3.56708 17.2412 3.83137C17.1207 4.09567 16.9479 4.33282 16.7332 4.5285Z"
                    stroke="#FF76CE" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        @else
        <!-- ADD -->
        <a href="#" class="p-2 mt-2 bg-white rounded-lg" onclick="openModal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.3335 8.19512H14.6668M8.00016 1.52846V14.8618" stroke="#FF76CE" stroke-width="1.66667"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        @endif

        <!-- DELETE -->
        <a href="#" class="p-2 mt-2 bg-white rounded-lg">
            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="scale-110">
                <path d="M13.2951 3.55666H0.705566" stroke="#FF76CE" stroke-width="1.11083" stroke-linecap="round" />
                <path
                    d="M12.0609 5.40806L11.7202 10.5172C11.5892 12.4833 11.5236 13.4664 10.883 14.0657C10.2425 14.665 9.25722 14.665 7.28675 14.665H6.71408C4.74357 14.665 3.75834 14.665 3.11775 14.0657C2.47717 13.4664 2.41163 12.4833 2.28055 10.5172L1.93994 5.40806"
                    stroke="#FF76CE" stroke-width="1.11083" stroke-linecap="round" />
                <path d="M5.14893 7.25945L5.5192 10.9622" stroke="#FF76CE" stroke-width="1.11083"
                    stroke-linecap="round" />
                <path d="M8.85172 7.25945L8.48145 10.9622" stroke="#FF76CE" stroke-width="1.11083"
                    stroke-linecap="round" />
                <path
                    d="M2.92725 3.55667C2.96863 3.55667 2.98932 3.55667 3.00808 3.55619C3.61788 3.54074 4.15584 3.153 4.36335 2.57937C4.36973 2.56172 4.37627 2.5421 4.38935 2.50283L4.46126 2.28714C4.52263 2.10301 4.55332 2.01095 4.59402 1.93278C4.75643 1.62091 5.05689 1.40434 5.40412 1.3489C5.49115 1.335 5.58821 1.335 5.78231 1.335H8.21829C8.41239 1.335 8.50948 1.335 8.5965 1.3489C8.94374 1.40434 9.24419 1.62091 9.40659 1.93278C9.44732 2.01095 9.47798 2.10301 9.53937 2.28714L9.61128 2.50283C9.62431 2.54205 9.6309 2.56174 9.63727 2.57937C9.84478 3.153 10.3827 3.54074 10.9926 3.55619C11.0113 3.55667 11.032 3.55667 11.0734 3.55667"
                    stroke="#FF76CE" stroke-width="1.11083" />
            </svg>
        </a>
    </div>
    <div class="flex flex-col mt-2 w-full gap-y-4">
        @if ($catatanKesehatan)
        <div class="bg-white rounded-xl py-4 flex flex-col justify-center items-center gap-2">
            <h1 class="text-base font-bold text-black">Kadar Gula Darah</h1>
            <div
                class="h-[120px] w-[120px] rounded-full border-[10px] border-red-500 text-black flex flex-col justify-center items-center">
                <h1 class="text-xl font-bold text-black">{{ $catatanKesehatan->gula ?? 'N/A' }}</h1>
                <h1 class="text-lg font-bold text-black">mg/dL</h1>
            </div>
            <div class="flex flex-row gap-5">
                <h1 class="text-xs text-center font-bold text-black">Sistolik :
                    {{ $catatanKesehatan->sistolik ?? 'N/A' }} mmHg</h1>
                <h1 class="text-xs text-center font-bold text-black">Diastolik :
                    {{ $catatanKesehatan->diastolik ?? 'N/A' }} mmHg</h1>
            </div>
        </div>

        <div class="flex flex-row gap-4">
            <div class="bg-white w-full flex flex-col justify-between items-center rounded-xl">
                <h1 class="text-base font-semibold text-black p-2">Diabetes</h1>

                @php
                $gula = $catatanKesehatan->gula ?? 0;
                if ($gula < 140) { $kategoriDiabetes='Non Diabetes' ; $borderColor='green-500' ; } elseif ($gula < 200)
                    { $kategoriDiabetes='Waspada' ; $borderColor='yellow-400' ; } else {
                    $kategoriDiabetes='Diabetes Parah' ; $borderColor='red-500' ; } @endphp <div
                    class="h-[60px] w-[60px] rounded-full border-[8px] border-{{ $borderColor }} text-black flex flex-col justify-center items-center">
                    <h1 class="font-bold text-[1.5rem] text-{{ $borderColor }}">!</h1>
            </div>
            <h1 class="text-sm text-center font-bold text-{{ $borderColor }} p-2">{{ $kategoriDiabetes }}</h1>
        </div>

        <div class="bg-white w-full flex flex-col justify-between items-center rounded-xl">
            <h1 class="text-base font-semibold text-black p-2">Konsumsi Air</h1>
            <img src="{{ asset('assets/animasi-air.png') }}" alt="" class="h-[60px]" />
            @php
            $berat = $catatanKesehatan->berat ?? 0;
            $konsumsiAir = ($berat * 30) / 1000; // dalam liter
            $gelas = ceil($konsumsiAir / 0.25); // 1 gelas = 0.25 liter
            @endphp
            <h1 class="text-sm text-center font-bold text-black p-2">{{ $gelas }} Gelas<br />Per Hari</h1>
        </div>
    </div>

    <div class="flex flex-row gap-4">
        <div class="bg-white w-full flex flex-col justify-between items-center rounded-xl gap-2">
            <h1 class="text-base font-semibold text-black p-2">Berat Badan</h1>
            <img src="{{ asset('assets/berat-badan.png') }}" alt="" class="h-[60px]" />
            @php
            $tinggiM = ($catatanKesehatan->tinggi ?? 1) / 100; // Pastikan tinggi tidak 0
            $berat = $catatanKesehatan->berat ?? 0;

            // Hitung IMT
            $imT = $berat / ($tinggiM * $tinggiM);

            // Ambil data umur dan jenis kelamin
            $umur = \Carbon\Carbon::parse($user->tanggal_lahir)->age;
            $jenisKelamin = $user->jenis_kelamin; // Misalnya 'L' untuk laki-laki, 'P' untuk perempuan

            // Hitung berat badan ideal berdasarkan jenis kelamin
            if ($jenisKelamin === 'L') {
            // Rumus untuk laki-laki
            $beratIdeal = ($tinggiM * 100) - 100; // Berat ideal = tinggi badan (cm) - 100
            } else {
            // Rumus untuk perempuan
            $beratIdeal = ($tinggiM * 100) - 105; // Berat ideal = tinggi badan (cm) - 105
            }

            // Tentukan status berat badan
            $statusBeratBadan = '';
            if ($imT < 18.5) { $statusBeratBadan='Kekurangan' ; } elseif ($imT>= 18.5 && $imT < 24.9) {
                    $statusBeratBadan='Ideal' ; } elseif ($imT>= 25 && $imT < 29.9) { $statusBeratBadan='Kelebihan' ; }
                        else { $statusBeratBadan='Obesitas' ; } @endphp <small
                        class="text-xs text-center font-bold text-black p-2">
                        Berat: {{ $berat }} KG<br>
                        <!-- IMT: {{ number_format($imT, 2) }}<br> -->
                        Berat Ideal: {{ number_format($beratIdeal, 2) }} KG<br>
                        <!-- Status: {{ $statusBeratBadan }}<br> -->
                        </small>
        </div>


        <div class="bg-white w-full flex flex-col justify-between items-center rounded-xl gap-2">
            <h1 class="text-base font-semibold text-black p-2">Tinggi Badan</h1>
            <img src="{{ asset('assets/tinggi-badan.png') }}" alt="" class="h-[60px]" />
            <h1 class="text-sm text-center font-bold text-black p-2">{{ $catatanKesehatan->tinggi ?? 'N/A' }} CM</h1>
        </div>
    </div>
    @else
    <div class="bg-white rounded-xl py-4 flex flex-col justify-center items-center gap-2">
        <h1 class="text-base font-bold text-black">Data catatan kesehatan kosong.</h1>
    </div>
    @endif
    </div>

    <div id="myModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 w-[90%] max-w-lg">
            <h1 class="text-3xl font-bold text-center text-[#FF76CE] uppercase">
                INPUT DATA
            </h1>

            <!-- Form di dalam modal -->
            <form class="mt-4 flex flex-col gap-2" action="{{ route('kesehatan.simpan') }}" method="POST">
                @csrf
                <input type="text" name="umur"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Umur" value="{{ \Carbon\Carbon::parse($user->tanggal_lahir)->age }}" />

                <select name="kategori"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1">
                    <!-- <option>Select Kategori</option> -->
                    <option value="Balita"
                        {{ \Carbon\Carbon::parse($user->tanggal_lahir)->age <= 3 ? 'selected' : '' }}>Balita( 1-3 Tahun)
                    </option>
                    <option value="Anak-Anak"
                        {{ \Carbon\Carbon::parse($user->tanggal_lahir)->age >= 4 && \Carbon\Carbon::parse($user->tanggal_lahir)->age <= 12 ? 'selected' : '' }}>
                        Anak-Anak( 4-12 Tahun)</option>
                    <option value="Remaja"
                        {{ \Carbon\Carbon::parse($user->tanggal_lahir)->age >= 13 && \Carbon\Carbon::parse($user->tanggal_lahir)->age <= 19 ? 'selected' : '' }}>
                        Remaja( 13-19 Tahun)</option>
                    <option value="Dewasa"
                        {{ \Carbon\Carbon::parse($user->tanggal_lahir)->age >= 20 && \Carbon\Carbon::parse($user->tanggal_lahir)->age <= 39 ? 'selected' : '' }}>
                        Dewasa( 20-39 Tahun)</option>
                    <option value="Dewasa_Tengah"
                        {{ \Carbon\Carbon::parse($user->tanggal_lahir)->age >= 40 && \Carbon\Carbon::parse($user->tanggal_lahir)->age <= 64 ? 'selected' : '' }}>
                        Dewasa Tengah( 40-64 Tahun)</option>
                    <option value="Lansia"
                        {{ \Carbon\Carbon::parse($user->tanggal_lahir)->age >= 65 ? 'selected' : '' }}>Lansia( 65+
                        Tahun)</option>
                </select>

                <input type="text" name="gula"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Gula Darah" value="{{ $catatanKesehatan ? $catatanKesehatan->gula : '' }}" />

                <input type="text" name="sistolik"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Sistolik" value="{{ $catatanKesehatan ? $catatanKesehatan->sistolik : '' }}" />

                <input type="text" name="Diastolik"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Diastolik" value="{{ $catatanKesehatan ? $catatanKesehatan->diastolik : '' }}" />

                <input type="text" name="berat"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Berat Badan" value="{{ $user->berat_badan }}" />

                <input type="text" name="tinggi"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Tinggi Badan" value="{{ $user->tinggi_badan }}" />

                <!-- Tombol Submit dan Batal -->
                <button type="submit"
                    class="bg-[#FF76CE] px-5 py-2 rounded-md font-bold mt-5 w-full text-center text-white">
                    Submit
                </button>
                <button type="button"
                    class="bg-white px-5 py-2 border-2 border-[#FF76CE] rounded-md font-bold mt-3 w-full text-center text-[#FF76CE]"
                    onclick="closeModal()">
                    Batal
                </button>
            </form>
        </div>
    </div>

</section>
<script>
// Fungsi untuk membuka modal
function openModal() {
    document.getElementById("myModal").classList.remove("hidden");
}

// Fungsi untuk menutup modal
function closeModal() {
    document.getElementById("myModal").classList.add("hidden");
}

// Menutup modal jika klik di luar konten modal
window.onclick = function(event) {
    const modal = document.getElementById("myModal");
    if (event.target === modal) {
        closeModal();
    }
};
</script>


@endsection
