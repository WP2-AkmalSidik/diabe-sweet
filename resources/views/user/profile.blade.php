@extends('layout.app')

@section('content')

<section
    class="h-[730px] w-[350px] m-auto overflow-hidden bg-[#FF76CE] bg-cover bg-center rounded-3xl flex flex-col items-center p-6 container-snap overflow-y-auto scale-90">
    <h1 class="text-xl font-semibold mt-8 text-white">Profil Pengguna</h1>

    <div
        class="rounded-full bg-white h-[100px] w-[100px] absolute z-10 left-6 top-[20%] flex flex-row justify-center items-center shadow-lg">
        @if ($user->foto)
        <img src="{{ asset('storage/' . $user->foto) }}" alt="Foto Profil"
            class="rounded-full h-full w-full object-cover">
        @else
        <svg width="60" height="55" viewBox="0 0 60 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M30 30.9375C39.3164 30.9375 46.875 24.0088 46.875 15.4688C46.875 6.92871 39.3164 0 30 0C20.6836 0 13.125 6.92871 13.125 15.4688C13.125 24.0088 20.6836 30.9375 30 30.9375ZM45 34.375H38.543C35.9414 35.4707 33.0469 36.0938 30 36.0938C26.9531 36.0938 24.0703 35.4707 21.457 34.375H15C6.71484 34.375 0 40.5303 0 48.125V49.8438C0 52.6904 2.51953 55 5.625 55H54.375C57.4805 55 60 52.6904 60 49.8438V48.125C60 40.5303 53.2852 34.375 45 34.375Z"
                fill="#FF76CE" />
        </svg>
        @endif
    </div>
    <div class="rounded-3xl h-[75%] w-full bg-white p-8 absolute bottom-0 flex flex-col gap-4">
        <div class="flex flex-row justify-between items-end">
            <div class="flex flex-col gap-2">
                <h1 class="text-xl font-bold text-black mt-[3rem]">{{ $user->name }}</h1>
                @php
                    $textColor = match($statusDiabetes) {
                        'Non Diabetes' => 'text-green-500',
                        'Waspada' => 'text-yellow-400',
                        'Diabetes' => 'text-red-500',
                        default => 'text-black',
                    };
                @endphp

                <h2 class="text-base font-semibold {{ $textColor }}">{{ $statusDiabetes }}</h2>
            </div>

            <a href="#" class="p-2 bg-[#FF76CE] rounded-lg flex items-center justify-center mb-1" onclick="openModal()">
                <svg class="ml-0.5" width="19" height="19" viewBox="0 0 19 19" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_521_29)">
                        <path
                            d="M8.16699 2.52844H4.00033C3.11627 2.52844 2.26848 2.87962 1.64335 3.50475C1.01824 4.12987 0.666992 4.97771 0.666992 5.86177V14.1951C0.666992 15.0792 1.01824 15.927 1.64335 16.5521C2.26848 17.1773 3.11627 17.5285 4.00033 17.5285H13.167C15.0087 17.5285 15.667 16.0285 15.667 14.1951V10.0285M16.7337 4.52848L8.78374 12.4785C7.99207 13.2701 5.64205 13.6368 5.11705 13.1118C4.59205 12.5868 4.95038 10.2368 5.74205 9.4451L13.7004 1.48679C13.8967 1.27267 14.1342 1.10055 14.3989 0.98081C14.6635 0.86106 14.9497 0.796142 15.2401 0.790026C15.5304 0.783917 15.8191 0.836702 16.0885 0.94521C16.3579 1.05371 16.6026 1.21571 16.8077 1.42138C17.0127 1.62705 17.1741 1.87213 17.2818 2.14185C17.3896 2.41157 17.4417 2.70032 17.4347 2.9907C17.4278 3.28107 17.3621 3.56706 17.2417 3.83135C17.1212 4.09565 16.9484 4.3328 16.7337 4.52848Z"
                            stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_521_29">
                            <rect width="19" height="19" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>

        <div class="w-full flex flex-row justify-between items-center">
            <div class="flex flex-col justify-between items-center">
                <h3 class="text-[#FF76CE] font-semibold text-base">Umur</h3>
                <h2 class="text-lg text-black font-semibold">{{ $umur }}</h2>
            </div>
            <div class="flex flex-col justify-between items-center">
                <h3 class="text-[#FF76CE] font-semibold text-base">Tinggi</h3>
                <h2 class="text-lg text-black font-semibold">{{ $user->tinggi_badan }}</h2>
            </div>
            <div class="flex flex-col justify-between items-center">
                <h3 class="text-[#FF76CE] font-semibold text-base">Berat</h3>
                <h2 class="text-lg text-black font-semibold">{{ $user->berat_badan }}</h2>
            </div>
        </div>
        <div class="flex flex-col gap-4 items-start mt-4">
            <div class="flex flex-row justify-center items-center gap-4">
                <svg width="20" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.3 4.25C3.3 3.12283 3.76357 2.04183 4.58873 1.2448C5.41389 0.447767 6.53305 0 7.7 0C8.86695 0 9.98611 0.447767 10.8113 1.2448C11.6364 2.04183 12.1 3.12283 12.1 4.25C12.1 5.37717 11.6364 6.45817 10.8113 7.2552C9.98611 8.05223 8.86695 8.5 7.7 8.5C6.53305 8.5 5.41389 8.05223 4.58873 7.2552C3.76357 6.45817 3.3 5.37717 3.3 4.25ZM0 16.0139C0 12.7434 2.74313 10.0938 6.12906 10.0938H9.27094C12.6569 10.0938 15.4 12.7434 15.4 16.0139C15.4 16.5584 14.9428 17 14.3791 17H1.02094C0.457188 17 0 16.5584 0 16.0139ZM20.9447 17H16.2078C16.3934 16.6879 16.5034 16.326 16.5034 15.9375V15.6719C16.5034 13.6564 15.5719 11.8469 14.1041 10.6316C14.1866 10.6283 14.2656 10.625 14.3481 10.625H16.4587C19.5181 10.625 22 13.0223 22 15.9807C22 16.5451 21.5256 17 20.9447 17ZM14.85 8.5C13.7844 8.5 12.8219 8.08164 12.1241 7.40762C12.8013 6.52441 13.2 5.43203 13.2 4.25C13.2 3.36016 12.9731 2.52012 12.5709 1.78301C13.2103 1.33145 13.9975 1.0625 14.85 1.0625C16.9778 1.0625 18.7 2.72598 18.7 4.78125C18.7 6.83652 16.9778 8.5 14.85 8.5Z"
                        fill="#FF76CE" />
                </svg>
                <p class="font-semibold text-black">Undang teman</p>
            </div>
            <a href="#" class="flex flex-row justify-center items-center gap-4" onclick="openPassword()">
                <svg width="20" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 16C8.53043 16 9.03914 15.7893 9.41421 15.4142C9.78929 15.0391 10 14.5304 10 14C10 13.4696 9.78929 12.9609 9.41421 12.5858C9.03914 12.2107 8.53043 12 8 12C7.46957 12 6.96086 12.2107 6.58579 12.5858C6.21071 12.9609 6 13.4696 6 14C6 14.5304 6.21071 15.0391 6.58579 15.4142C6.96086 15.7893 7.46957 16 8 16ZM14 7C14.5304 7 15.0391 7.21071 15.4142 7.58579C15.7893 7.96086 16 8.46957 16 9V19C16 19.5304 15.7893 20.0391 15.4142 20.4142C15.0391 20.7893 14.5304 21 14 21H2C1.46957 21 0.960859 20.7893 0.585786 20.4142C0.210714 20.0391 0 19.5304 0 19V9C0 8.46957 0.210714 7.96086 0.585786 7.58579C0.960859 7.21071 1.46957 7 2 7H3V5C3 3.67392 3.52678 2.40215 4.46447 1.46447C5.40215 0.526784 6.67392 0 8 0C8.65661 0 9.30679 0.129329 9.91342 0.380602C10.52 0.631876 11.0712 1.00017 11.5355 1.46447C11.9998 1.92876 12.3681 2.47995 12.6194 3.08658C12.8707 3.69321 13 4.34339 13 5V7H14ZM8 2C7.20435 2 6.44129 2.31607 5.87868 2.87868C5.31607 3.44129 5 4.20435 5 5V7H11V5C11 4.20435 10.6839 3.44129 10.1213 2.87868C9.55871 2.31607 8.79565 2 8 2Z"
                        fill="#FF76CE" />
                </svg>
                <p class="font-semibold text-black">Ubah kata sandi</p>
            </a>
            <div class="flex flex-row justify-center items-center gap-4">
                <svg width="20" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 0L0 4V10C0 15.55 3.84 20.74 9 22C14.16 20.74 18 15.55 18 10V4L9 0ZM8 6H10V8H8V6ZM8 10H10V16H8V10Z"
                        fill="#FF76CE" />
                </svg>
                <p class="font-semibold text-black">Kebijakan keamanan</p>
            </div>
            <div class="flex flex-row justify-center items-center gap-4">
                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 4H2C1.46957 4 0.960859 4.21071 0.585786 4.58579C0.210714 4.96086 0 5.46957 0 6V10C0 10.5304 0.210714 11.0391 0.585786 11.4142C0.960859 11.7893 1.46957 12 2 12H3V16C3 16.2652 3.10536 16.5196 3.29289 16.7071C3.48043 16.8946 3.73478 17 4 17H6C6.26522 17 6.51957 16.8946 6.70711 16.7071C6.89464 16.5196 7 16.2652 7 16V12H10L15 16V0L10 4ZM19.5 8C19.5 9.71 18.54 11.26 17 12V4C18.53 4.75 19.5 6.3 19.5 8Z"
                        fill="#FF76CE" />
                </svg>
                <p class="font-semibold text-black">FAQ</p>
            </div>
            <div class="flex flex-row justify-center items-center gap-4">
                <svg width="20" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3 0C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H9C9.79565 20 10.5587 19.6839 11.1213 19.1213C11.6839 18.5587 12 17.7956 12 17V3C12 2.20435 11.6839 1.44129 11.1213 0.87868C10.5587 0.316071 9.79565 0 9 0H3ZM13.293 5.293C13.4805 5.10553 13.7348 5.00021 14 5.00021C14.2652 5.00021 14.5195 5.10553 14.707 5.293L18.707 9.293C18.8945 9.48053 18.9998 9.73484 18.9998 10C18.9998 10.2652 18.8945 10.5195 18.707 10.707L14.707 14.707C14.5184 14.8892 14.2658 14.99 14.0036 14.9877C13.7414 14.9854 13.4906 14.8802 13.3052 14.6948C13.1198 14.5094 13.0146 14.2586 13.0123 13.9964C13.01 13.7342 13.1108 13.4816 13.293 13.293L15.586 11H7C6.73478 11 6.48043 10.8946 6.29289 10.7071C6.10536 10.5196 6 10.2652 6 10C6 9.73478 6.10536 9.48043 6.29289 9.29289C6.48043 9.10536 6.73478 9 7 9H15.586L13.293 6.707C13.1055 6.51947 13.0002 6.26516 13.0002 6C13.0002 5.73484 13.1055 5.48053 13.293 5.293Z"
                        fill="#FF76CE" />
                </svg>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex flex-row justify-center items-center gap-2">
                        <p class="font-semibold text-black">Logout</p>
                    </button>
                </form>
            </div>

        </div>
    </div>
    <div class="absolute bottom-0 h-16 w-full p-4 px-7 grid grid-cols-2">
        <a href="{{route('dashboard')}}"
            class="flex flex-row justify-center items-center font-semibold text-xl gap-2 rounded-full text-[#D5D5D5]">
            <svg class="scale-75" width="37" height="30" viewBox="0 0 37 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.6363 4.6392C18.5233 4.54383 18.3729 4.4906 18.2166 4.4906C18.0602 4.4906 17.9099 4.54383 17.7969 4.6392L3.82499 16.4162C3.76565 16.4663 3.71844 16.5265 3.68622 16.5931C3.654 16.6598 3.63744 16.7315 3.63753 16.8039L3.63525 27.8571C3.63525 28.4254 3.89112 28.9704 4.34657 29.3723C4.80201 29.7742 5.41973 29.9999 6.06383 29.9999H13.3571C13.6792 29.9999 13.988 29.8871 14.2158 29.6861C14.4435 29.4852 14.5714 29.2127 14.5714 28.9285V19.8214C14.5714 19.6793 14.6354 19.543 14.7493 19.4426C14.8631 19.3421 15.0175 19.2856 15.1786 19.2856H21.25C21.411 19.2856 21.5655 19.3421 21.6793 19.4426C21.7932 19.543 21.8572 19.6793 21.8572 19.8214V28.9285C21.8572 29.2127 21.9851 29.4852 22.2128 29.6861C22.4405 29.8871 22.7494 29.9999 23.0714 29.9999H30.3617C31.0058 29.9999 31.6235 29.7742 32.079 29.3723C32.5344 28.9704 32.7903 28.4254 32.7903 27.8571V16.8039C32.7904 16.7315 32.7738 16.6598 32.7416 16.5931C32.7094 16.5265 32.6622 16.4663 32.6028 16.4162L18.6363 4.6392Z"
                    fill="#D5D5D5" />
                <path
                    d="M36.0424 14.2065L30.3656 9.41452V2.14286C30.3656 1.8587 30.2376 1.58618 30.0099 1.38524C29.7822 1.18431 29.4733 1.07143 29.1513 1.07143H25.5084C25.1864 1.07143 24.8775 1.18431 24.6498 1.38524C24.4221 1.58618 24.2941 1.8587 24.2941 2.14286V4.28572L19.8984 0.577233C19.4871 0.210268 18.8754 0 18.2143 0C17.5556 0 16.9454 0.210268 16.5341 0.577903L0.391636 14.2052C-0.0804178 14.6069 -0.139614 15.2679 0.28994 15.7031C0.397807 15.813 0.529884 15.9024 0.678131 15.9658C0.826379 16.0292 0.987696 16.0653 1.15227 16.0719C1.31684 16.0786 1.48122 16.0556 1.6354 16.0044C1.78959 15.9532 1.93036 15.8748 2.04914 15.7741L17.7969 2.49643C17.9099 2.40106 18.0603 2.34783 18.2166 2.34783C18.373 2.34783 18.5233 2.40106 18.6363 2.49643L34.3856 15.7741C34.6176 15.9704 34.9283 16.0776 35.2497 16.072C35.5711 16.0665 35.8769 15.9488 36.1 15.7447C36.566 15.3188 36.5273 14.6156 36.0424 14.2065Z"
                    fill="#D5D5D5" />
            </svg>
            Home
        </a>

        <a href="{{route('profile')}}"
            class="flex flex-row justify-center items-center font-semibold text-xl gap-2 rounded-full text-[#FF66CE]">

            <svg width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.01562 22.65C7.34375 21.675 8.82812 20.9065 10.4687 20.3445C12.1094 19.7825 13.8281 19.501 15.625 19.5C17.4219 19.499 19.1406 19.7805 20.7812 20.3445C22.4219 20.9085 23.9062 21.677 25.2344 22.65C26.1458 21.625 26.8557 20.4625 27.3641 19.1625C27.8724 17.8625 28.126 16.475 28.125 15C28.125 11.675 26.9078 8.8435 24.4734 6.5055C22.0391 4.1675 19.0896 2.999 15.625 3C12.1604 3.001 9.21094 4.17 6.77656 6.507C4.34219 8.844 3.125 11.675 3.125 15C3.125 16.475 3.37917 17.8625 3.8875 19.1625C4.39583 20.4625 5.10521 21.625 6.01562 22.65ZM15.625 16.5C14.0885 16.5 12.7927 15.994 11.7375 14.982C10.6823 13.97 10.1552 12.726 10.1562 11.25C10.1573 9.774 10.6849 8.53 11.7391 7.518C12.7932 6.506 14.0885 6 15.625 6C17.1615 6 18.4573 6.5065 19.5125 7.5195C20.5677 8.5325 21.0948 9.776 21.0937 11.25C21.0927 12.724 20.5656 13.968 19.5125 14.982C18.4594 15.996 17.1635 16.502 15.625 16.5ZM15.625 30C13.4635 30 11.4323 29.606 9.53125 28.818C7.63021 28.03 5.97656 26.9615 4.57031 25.6125C3.16406 24.2635 2.05104 22.676 1.23125 20.85C0.41146 19.024 0.00104364 17.074 1.97785e-06 15C-0.00103969 12.926 0.409377 10.976 1.23125 9.15C2.05313 7.324 3.16615 5.7365 4.57031 4.3875C5.97448 3.0385 7.62813 1.97 9.53125 1.182C11.4344 0.394 13.4656 0 15.625 0C17.7844 0 19.8156 0.394 21.7187 1.182C23.6219 1.97 25.2755 3.0385 26.6797 4.3875C28.0838 5.7365 29.1974 7.324 30.0203 9.15C30.8432 10.976 31.2531 12.926 31.25 15C31.2469 17.074 30.8365 19.024 30.0187 20.85C29.201 22.676 28.088 24.2635 26.6797 25.6125C25.2714 26.9615 23.6177 28.0305 21.7187 28.8195C19.8198 29.6085 17.7885 30.002 15.625 30Z"
                    fill="#FF76CE" />
            </svg>
            Profile
        </a>
    </div>

    <div id="myModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 w-[90%] max-w-lg">
            <h1 class="text-xl font-bold text-center text-[#FF76CE] uppercase">
                UBAH PROFILE
            </h1>

            <!-- Form di dalam modal -->
            <form class="mt-4 flex flex-col gap-2" action="{{ route('profile.ubah') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" value="{{ old('name', $user->name) }}"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Nama" required />

                <input type="file" name="foto"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1" />

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

    <div id="myPassword" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 w-[90%] max-w-lg">
            <h1 class="text-xl font-bold text-center text-[#FF76CE] uppercase">
                UBAH PASSWORD
            </h1>

            <!-- Form di dalam modal -->
            <form class="mt-4 flex flex-col gap-2" action="{{ route('password.update') }}" method="POST">
                @csrf
                @method('PUT')

                <input type="password" name="current_password"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Password saat ini" />

                <input type="password" name="password"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Password Baru" />

                <input type="password" name="password_confirmation"
                    class="mt-1 px-3 py-3 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#FF76CE] focus:ring-[#FF76CE] block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Ulangi Password" />

                <!-- Tampilkan pesan error jika ada -->
                @if ($errors->any())
                <div class="mt-2 text-red-600">
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif

                <!-- Tombol Submit dan Batal -->
                <button type="submit"
                    class="bg-[#FF76CE] px-5 py-2 rounded-md font-bold mt-5 w-full text-center text-white">
                    Submit
                </button>
                <button type="button"
                    class="bg-white px-5 py-2 border-2 border-[#FF76CE] rounded-md font-bold mt-3 w-full text-center text-[#FF76CE]"
                    onclick="closePassword()">
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

// Modal PAssword
function openPassword() {
    document.getElementById("myPassword").classList.remove("hidden");
}

// Fungsi untuk menutup Password
function closePassword() {
    document.getElementById("myPassword").classList.add("hidden");
}

// Menutup Password jika klik di luar konten Password
window.onclick = function(event) {
    const password = document.getElementById("myPassword");
    if (event.target === password) {
        closePassword();
    }
};
</script>


@endsection
