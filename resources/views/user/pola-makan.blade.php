@extends('layout.app') @section('content')
<section
    class="h-[100vh] w-[350px] m-auto overflow-hidden bg-[#FF76CE] scale-90 bg-cover bg-center rounded-3xl flex flex-col items-center py-7"
>
    <a href="{{ route('dashboard') }}" class="absolute left-7 top-8">
        <svg
            width="13"
            height="22"
            viewBox="0 0 13 22"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="scale-75"
        >
            <path
                d="M11 2L2 11L11 20"
                stroke="white"
                stroke-width="4"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
        </svg>
    </a>

    <h1 class="text-xl font-bold text-white ml-1">Pemantauan Pola Makan</h1>

    <!-- Daftar gambar makanan -->
    <div
        class="container-snap snap-x snap-mandatory overflow-x-auto w-full flex flex-row gap-5 px-[5rem] mt-7"
    >
        <a
            href="#"
            class="snap-center flex-shrink-0 rounded-3xl overflow-hidden max-w-[16rem] object-cover"
            onclick="openModal('Oatmeal')"
        >
            <img src="{{ asset('assets/oatmeal.jpg') }}" class="h-[10rem]" />
        </a>
        <a
            href="#"
            class="snap-center flex-shrink-0 rounded-3xl overflow-hidden max-w-[16rem] object-cover"
            onclick="openModal('Telur Rebus')"
        >
            <img src="{{ asset('assets/telurrebus.jpg') }}" class="h-[10rem]" />
        </a>
        <a
            href="#"
            class="snap-center flex-shrink-0 rounded-3xl overflow-hidden max-w-[16rem] object-cover"
            onclick="openModal('Beri')"
        >
            <img src="{{ asset('assets/beri.jpg') }}" class="h-[10rem]" />
        </a>
        <a
            href="#"
            class="snap-center flex-shrink-0 rounded-3xl overflow-hidden max-w-[16rem] object-cover"
            onclick="openModal('Nasi Merah')"
        >
            <img src="{{ asset('assets/nasimerah.jpg') }}" class="h-[10rem]" />
        </a>
        <a
            href="#"
            class="snap-center flex-shrink-0 rounded-3xl overflow-hidden max-w-[16rem] object-cover"
            onclick="openModal('Ayam Panggang')"
        >
            <img
                src="{{ asset('assets/ayam_panggang.jpg') }}"
                class="h-[10rem]"
            />
        </a>
        <a
            href="#"
            class="snap-center flex-shrink-0 rounded-3xl overflow-hidden max-w-[16rem] object-cover"
            onclick="openModal('Bayam')"
        >
            <img src="{{ asset('assets/bayam.jpg') }}" class="h-[10rem]" />
        </a>
    </div>

    <div
        class="rounded-3xl h-[62%] w-full bg-white px-8 py-4 absolute bottom-0 flex flex-col"
    >
        <!-- Jika Data Belum Di pilih -->
        <p class="text-xl font-semibold text-center">Data Belum Dipilih</p>

        <p class="text-base font-semibold">Nilai Nutrisi</p>

        <div class="flex flex-col gap-2">
            <div
                class="px-3 pt-1 rounded-2xl border-2 border-green-500 w-full flex flex-col justify-between mt-2 gap-y-1"
            >
                <p class="text-sm font-semibold text-green-500 text-center">
                    Protein
                </p>
                <div
                    class="w-full flex flex-row justify-between items-center gap-4 mt-[-25px]"
                >
                    <svg
                        width="69"
                        height="69"
                        viewBox="0 0 69 69"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M34.4997 17.8312C31.686 17.8312 29.397 20.1202 29.397 22.9341C29.397 25.7478 31.686 28.0368 34.4997 28.0368C37.3136 28.0368 39.6026 25.7478 39.6026 22.9341C39.6026 20.1202 37.3136 17.8312 34.4997 17.8312Z"
                            fill="#10B981"
                        />
                        <path
                            d="M48.6811 40.9627C45.8672 40.9627 43.5781 43.2517 43.5781 46.0653C43.5781 48.8793 45.8672 51.1683 48.6811 51.1683C51.4948 51.1683 53.7838 48.8793 53.7838 46.0653C53.7839 43.2517 51.4948 40.9627 48.6811 40.9627Z"
                            fill="#10B981"
                        />
                        <path
                            d="M34.5 0C15.4766 0 0 15.4766 0 34.5C0 53.5234 15.4766 69 34.5 69C53.5236 69 69.0002 53.5234 69.0002 34.5C69.0002 15.4766 53.5236 0 34.5 0ZM20.3191 56.6667C14.4643 56.6667 9.71803 51.9205 9.71803 46.0657C9.71803 40.2108 14.4643 35.4646 20.3191 35.4646C26.1739 35.4646 30.9201 40.2109 30.9201 46.0657C30.9201 51.9204 26.1739 56.6667 20.3191 56.6667ZM23.899 22.9343C23.899 17.0795 28.6452 12.3333 34.5001 12.3333C40.3549 12.3333 45.1011 17.0795 45.1011 22.9343C45.1011 28.7892 40.3549 33.5354 34.5001 33.5354C28.6452 33.5354 23.899 28.7892 23.899 22.9343ZM48.681 56.6667C42.8262 56.6667 38.08 51.9205 38.08 46.0657C38.08 40.2108 42.8263 35.4646 48.681 35.4646C54.5358 35.4646 59.2821 40.2109 59.2821 46.0657C59.2821 51.9204 54.5359 56.6667 48.681 56.6667Z"
                            fill="#10B981"
                        />
                    </svg>

                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div
                            class="bg-green-500 h-full rounded-full"
                            style="width: 0%"
                        ></div>
                    </div>

                    <h5 class="font-semibold text-lg text-green-500">0%</h5>
                </div>
            </div>
            <div
                class="px-3 pt-1 rounded-2xl border-2 border-blue-500 w-full flex flex-col justify-between mt-2 gap-y-1"
            >
                <p class="text-sm font-semibold text-blue-500 text-center">
                    Karbohidrat
                </p>
                <div
                    class="w-full flex flex-row justify-between items-center gap-4 mt-[-25px]"
                >
                    <svg
                        width="69"
                        height="69"
                        viewBox="0 0 69 69"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect width="69" height="69" rx="34.5" fill="#3B82F6" />
                        <path
                            d="M34.96 57.04V28.6686M34.9681 11.96L37.7871 14.8281C39.2824 16.3494 40.1225 18.4128 40.1225 20.5643C40.1225 22.7158 39.2824 24.7792 37.7871 26.3005L34.9681 29.1686L32.1342 26.2854C30.6454 24.7626 29.8109 22.7014 29.8137 20.5536C29.8165 18.4058 30.6563 16.3468 32.1491 14.8281L34.9681 11.96ZM46.92 24.6125V28.6686C46.9146 30.798 46.0866 32.8398 44.6147 34.3534C43.1427 35.8671 41.1448 36.7313 39.0521 36.7594H35.0654V32.7248C35.0652 30.5917 35.8908 28.5444 37.3633 27.0261C38.8359 25.5079 40.837 24.6407 42.9333 24.6125H46.92ZM26.9867 24.6125C29.0832 24.6123 31.0955 25.4523 32.5878 26.9505C34.0801 28.4487 34.9324 30.4846 34.9601 32.6174V36.6736H30.9734C28.8587 36.6736 26.8307 35.8189 25.3354 34.2975C23.8401 32.7762 23 30.7128 23 28.5613V24.6125H26.9867ZM46.8989 36.7809V40.837C46.8989 41.9023 46.6926 42.9572 46.2919 43.9414C45.8912 44.9256 45.3039 45.8199 44.5635 46.5732C43.8231 47.3265 42.9441 47.924 41.9768 48.3317C41.0094 48.7394 39.9726 48.9492 38.9255 48.9492H34.9599V44.8931C34.9599 42.7453 35.797 40.6852 37.2878 39.1645C38.7785 37.6437 40.8012 36.7866 42.9122 36.7809H46.8989ZM26.9867 36.7809C29.0977 36.7809 31.1226 37.6326 32.6173 39.1493C34.112 40.666 34.9545 42.7239 34.9601 44.8716V48.9278H30.9734C28.8587 48.9278 26.8307 48.0731 25.3354 46.5517C23.8401 45.0304 23 42.967 23 40.8155V36.7809H26.9867Z"
                            stroke="white"
                            stroke-width="4.55279"
                            stroke-miterlimit="10"
                        />
                    </svg>

                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div
                            class="bg-blue-500 h-full rounded-full"
                            style="width: 0%"
                        ></div>
                    </div>

                    <h5 class="font-semibold text-lg text-blue-500">0%</h5>
                </div>
            </div>
            <div
                class="px-3 pt-1 rounded-2xl border-2 border-red-500 w-full flex flex-col justify-between mt-2 gap-y-1"
            >
                <p class="text-sm font-semibold text-red-500 text-center">
                    Lemak
                </p>
                <div
                    class="w-full flex flex-row justify-between items-center gap-4 mt-[-25px]"
                >
                    <svg
                        width="69"
                        height="69"
                        viewBox="0 0 69 69"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="0.907715"
                            y="0.453873"
                            width="68.0923"
                            height="68.0923"
                            rx="34.0461"
                            fill="#EF4444"
                        />
                        <path
                            d="M12.7095 34.5C12.7095 46.7847 22.6682 56.7435 34.953 56.7435C47.2377 56.7435 57.1964 46.7847 57.1964 34.5C57.1964 22.2153 47.2377 12.2565 34.953 12.2565C22.6682 12.2565 12.7095 22.2153 12.7095 34.5ZM12.7095 34.5C13.9186 31.6787 18.0411 32.0912 18.6671 35.0961L19.1153 37.2472C19.9757 41.3772 25.9048 41.2861 26.6379 37.1315L27.1021 34.5M42.8034 34.5C42.8034 38.8358 39.2886 42.3506 34.9528 42.3506C30.617 42.3506 27.1021 38.8358 27.1021 34.5M42.8034 34.5C42.8034 30.1642 39.2886 26.6494 34.9528 26.6494C30.617 26.6494 27.1021 30.1642 27.1021 34.5M42.8034 34.5L44.4424 32.5719C46.6633 29.9589 50.9267 31.7722 50.5857 35.1843C50.217 38.8712 55.0839 40.5238 57.0364 37.3747L57.1962 37.1169M29.719 20.1072C29.719 20.8298 29.1332 21.4156 28.4106 21.4156C27.6879 21.4156 27.1021 20.8298 27.1021 20.1072C27.1021 19.3845 27.6879 18.7987 28.4106 18.7987C29.1332 18.7987 29.719 19.3845 29.719 20.1072ZM48.037 25.3409C48.037 26.0636 47.4512 26.6494 46.7285 26.6494C46.0059 26.6494 45.4201 26.0636 45.4201 25.3409C45.4201 24.6183 46.0059 24.0325 46.7285 24.0325C47.4512 24.0325 48.037 24.6183 48.037 25.3409ZM40.1863 17.4903C40.1863 18.2129 39.6005 18.7987 38.8779 18.7987C38.1553 18.7987 37.5695 18.2129 37.5695 17.4903C37.5695 16.7676 38.1553 16.1818 38.8779 16.1818C39.6005 16.1818 40.1863 16.7676 40.1863 17.4903Z"
                            stroke="white"
                            stroke-width="4.53949"
                        />
                    </svg>

                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div
                            class="bg-red-500 h-full rounded-full"
                            style="width: 0%"
                        ></div>
                    </div>

                    <h5 class="font-semibold text-lg text-red-500">0%</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal karbo -->
    <div
        class="fixed inset-0 z-50 flex items-center justify-center hidden"
        id="myModal"
    >
        <div
            class="rounded-3xl h-[62%] w-full bg-white px-8 py-4 absolute bottom-0 flex flex-col"
        >
            <p id="modalTitle" class="text-xl font-semibold text-center">
                Makanan
            </p>

            <div class="flex flex-row justify-between items-center">
                <p class="text-base font-semibold" id="takaran"></p>
                <p class="text-base font-semibold" id="kalori"></p>
            </div>

            <div class="flex flex-col gap-2">
                <!-- Kadar Protein -->
                <div
                    class="px-3 pt-1 rounded-2xl border-2 border-green-500 w-full flex flex-col justify-between mt-2 gap-y-1"
                >
                    <p class="text-sm font-semibold text-green-500 text-center">
                        Protein
                    </p>
                    <div
                        class="w-full flex flex-row justify-between items-center gap-4 mt-[-25px]"
                    >
                        <svg
                            width="69"
                            height="69"
                            viewBox="0 0 69 69"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M34.4997 17.8312C31.686 17.8312 29.397 20.1202 29.397 22.9341C29.397 25.7478 31.686 28.0368 34.4997 28.0368C37.3136 28.0368 39.6026 25.7478 39.6026 22.9341C39.6026 20.1202 37.3136 17.8312 34.4997 17.8312Z"
                                fill="#10B981"
                            />
                            <path
                                d="M48.6811 40.9627C45.8672 40.9627 43.5781 43.2517 43.5781 46.0653C43.5781 48.8793 45.8672 51.1683 48.6811 51.1683C51.4948 51.1683 53.7838 48.8793 53.7838 46.0653C53.7839 43.2517 51.4948 40.9627 48.6811 40.9627Z"
                                fill="#10B981"
                            />
                            <path
                                d="M34.5 0C15.4766 0 0 15.4766 0 34.5C0 53.5234 15.4766 69 34.5 69C53.5236 69 69.0002 53.5234 69.0002 34.5C69.0002 15.4766 53.5236 0 34.5 0ZM20.3191 56.6667C14.4643 56.6667 9.71803 51.9205 9.71803 46.0657C9.71803 40.2108 14.4643 35.4646 20.3191 35.4646C26.1739 35.4646 30.9201 40.2109 30.9201 46.0657C30.9201 51.9204 26.1739 56.6667 20.3191 56.6667ZM23.899 22.9343C23.899 17.0795 28.6452 12.3333 34.5001 12.3333C40.3549 12.3333 45.1011 17.0795 45.1011 22.9343C45.1011 28.7892 40.3549 33.5354 34.5001 33.5354C28.6452 33.5354 23.899 28.7892 23.899 22.9343ZM48.681 56.6667C42.8262 56.6667 38.08 51.9205 38.08 46.0657C38.08 40.2108 42.8263 35.4646 48.681 35.4646C54.5358 35.4646 59.2821 40.2109 59.2821 46.0657C59.2821 51.9204 54.5359 56.6667 48.681 56.6667Z"
                                fill="#10B981"
                            />
                        </svg>

                        <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div
                                id="proteinBar"
                                class="bg-green-500 h-full rounded-full"
                                style="width: 0%"
                            ></div>
                        </div>

                        <h5
                            id="proteinPercent"
                            class="font-semibold text-lg text-green-500"
                        >
                            0%
                        </h5>
                    </div>
                </div>

                <!-- Kadar karbo Lainnya (Lemak, Karbohidrat, dll) -->
                <div
                    class="px-3 pt-1 rounded-2xl border-2 border-blue-500 w-full flex flex-col justify-between mt-2 gap-y-1"
                >
                    <p class="text-sm font-semibold text-blue-500 text-center">
                        Karbohidrat
                    </p>
                    <div
                        class="w-full flex flex-row justify-between items-center gap-4 mt-[-25px]"
                    >
                        <svg
                            width="69"
                            height="69"
                            viewBox="0 0 69 69"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                                width="69"
                                height="69"
                                rx="34.5"
                                fill="#3B82F6"
                            />
                            <path
                                d="M34.96 57.04V28.6686M34.9681 11.96L37.7871 14.8281C39.2824 16.3494 40.1225 18.4128 40.1225 20.5643C40.1225 22.7158 39.2824 24.7792 37.7871 26.3005L34.9681 29.1686L32.1342 26.2854C30.6454 24.7626 29.8109 22.7014 29.8137 20.5536C29.8165 18.4058 30.6563 16.3468 32.1491 14.8281L34.9681 11.96ZM46.92 24.6125V28.6686C46.9146 30.798 46.0866 32.8398 44.6147 34.3534C43.1427 35.8671 41.1448 36.7313 39.0521 36.7594H35.0654V32.7248C35.0652 30.5917 35.8908 28.5444 37.3633 27.0261C38.8359 25.5079 40.837 24.6407 42.9333 24.6125H46.92ZM26.9867 24.6125C29.0832 24.6123 31.0955 25.4523 32.5878 26.9505C34.0801 28.4487 34.9324 30.4846 34.9601 32.6174V36.6736H30.9734C28.8587 36.6736 26.8307 35.8189 25.3354 34.2975C23.8401 32.7762 23 30.7128 23 28.5613V24.6125H26.9867ZM46.8989 36.7809V40.837C46.8989 41.9023 46.6926 42.9572 46.2919 43.9414C45.8912 44.9256 45.3039 45.8199 44.5635 46.5732C43.8231 47.3265 42.9441 47.924 41.9768 48.3317C41.0094 48.7394 39.9726 48.9492 38.9255 48.9492H34.9599V44.8931C34.9599 42.7453 35.797 40.6852 37.2878 39.1645C38.7785 37.6437 40.8012 36.7866 42.9122 36.7809H46.8989ZM26.9867 36.7809C29.0977 36.7809 31.1226 37.6326 32.6173 39.1493C34.112 40.666 34.9545 42.7239 34.9601 44.8716V48.9278H30.9734C28.8587 48.9278 26.8307 48.0731 25.3354 46.5517C23.8401 45.0304 23 42.967 23 40.8155V36.7809H26.9867Z"
                                stroke="white"
                                stroke-width="4.55279"
                                stroke-miterlimit="10"
                            />
                        </svg>

                        <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div
                                id="karboBar"
                                class="bg-blue-500 h-full rounded-full"
                                style="width: 0%"
                            ></div>
                        </div>

                        <h5
                            id="karboPercent"
                            class="font-semibold text-lg text-blue-500"
                        >
                            0%
                        </h5>
                    </div>
                </div>

                <!-- Kadar Lemak -->
                <div
                    class="px-3 pt-1 rounded-2xl border-2 border-red-500 w-full flex flex-col justify-between mt-2 gap-y-1"
                >
                    <p class="text-sm font-semibold text-red-500 text-center">
                        Lemak
                    </p>
                    <div
                        class="w-full flex flex-row justify-between items-center gap-4 mt-[-25px]"
                    >
                        <svg
                            width="69"
                            height="69"
                            viewBox="0 0 69 69"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                                x="0.907715"
                                y="0.453873"
                                width="68.0923"
                                height="68.0923"
                                rx="34.0461"
                                fill="#EF4444"
                            />
                            <path
                                d="M12.7095 34.5C12.7095 46.7847 22.6682 56.7435 34.953 56.7435C47.2377 56.7435 57.1964 46.7847 57.1964 34.5C57.1964 22.2153 47.2377 12.2565 34.953 12.2565C22.6682 12.2565 12.7095 22.2153 12.7095 34.5ZM12.7095 34.5C13.9186 31.6787 18.0411 32.0912 18.6671 35.0961L19.1153 37.2472C19.9757 41.3772 25.9048 41.2861 26.6379 37.1315L27.1021 34.5M42.8034 34.5C42.8034 38.8358 39.2886 42.3506 34.9528 42.3506C30.617 42.3506 27.1021 38.8358 27.1021 34.5M42.8034 34.5C42.8034 30.1642 39.2886 26.6494 34.9528 26.6494C30.617 26.6494 27.1021 30.1642 27.1021 34.5M42.8034 34.5L44.4424 32.5719C46.6633 29.9589 50.9267 31.7722 50.5857 35.1843C50.217 38.8712 55.0839 40.5238 57.0364 37.3747L57.1962 37.1169M29.719 20.1072C29.719 20.8298 29.1332 21.4156 28.4106 21.4156C27.6879 21.4156 27.1021 20.8298 27.1021 20.1072C27.1021 19.3845 27.6879 18.7987 28.4106 18.7987C29.1332 18.7987 29.719 19.3845 29.719 20.1072ZM48.037 25.3409C48.037 26.0636 47.4512 26.6494 46.7285 26.6494C46.0059 26.6494 45.4201 26.0636 45.4201 25.3409C45.4201 24.6183 46.0059 24.0325 46.7285 24.0325C47.4512 24.0325 48.037 24.6183 48.037 25.3409ZM40.1863 17.4903C40.1863 18.2129 39.6005 18.7987 38.8779 18.7987C38.1553 18.7987 37.5695 18.2129 37.5695 17.4903C37.5695 16.7676 38.1553 16.1818 38.8779 16.1818C39.6005 16.1818 40.1863 16.7676 40.1863 17.4903Z"
                                stroke="white"
                                stroke-width="4.53949"
                            />
                        </svg>

                        <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div
                                id="lemakBar"
                                class="bg-red-500 h-full rounded-full"
                                style="width: 0%"
                            ></div>
                        </div>

                        <h5
                            id="lemakPercent"
                            class="font-semibold text-lg text-red-500"
                        >
                            0%
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full p-8 fixed z-[999] bottom-0">
        <img src="{{ asset('assets/poster.png') }}" alt="" />
    </div>
