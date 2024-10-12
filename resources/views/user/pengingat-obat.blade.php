@extends('layout.app')

@section('content')
<section
    class="h-[100vh] w-[350px] m-auto overflow-hidden bg-[#FF76CE] scale-90 bg-cover bg-center rounded-3xl flex flex-col items-center p-7 container-snap overflow-y-auto">
    <a href="{{route('dashboard')}}" class="absolute left-7 top-8">
        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="scale-75">
            <path d="M11 2L2 11L11 20" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>

    <h1 class="text-xl font-bold text-white text-center">Pengingat Obat</h1>

    <h2 class="mt-2 text-center font-semibold text-[0.8rem] text-white">
        Konsumsi Obat Tepat Jadwal <br />Untuk Jaga Gula Darah Anda
    </h2>
    <div class="flex flex-row justify-center items-center gap-2 mt-1">
        <!-- ADD -->
        <a href="#" class="p-2 mt-2 bg-white rounded-lg" onclick="openModal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.3335 8.19512H14.6668M8.00016 1.52846V14.8618" stroke="#FF76CE" stroke-width="1.66667"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
    <div class="rounded-3xl h-[78%] w-full bg-white p-8 absolute bottom-0 flex flex-col gap-4">
        <!-- Jika Tidak Ada Data Pengingat Obat -->
        @if($pengingatObat->isEmpty())
        <div class="w-full flex flex-col justify-center items-center">
            <p class="text-base font-semibold">Data Belum Ditambahkan</p>
            <div
                class="mt-5 w-[150px] h-[150px] rounded-full border-8 border-red-500 flex justify-center items-center p-10">
                <p class="text-[6rem] text-red-500">!</p>
            </div>
        </div>
        @else
        <!-- Jika Data Ada -->
        <p class="text-base font-semibold text-center">Daftar Pengingat</p>
        @foreach($pengingatObat as $pengingat)
        <div class="w-full flex flex-col justify-center items-end overflow-hidden
        @if ($pengingat && $pengingat->status == 'Terlewatkan')
            bg-red-300
        @elseif ($pengingat && $pengingat->status == 'Sudah')
            bg-green-300
        @else
            bg-gray-300
        @endif
        rounded-xl shadow-lg">
            <div class="w-[95%] bg-white rounded-xl pt-2 px-5 pb-1 flex flex-col gap-1">
                <div class="flex flex-row justify-between items-center">
                    <div class="flex flex-row gap-3 items-center">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.1999 1.5C14.1999 0.5 12.8999 0 11.6999 0C10.4999 0 9.0999 0.5 8.1999 1.5L2.3999 7.1C0.399902 9.1 0.399902 12.2 2.3999 14.2C4.3999 16.2 7.4999 16.2 9.4999 14.2L15.1999 8.5C17.0999 6.6 17.0999 3.4 15.1999 1.5ZM13.7999 7.1L10.9999 9.9L7.3999 6.4L2.9999 10.8C2.9999 10 3.1999 9.1 3.8999 8.5L9.5999 2.8C10.0999 2.3 10.8999 2 11.5999 2C12.2999 2 13.0999 2.3 13.6999 2.8C14.8999 4.1 14.8999 5.9 13.7999 7.1ZM18.5999 5.1C18.5999 5.9 18.3999 6.6 18.1999 7.4C19.1999 8.6 19.1999 10.4 18.0999 11.5L15.2999 14.3L13.7999 12.8L10.9999 15.6C9.6999 16.9 7.8999 17.6 6.1999 17.6C6.3999 17.9 6.5999 18.2 6.8999 18.5C8.8999 20.5 11.9999 20.5 13.9999 18.5L19.6999 12.8C21.6999 10.8 21.6999 7.7 19.6999 5.7C19.1999 5.5 18.8999 5.3 18.5999 5.1Z"
                                fill="#FF76CE" />
                        </svg>
                        <p class="text-sm font-semibold text-[#FF76CE]">{{ $pengingat->jml_obat }}
                            {{ $pengingat->jenis_obat }}
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <!-- DETAIL -->
                        <a href="#" class="p-2 bg-white rounded-lg"
                            onclick="openDetail('{{ $pengingat->obat }}', '{{ $pengingat->jml_obat }}', '{{ $pengingat->tanggal }}', '{{ $pengingat->pukul }}')">

                            <svg width="20" height="18" viewBox="0 0 22 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 1.45962C8.91153 1.16968 9.9104 1 11 1C15.1819 1 18.028 3.49956 19.7251 5.70433C20.575 6.80853 21 7.3606 21 9C21 10.6394 20.575 11.1915 19.7251 12.2957C18.028 14.5004 15.1819 17 11 17C6.81811 17 3.97196 14.5004 2.27489 12.2957C1.42496 11.1915 1 10.6394 1 9C1 7.3606 1.42496 6.80853 2.27489 5.70433C2.75612 5.07914 3.32973 4.43025 4 3.82137"
                                    stroke="#FF76CE" stroke-opacity="0.807843" stroke-width="1.5"
                                    stroke-linecap="round" />
                                <path
                                    d="M14 9C14 10.6569 12.6569 12 11 12C9.3431 12 8 10.6569 8 9C8 7.3431 9.3431 6 11 6C12.6569 6 14 7.3431 14 9Z"
                                    stroke="#FF76CE" stroke-opacity="0.807843" stroke-width="1.5" />
                            </svg>
                        </a>

                        <!-- DELETE -->
                        <form action="{{ route('pengingat.destroy', $pengingat->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 bg-white rounded-lg"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus pengingat ini?');">
                                <svg width="16" height="20" viewBox="0 0 14 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.2951 3.55666H0.705566" stroke="#FF76CE" stroke-width="1.11083"
                                        stroke-linecap="round" />
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
                            </button>
                        </form>

                    </div>
                </div>

                <h2 class="text-sm font-semibold">{{ $pengingat->obat }}</h2>
                <h2 class="text-sm font-semibold text-gray-400">{{ $pengingat->kategori }} Makan</h2>

                <div class="flex flex-row items-center mt-2 p-3 border-t-2 border-black gap-10">
                    @if($pengingat->status === 'Terlewatkan')
                    <a href="#" class="flex flex-row justify-between items-center gap-2 cursor-not-allowed opacity-50">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0ZM13.6 5.2C13.4949 5.12121 13.3754 5.06388 13.2482 5.03129C13.121 4.99869 12.9886 4.99148 12.8586 5.01005C12.7286 5.02862 12.6035 5.07262 12.4905 5.13953C12.3775 5.20643 12.2788 5.29494 12.2 5.4L10 8.333L7.8 5.4C7.72121 5.29494 7.62249 5.20643 7.50949 5.13953C7.39649 5.07262 7.27142 5.02862 7.14142 5.01005C7.01142 4.99148 6.87903 4.99869 6.75182 5.03129C6.62461 5.06388 6.50506 5.12121 6.4 5.2C6.29494 5.27879 6.20643 5.37751 6.13953 5.49051C6.07262 5.60351 6.02862 5.72858 6.01005 5.85858C5.99148 5.98858 5.99869 6.12097 6.03129 6.24818C6.06388 6.37539 6.12121 6.49494 6.2 6.6L8.75 10L6.2 13.4C6.04087 13.6122 5.97254 13.8789 6.01005 14.1414C6.04756 14.404 6.18783 14.6409 6.4 14.8C6.61217 14.9591 6.87887 15.0275 7.14142 14.99C7.40397 14.9524 7.64087 14.8122 7.8 14.6L10 11.667L12.2 14.6C12.3591 14.8122 12.596 14.9524 12.8586 14.99C13.1211 15.0275 13.3878 14.9591 13.6 14.8C13.8122 14.6409 13.9524 14.404 13.9899 14.1414C14.0275 13.8789 13.9591 13.6122 13.8 13.4L11.25 10L13.8 6.6C13.8788 6.49494 13.9361 6.37539 13.9687 6.24818C14.0013 6.12097 14.0085 5.98858 13.9899 5.85858C13.9714 5.72858 13.9274 5.60351 13.8605 5.49051C13.7936 5.37751 13.7051 5.27879 13.6 5.2Z"
                                fill="#FF0000" />
                        </svg>
                        <p class="text-[#FF0000] font-semibold text-sm">Terlewat</p>
                    </a>
                    @elseif($pengingat->status === 'Sudah')
                    <a href="#" class="flex flex-row justify-between items-center gap-2 cursor-not-allowed opacity-70">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM8.823 12.14L6.058 9.373L5 10.431L8.119 13.552C8.30653 13.7395 8.56084 13.8448 8.826 13.8448C9.09116 13.8448 9.34547 13.7395 9.533 13.552L15.485 7.602L14.423 6.54L8.823 12.14Z"
                                fill="#44AF1D" />
                        </svg>
                        <p class="text-[#44AF1D] font-semibold text-sm">Sudah</p>
                    </a>
                    @elseif($pengingat->status === 'Menunggu')
                    <a href="{{ route('update-status-sudah', $pengingat->id) }}"
                        class="flex flex-row justify-between items-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM8.823 12.14L6.058 9.373L5 10.431L8.119 13.552C8.30653 13.7395 8.56084 13.8448 8.826 13.8448C9.09116 13.8448 9.34547 13.7395 9.533 13.552L15.485 7.602L14.423 6.54L8.823 12.14Z"
                                fill="#44AF1D" />
                        </svg>
                        <p class="text-[#44AF1D] font-semibold text-sm">Sudah</p>
                    </a>
                    <a href="{{ route('update-status-terlewat', $pengingat->id) }}"
                        class="flex flex-row justify-between items-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0ZM13.6 5.2C13.4949 5.12121 13.3754 5.06388 13.2482 5.03129C13.121 4.99869 12.9886 4.99148 12.8586 5.01005C12.7286 5.02862 12.6035 5.07262 12.4905 5.13953C12.3775 5.20643 12.2788 5.29494 12.2 5.4L10 8.333L7.8 5.4C7.72121 5.29494 7.62249 5.20643 7.50949 5.13953C7.39649 5.07262 7.27142 5.02862 7.14142 5.01005C7.01142 4.99148 6.87903 4.99869 6.75182 5.03129C6.62461 5.06388 6.50506 5.12121 6.4 5.2C6.29494 5.27879 6.20643 5.37751 6.13953 5.49051C6.07262 5.60351 6.02862 5.72858 6.01005 5.85858C5.99148 5.98858 5.99869 6.12097 6.03129 6.24818C6.06388 6.37539 6.12121 6.49494 6.2 6.6L8.75 10L6.2 13.4C6.04087 13.6122 5.97254 13.8789 6.01005 14.1414C6.04756 14.404 6.18783 14.6409 6.4 14.8C6.61217 14.9591 6.87887 15.0275 7.14142 14.99C7.40397 14.9524 7.64087 14.8122 7.8 14.6L10 11.667L12.2 14.6C12.3591 14.8122 12.596 14.9524 12.8586 14.99C13.1211 15.0275 13.3878 14.9591 13.6 14.8C13.8122 14.6409 13.9524 14.404 13.9899 14.1414C14.0275 13.8789 13.9591 13.6122 13.8 13.4L11.25 10L13.8 6.6C13.8788 6.49494 13.9361 6.37539 13.9687 6.24818C14.0013 6.12097 14.0085 5.98858 13.9899 5.85858C13.9714 5.72858 13.9274 5.60351 13.8605 5.49051C13.7936 5.37751 13.7051 5.27879 13.6 5.2Z"
                                fill="#FF0000" />
                        </svg>
                        <p class="text-[#FF0000] font-semibold text-sm">Terlewat</p>
                    </a>
                    @endif
                </div>

            </div>
        </div>
        @endforeach
        @endif
    </div>
    <!-- MODAL -->
    <div id="myModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 w-[90%] max-w-lg">
            <h1 class="text-xl font-bold text-center text-[#FF76CE] uppercase">
                INPUT PENGINGAT
            </h1>

            <!-- Form di dalam modal -->
            <form class="mt-4 flex flex-col gap-2" action="{{ route('pengingat.store') }}" method="POST">
                @csrf
                <!-- Token CSRF untuk keamanan -->
                <input type="text" name="obat"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Nama Obat" required />

                <select name="kategori"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    required>
                    <option value="" disabled selected>Select Kategori</option>
                    <option value="Sebelum">Sebelum Makan</option>
                    <option value="Sesudah">Sesudah Makan</option>
                </select>

                <input type="number" name="jml_obat"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Jumlah Obat" required />

                <select name="jenis_obat"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    required>
                    <option value="" disabled selected>Jenis Obat</option>
                    <option value="Kapsul">Kapsul</option>
                    <option value="Tablet">Tablet</option>
                    <option value="Sendok Sirup">Sendok Sirup</option>
                </select>

                <input type="date" name="tanggal"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Tanggal" required />

                <input type="time" name="pukul"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Pukul" required />

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

    <!-- ModalDetail -->
    <div id="myDetail" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 w-[90%] max-w-lg">
            <h1 class="text-xl font-bold text-center text-[#FF76CE] uppercase">
                DETAIL PENGINGAT
            </h1>
            <div class="mt-4 flex flex-col gap-2">
                <div id="detail-obat"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-black block w-full rounded-md sm:text-sm">
                    Obat:
                </div>
                <div id="detail-jml"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-black block w-full rounded-md sm:text-sm">
                    Jumlah:
                </div>
                <div id="detail-tanggal"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-black block w-full rounded-md sm:text-sm">
                    Tanggal:
                </div>
                <div id="detail-waktu"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-black block w-full rounded-md sm:text-sm">
                    Waktu:
                </div>
            </div>
            <!-- Tombol Close -->
            <button type="button" class="bg-[#FF76CE] px-5 py-2 rounded-md font-bold mt-3 w-full text-center text-white"
                onclick="closeDetail()">
                Close
            </button>
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

// Fungsi untuk membuka detail
function openDetail(obat, jml, tanggal, waktu) {
    // Set detail obat dalam modal
    document.getElementById('detail-obat').innerText = 'Obat: ' + obat;
    document.getElementById('detail-jml').innerText = 'Jumlah: ' + jml + ' Tablet';
    document.getElementById('detail-tanggal').innerText = 'Tanggal: ' + tanggal;
    document.getElementById('detail-waktu').innerText = 'Waktu: ' + waktu;

    // Tampilkan modal
    document.getElementById("myDetail").classList.remove("hidden");
}

// Fungsi untuk menutup detail
function closeDetail() {
    document.getElementById("myDetail").classList.add("hidden");
}

// Gabungkan event handler untuk menutup modal dan detail jika klik di luar konten
window.onclick = function(event) {
    const modal = document.getElementById("myModal");
    const detail = document.getElementById("myDetail");

    // Jika klik di luar modal, tutup modal
    if (event.target === modal) {
        closeModal();
    }

    // Jika klik di luar detail, tutup detail
    if (event.target === detail) {
        closeDetail();
    }
};
</script>



@endsection