</section>
<script>
    // Data Gizi untuk masing-masing makanan
    const giziData = {
        Oatmeal: {
            takaran: "100 gram",
            protein: 17,
            karbo: 67,
            lemak: 16,
            kalori: 379,
        },
        "Telur Rebus": {
            takaran: "1 butir",
            protein: 33,
            karbo: 3,
            lemak: 64,
            kalori: 77,
        },
        Beri: {
            takaran: "100 gram",
            protein: 7,
            karbo: 85,
            lemak: 7,
            kalori: 33,
        },
        "Nasi Merah": {
            takaran: "100 gram",
            protein: 5,
            karbo: 10,
            lemak: 1,
            kalori: 149,
        },
        "Ayam Panggang": {
            takaran: "144 gram",
            protein: 47,
            karbo: 3,
            lemak: 53,
            kalori: 237,
        },
        Bayam: {
            takaran: "100 gram",
            protein: 3,
            karbo: 4,
            lemak: 0.5,
            kalori: 23,
        },
    };

    // Fungsi untuk membuka modal dan mengupdate informasi gizi
    function openModal(makanan) {
        const modal = document.getElementById("myModal");
        const title = document.getElementById("modalTitle");
        const proteinBar = document.getElementById("proteinBar");
        const karboBar = document.getElementById("karboBar");
        const lemakBar = document.getElementById("lemakBar");
        const proteinPercent = document.getElementById("proteinPercent");
        const karboPercent = document.getElementById("karboPercent");
        const lemakPercent = document.getElementById("lemakPercent");
        const perTakaran = document.getElementById("takaran");
        const beratKalori = document.getElementById("kalori");

        // Ambil data gizi
        const data = giziData[makanan];

        // Update modal dengan data makanan yang dipilih
        title.innerText = makanan;
        proteinBar.style.width = data.protein + "%";
        karboBar.style.width = data.karbo + "%";
        lemakBar.style.width = data.lemak + "%";

        proteinPercent.innerText = data.protein + "%";
        karboPercent.innerText = data.karbo + "%";
        lemakPercent.innerText = data.lemak + "%";

        // perTakaran.innerText = `Nilai Nutrisi per ${data.takaran}`;
        // beratKalori.innerText = `${data.kalori} kkal`;
        perTakaran.innerText = "Nilai Nutrisi per " + data.takaran;
        beratKalori.innerText = data.kalori + " kkal";

        modal.classList.remove("hidden");
    }

    // Fungsi untuk menutup modal (jika perlu)
    function closeModal() {
        document.getElementById("myModal").classList.add("hidden");
    }
    // Menutup modal jika klik di luar konten modal
    window.onclick = function (event) {
        const modal = document.getElementById("myModal");
        if (event.target === modal) {
            closeModal();
        }
    };
</script>
@endsection
