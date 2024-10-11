@extends('layout.app')
@section('content')
<section
    class="h-[100vh] w-[350px] m-auto overflow-hidden bg-white scale-90 bg-cover bg-center rounded-3xl flex flex-col items-center">
    <div class="rounded-3xl h-[38%] w-full bg-[#FF76CE] p-6 flex flex-col justify-between items-center">
        <div class="flex flex-col gap-3">
            <h1 class="text-xl font-bold text-white text-center mt-4">Grafik Gula Darah
            </h1>
        </div>

        <div class="w-[220px] p-5">
            <!-- GRAFIK ISI DIDIEU -->
        </div>

        <a href="#"
            class="px-5 py-2 rounded-full font-bold w-full text-center text-white flex flex-row justify-center items-center gap-2">Continue
            <svg class="scale-75" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L9.34315 0.928932C8.95262 0.538408 8.31946 0.538408 7.92893 0.928932C7.53841 1.31946 7.53841 1.95262 7.92893 2.34315L13.5858 8L7.92893 13.6569C7.53841 14.0474 7.53841 14.6805 7.92893 15.0711C8.31946 15.4616 8.95262 15.4616 9.34315 15.0711L15.7071 8.70711ZM0 9H15V7H0V9Z"
                    fill="white" />
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-3 gap-x-8 gap-y-4 mt-5">
        <!-- Pengingat Obat -->
        <div class="flex flex-col gap-2 items-center">
            <a href="{{route('pengingatObat')}}"
                class="w-[75px] h-[75px] bg-[#FF76CE] rounded-xl flex justify-center items-center">
                <svg width="35" height="33" viewBox="0 0 35 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_37_15)">
                        <path
                            d="M18.5935 11.3438C18.5935 11.0702 18.4783 10.8079 18.2732 10.6145C18.0681 10.4211 17.7899 10.3125 17.4998 10.3125C17.2097 10.3125 16.9315 10.4211 16.7264 10.6145C16.5213 10.8079 16.406 11.0702 16.406 11.3438V18.2779L13.2801 23.1866C13.1307 23.4213 13.0863 23.7023 13.1567 23.9678C13.227 24.2334 13.4064 24.4617 13.6553 24.6025C13.9041 24.7434 14.2022 24.7853 14.4838 24.7189C14.7654 24.6526 15.0076 24.4835 15.157 24.2488L18.4382 19.0926C18.5399 18.9324 18.5936 18.7492 18.5935 18.5625V11.3438Z"
                            fill="white" />
                        <path
                            d="M14.2188 0C13.9287 0 13.6505 0.108649 13.4454 0.302046C13.2402 0.495443 13.125 0.757745 13.125 1.03125C13.125 1.30475 13.2402 1.56706 13.4454 1.76045C13.6505 1.95385 13.9287 2.0625 14.2188 2.0625H15.3125V4.26937C12.3337 4.67514 9.54778 5.89945 7.3027 7.78938C5.05762 9.67931 3.45292 12.1511 2.68908 14.8959C1.92523 17.6407 2.0361 20.5368 3.00782 23.2226C3.97955 25.9083 5.76906 28.2646 8.15281 29.997L6.83594 31.2386C6.63056 31.432 6.51507 31.6944 6.51486 31.968C6.51466 32.2417 6.62976 32.5042 6.83484 32.6978C7.03993 32.8915 7.3182 33.0004 7.60845 33.0006C7.89869 33.0008 8.17712 32.8922 8.3825 32.6989L10.0144 31.1602C12.3003 32.37 14.8785 33.0037 17.5 33C20.1215 33.0037 22.6997 32.37 24.9856 31.1602L26.6175 32.6989C26.8229 32.8922 27.1013 33.0008 27.3916 33.0006C27.6818 33.0004 27.9601 32.8915 28.1652 32.6978C28.3702 32.5042 28.4853 32.2417 28.4851 31.968C28.4849 31.6944 28.3694 31.432 28.1641 31.2386L26.8494 29.997C29.2332 28.2645 31.0227 25.908 31.9943 23.2221C32.9659 20.5362 33.0766 17.6399 32.3125 14.8951C31.5484 12.1502 29.9434 9.67849 27.698 7.78869C25.4526 5.89889 22.6664 4.67481 19.6875 4.26937V2.0625H20.7812C21.0713 2.0625 21.3495 1.95385 21.5546 1.76045C21.7598 1.56706 21.875 1.30475 21.875 1.03125C21.875 0.757745 21.7598 0.495443 21.5546 0.302046C21.3495 0.108649 21.0713 0 20.7812 0L14.2188 0ZM16.4894 6.22462C17.1621 6.17564 17.8379 6.17564 18.5106 6.22462C21.894 6.47099 25.0446 7.94329 27.3015 10.3326C29.5583 12.7219 30.746 15.8425 30.6153 19.0397C30.4845 22.2368 29.0455 25.2619 26.6002 27.4803C24.1549 29.6987 20.8934 30.9379 17.5 30.9379C14.1066 30.9379 10.8451 29.6987 8.39977 27.4803C5.95447 25.2619 4.51549 22.2368 4.38475 19.0397C4.254 15.8425 5.44166 12.7219 7.69853 10.3326C9.95539 7.94329 13.106 6.47099 16.4894 6.22462ZM5.54066e-09 7.21875C5.54066e-09 8.77181 0.728437 10.1661 1.88125 11.1107C3.57007 7.97601 6.2719 5.42856 9.59656 3.83625C8.86567 3.04328 7.89532 2.47973 6.81539 2.22104C5.73546 1.96234 4.59749 2.02085 3.55379 2.38872C2.5101 2.75659 1.61048 3.41627 0.975371 4.27947C0.340257 5.14266 -5.01382e-05 6.16818 5.54066e-09 7.21875ZM29.5312 2.0625C27.8841 2.0625 26.4053 2.74931 25.4034 3.83625C28.7281 5.42856 31.4299 7.97601 33.1188 11.1107C33.9598 10.4216 34.5575 9.50666 34.8319 8.48844C35.1062 7.47022 35.0442 6.39727 34.654 5.41322C34.2638 4.42916 33.5642 3.58096 32.6487 2.98213C31.7332 2.38331 30.6455 2.06245 29.5312 2.0625Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_37_15">
                            <rect width="35" height="33" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <p class="text-[0.7rem] font-bold text-center">Pengingat <br> Obat</p>
        </div>

        <!-- Tanya Dokter -->
        <div class="flex flex-col gap-2 items-center">
            <a class="w-[75px] h-[75px] bg-[#FF76CE] rounded-xl flex justify-center items-center">
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.1013 8.01778C25.1013 10.9741 24.3309 14.8298 23.1457 14.2447C22.6611 15.7537 21.6436 17.0563 20.2661 17.9313C18.8885 18.8063 17.2358 19.1998 15.5886 19.0448C13.9414 18.8899 12.4012 18.1961 11.2295 17.0814C10.0578 15.9666 9.3269 14.4995 9.16085 12.9292C7.98462 10.9672 6.44199 7.03549 10.4078 3.97074C10.4795 3.94853 10.5225 3.76403 10.587 3.4924C10.8325 2.46484 11.3762 0.1808 14.8064 0.61728C17.4518 0.952967 25.1013 2.25472 25.1013 8.01778ZM21.6918 9.88243C21.6918 9.88243 21.2868 11.0116 21.6667 12.2698C21.6617 13.6114 21.1053 14.8976 20.1169 15.8523C19.1284 16.807 17.7868 17.3541 16.38 17.3762C14.9732 17.3982 13.6134 16.8934 12.5926 15.9701C11.5718 15.0469 10.9714 13.7788 10.9203 12.4381C11.0502 11.9683 11.0502 11.1731 11.0493 10.289C11.0484 8.69428 11.0466 6.81255 11.8125 6.04551C17.1777 9.45278 21.6918 9.88243 21.6918 9.88243Z"
                        fill="white" />
                    <path
                        d="M6.43734 26.9718C6.43734 26.0476 6.95065 25.2378 7.72107 24.7868C7.69179 24.6805 7.66432 24.5737 7.63865 24.4665C7.50324 23.8828 7.39711 23.2934 7.32063 22.7001C7.24422 22.1315 7.19788 21.5596 7.18178 20.9866C3.40046 22.402 0.166504 24.8688 0.166504 27.4586V32.0968H32.4165V27.4586C32.4165 24.9781 29.4513 22.6112 25.8787 21.172V21.1959C25.8948 21.7169 25.8644 22.3148 25.8053 22.8897C25.7515 23.4227 25.6718 23.954 25.5759 24.4093H26.1457C26.312 24.4093 26.475 24.4536 26.6165 24.537C26.7579 24.6204 26.8722 24.7398 26.9465 24.8816L27.8424 26.59C27.9051 26.7087 27.9373 26.8394 27.9373 26.9718V28.6801C27.9373 28.9066 27.843 29.1239 27.675 29.2841C27.507 29.4443 27.2791 29.5343 27.0415 29.5343H25.2498V27.8259H26.1457V27.1733L25.592 26.1176H23.116L22.5623 27.1733V27.8259H23.4582V29.5343H21.6665C21.4289 29.5343 21.2011 29.4443 21.0331 29.2841C20.8651 29.1239 20.7707 28.9066 20.7707 28.6801V26.9718C20.7707 26.8394 20.8029 26.7087 20.8656 26.59L21.7615 24.8816C21.8358 24.7398 21.9501 24.6204 22.0916 24.537C22.233 24.4536 22.396 24.4093 22.5623 24.4093H23.7404C23.7601 24.3358 23.7798 24.2544 23.7995 24.165C23.8891 23.7627 23.9688 23.2527 24.0225 22.7257C24.0763 22.1978 24.1014 21.6742 24.0879 21.2437C24.085 21.0654 24.0703 20.8873 24.044 20.7107C24.0243 20.5894 24.0046 20.5339 24.001 20.5219C23.9998 20.5191 23.9998 20.5185 24.001 20.5202L24.0037 20.5194C23.5283 20.3788 23.0475 20.2554 22.5623 20.1495C22.1117 20.0513 21.6459 20.6424 21.4425 21.0122H10.9165L10.8395 20.8687C10.6495 20.5083 10.4157 20.0633 10.0207 20.1495C9.67548 20.2241 9.33058 20.3087 8.98598 20.4032C8.97528 20.553 8.9705 20.7032 8.97165 20.8534C8.97523 21.3257 9.02271 21.904 9.09886 22.4882C9.175 23.0708 9.27802 23.6379 9.38552 24.0855C9.41658 24.2148 9.44644 24.3298 9.47511 24.4306C9.98727 24.4948 10.4692 24.6984 10.8631 25.017C11.2571 25.3355 11.5464 25.7556 11.6965 26.2269C11.8465 26.6982 11.8509 27.2008 11.7092 27.6744C11.5674 28.148 11.2855 28.5727 10.8972 28.8975C10.5089 29.2223 10.0307 29.4336 9.5197 29.506C9.00874 29.5783 8.48673 29.5087 8.01617 29.3056C7.5456 29.1024 7.14643 28.7742 6.86642 28.3603C6.58641 27.9464 6.43744 27.4643 6.43734 26.9718Z"
                        fill="white" />
                    <path
                        d="M10.0207 26.9717C10.0207 27.462 9.6068 27.8387 9.12484 27.8387C8.64288 27.8387 8.229 27.4629 8.229 26.9717C8.229 26.4814 8.64288 26.1047 9.12484 26.1047C9.6068 26.1047 10.0207 26.4806 10.0207 26.9717Z"
                        fill="white" />
                </svg>
            </a>
            <p class="text-[0.7rem] font-bold text-center">Tanya <br> Dokter</p>
        </div>

        <!-- Kontrol Pola Makan -->
        <div class="flex flex-col gap-2 items-center">
            <a class="w-[75px] h-[75px] bg-[#FF76CE] rounded-xl flex justify-center items-center">
                <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M46.8844 9.85503C45.7157 9.27078 44.3921 8.97037 43.1236 9.10009C43.5213 8.0762 43.6381 6.82359 42.8552 6.11962C41.7249 5.10377 40.2763 5.55634 39.0351 6.16156C38.5789 5.29714 38.0839 4.39029 37.9152 3.4554C37.8106 2.87481 37.02 2.87628 36.7462 3.30251C36.2656 4.05062 35.6128 4.60731 34.9593 5.17863C34.1702 4.14425 32.9737 2.91554 31.6726 3.48856C31.5348 3.54928 31.4131 3.62195 31.2988 3.69997C29.7418 1.4798 27.6189 1.58392 25.7026 3.59488C23.5565 0.48102 20.4278 -0.0644544 18.1708 3.24984C15.443 1.31837 12.4257 1.7824 13.0409 5.55927C11.44 5.63388 10.1584 7.20349 9.38202 8.48976C8.50005 7.5417 7.16428 6.49757 5.94654 6.90089C4.61882 7.34053 4.24281 8.64362 4.2255 9.91404C3.28037 9.81601 2.27013 9.81918 1.42522 9.46464C1.11408 9.33418 0.789527 9.65581 0.786844 9.95086C0.777091 11.013 0.810985 12.1208 1.50154 12.9791C1.87292 13.4407 2.53641 13.5726 3.17137 13.6482C3.00166 13.8204 2.85194 14.0133 2.73709 14.2352C2.17113 15.3293 2.58591 16.5829 3.21429 17.5477C3.6276 18.1822 4.6454 17.5963 4.23355 16.952C3.53909 15.866 3.36254 14.1896 5.03384 13.9955C5.65758 13.923 6.22574 14.1486 6.64392 14.6097C7.26987 15.2998 7.1438 16.3783 7.04358 17.2247C5.81023 17.28 4.63784 17.5004 3.58932 17.9935C3.54128 18.0159 3.52519 18.054 3.50324 18.0891C3.38132 17.8957 3.25452 17.7097 3.13577 17.5119C2.86194 17.0552 2.23697 17.3736 2.32012 17.8557C3.94289 27.2507 15.2513 30.9871 23.4958 31.0003C32.8206 31.0154 42.7676 26.2132 45.9927 17.0142C46.3043 16.1254 45.3304 15.6565 44.6606 15.9803C44.4596 15.836 44.1873 15.7587 43.8464 15.806C43.4184 15.8655 42.9924 15.9323 42.566 15.9972C43.615 13.9555 44.8654 12.3015 46.8837 11.0206C47.2858 10.765 47.3582 10.0918 46.8844 9.85503ZM17.9026 4.53123C18.1862 4.79165 18.6295 4.74776 18.8338 4.41126C20.5517 1.58343 23.5658 2.26619 25.0981 4.90382C25.3481 5.33371 25.8772 5.25056 26.143 4.90382C28.2624 3.51636 29.7292 3.41687 30.5611 4.56927C30.0669 5.61291 30.2739 7.05353 30.5494 8.12131C30.5916 8.28396 30.6887 8.37174 30.8008 8.41075C30.5297 8.64899 30.2654 8.91819 30.0225 9.25128C29.6662 8.64143 29.3119 8.01939 29.131 7.35492C29.021 6.95038 28.4 6.70825 28.1066 7.08425C27.2488 8.18423 26.2054 8.94525 25.4824 10.0872C24.5695 9.27834 23.2776 8.30127 22.1457 8.80553C20.6531 9.47073 21.0638 11.202 21.45 12.46C21.5609 12.8216 22.064 12.6668 22.0052 12.3069C21.4663 11.0152 21.9708 10.2296 23.5192 9.94988C24.1642 10.313 24.7402 10.7619 25.2469 11.2969C25.4802 11.5149 25.9208 11.5066 26.0759 11.1901C26.577 10.1686 27.5056 9.45293 28.3176 8.6585C28.6553 9.37612 29.101 10.0525 29.4768 10.7424C29.6872 11.1291 30.3151 11.144 30.5216 10.7424C31.1208 9.57656 31.8913 8.5139 33.3205 8.44026C35.2219 8.34199 35.042 10.8272 34.8086 12.0284C30.8323 10.4573 24.5212 12.9782 26.1552 18.5324C25.9784 18.5482 25.8006 18.556 25.6236 18.5702C24.4573 16.2778 22.8982 13.2515 20.7782 12.7638C21.1311 11.4917 20.9413 10.0082 20.2525 8.94038C19.3456 7.53439 17.6217 7.68069 16.2369 8.19471C15.768 6.95355 15.0845 5.87236 13.7526 5.60657C13.7926 3.28666 16.3169 3.07428 17.9026 4.53123ZM13.4096 17.8886C11.69 17.5763 9.9058 17.2727 8.19842 17.2198C8.33643 16.2903 8.21012 15.2881 7.81436 14.4746C7.82095 14.4666 7.8229 14.4544 7.82924 14.4461C9.37251 13.7168 10.9465 13.3354 12.6471 13.7514C13.6415 13.9947 14.3581 14.5841 14.9945 15.2815C14.1964 15.7704 13.5927 16.5353 13.3871 17.5829C13.3649 17.698 13.3803 17.7974 13.4096 17.8886ZM7.9714 13.916C8.50712 11.8675 10.8241 11.8133 12.6219 12.2418C14.2667 12.6336 15.5481 13.5105 16.6217 14.6943C16.4127 14.728 16.2084 14.777 16.0082 14.8365C14.0994 12.4163 10.6639 12.5161 7.9714 13.916ZM14.4978 17.8894C14.7222 17.0983 15.1586 16.5682 15.8126 16.2532C15.8999 16.3612 15.9872 16.4692 16.0752 16.5765C16.4064 16.9796 16.9216 16.4666 16.7421 16.0623C16.7307 16.0367 16.7161 16.015 16.7043 15.9896C17.3776 15.8877 18.034 16.0201 18.6904 16.1542C19.2825 16.9896 19.8202 17.865 20.3825 18.7228C19.4817 18.6982 18.578 18.655 17.668 18.5672C16.6563 18.4695 15.5529 18.2778 14.4071 18.0696C14.443 18.0171 14.4771 17.9623 14.4978 17.8894ZM19.7438 16.3183C19.7565 16.3193 19.769 16.3217 19.7816 16.3227C20.331 16.3578 20.4807 15.5924 20.0506 15.3303C19.6619 15.0932 19.2349 14.9213 18.7933 14.8026C18.6914 14.6629 18.6024 14.5163 18.4917 14.3815C18.7865 14.1425 19.0682 13.9838 19.3442 13.8616C19.3196 14.3278 19.9328 14.3695 20.1608 14.0654C20.2547 13.9406 20.3295 13.8019 20.4066 13.6648C21.2181 13.7382 21.9579 14.3217 22.6573 15.3346C23.3751 16.3741 23.9016 17.528 24.4758 18.6526C23.302 18.7231 22.1215 18.7489 20.9352 18.7316C20.5356 17.9228 20.164 17.1062 19.7438 16.3183ZM4.94069 12.8299C4.73196 12.8499 4.52762 12.8967 4.32865 12.9582C4.32596 12.9574 4.3245 12.9555 4.32182 12.9547C3.79195 12.8009 3.25038 12.6904 2.72441 12.5236C1.92559 12.2703 1.83122 11.3686 1.81049 10.577C2.72782 10.7026 3.65199 10.5663 4.57517 10.8816C4.88582 10.9877 5.12503 10.7146 5.15795 10.4378C5.27158 9.47707 5.37668 7.70117 6.77511 7.96891C7.76828 8.15911 8.54613 9.13472 9.21231 9.81577C9.66171 10.2752 10.2603 9.63655 9.93359 9.15008C11.5361 6.73946 14.521 5.2235 15.3215 9.13423C15.3805 9.42294 15.7612 9.65971 16.0455 9.54511C17.4998 8.95867 19.0842 8.62875 19.6495 10.5068C19.8765 11.2608 19.6987 12.0238 19.5305 12.7802C18.9228 12.9299 18.2757 13.2895 17.5849 13.9235C14.9355 10.9072 7.71195 9.03572 7.35472 13.7699C6.80535 13.1225 6.00408 12.728 4.94069 12.8299ZM43.5886 17.8313C39.922 25.386 31.6867 28.8471 23.4968 29.062C14.8453 29.2892 8.2723 25.4194 3.7483 18.4724C3.76488 18.4719 3.77805 18.4836 3.79536 18.4797C5.7461 18.0279 8.71829 18.9957 10.6207 19.2946C13.2552 19.7082 15.8858 20.1408 18.5349 20.4507C27.0303 21.4448 35.2551 19.0049 43.5886 17.8313ZM30.8074 14.5731C32.5665 14.3749 33.872 15.8694 34.3795 17.3832C32.5224 17.7031 30.6662 18.0023 28.8038 18.239C28.8062 18.2108 28.8091 18.1827 28.8038 18.1503C28.5273 16.5841 28.9818 14.7787 30.8074 14.5731ZM41.0327 16.0984C41.0151 16.1474 41.0188 16.1922 41.0139 16.2388C39.1224 16.547 37.2409 16.8852 35.3626 17.2142C35.3585 17.181 35.3631 17.151 35.3514 17.1157C34.6845 15.0459 32.8359 13.1332 30.4726 13.596C28.1456 14.0518 27.5221 16.2649 28.2761 18.2951C28.2766 18.2968 28.2781 18.2978 28.2785 18.2995C27.8265 18.3539 27.3749 18.4112 26.9218 18.457C26.2322 15.5175 27.9359 13.3739 30.8223 12.758C33.7618 12.1306 35.9003 13.7458 36.7915 16.4156C36.9734 16.9601 37.8442 16.8916 37.8235 16.2759C37.7669 14.5882 37.0081 13.3817 35.9027 12.6097C35.912 12.5858 35.9281 12.5705 35.9347 12.5439C37.0049 8.45952 33.9413 6.4132 31.3926 7.97038C31.3931 7.94233 31.4002 7.91697 31.3961 7.88723C31.2822 7.12449 31.2017 6.36565 31.3656 5.63291C31.7445 5.6746 32.1561 5.26446 31.9379 4.80482C31.9059 4.73728 31.8711 4.68022 31.8384 4.6156C32.6821 3.83579 34.1937 6.12596 34.3509 6.35858C34.5767 6.69264 34.9839 6.73995 35.2868 6.47928C35.8869 5.96307 36.4811 5.48831 37.0173 4.94527C37.3453 5.78141 37.8181 6.5934 38.1988 7.35809C38.3612 7.68435 38.7896 7.74653 39.0856 7.59071C39.652 7.2925 41.586 6.13254 42.0256 7.31103C42.247 7.90478 41.9607 8.708 41.8049 9.41416C41.3585 9.58802 40.9261 9.81748 40.527 10.1403C38.6691 11.6426 37.7947 14.033 38.5157 16.3432C38.5977 16.606 39.0278 16.5699 39.0105 16.2764C38.7923 12.5897 41.6338 9.58778 45.1287 10.6002C43.2672 12.0108 41.8366 13.8523 41.0327 16.0984Z"
                        fill="white" stroke="white" stroke-width="0.3" />
                </svg>
            </a>
            <p class="text-[0.7rem] font-bold text-center">Kontrol Pola <br> Makan</p>
        </div>

        <!-- Kontrol Aktivitas Fisik -->
        <div class="flex flex-col gap-2 items-center">
            <a href="#" class="w-[75px] h-[75px] bg-[#FF76CE] rounded-xl flex justify-center items-center">
                <svg class="scale-110" width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.9998 5.08905C16.4051 5.08905 17.5444 3.94983 17.5444 2.54452C17.5444 1.13922 16.4051 0 14.9998 0C13.5945 0 12.4553 1.13922 12.4553 2.54452C12.4553 3.94983 13.5945 5.08905 14.9998 5.08905Z"
                        fill="white" />
                    <path
                        d="M28.9201 7.5353C28.6879 7.23498 28.3383 7.08029 27.9859 7.08328L27.8074 6.85239C28.0097 6.55669 28.0693 6.17045 27.9326 5.81014C27.7129 5.23099 27.0695 4.93763 26.4892 5.14703L25.9999 4.51401C26.0916 4.17376 26.03 3.79638 25.7978 3.49599C25.4036 2.98601 24.6707 2.89215 24.1607 3.2864C23.6507 3.68058 23.5568 4.41358 23.9511 4.9235C24.1832 5.22382 24.5329 5.37851 24.8853 5.37551L25.1119 5.66868L22.7279 6.5733L18.2515 6.22119V6.21207C16.1056 6.21207 13.9289 6.21207 11.7484 6.21207V6.22119L7.27206 6.5733L4.90417 5.67486L5.11468 5.40254C5.46704 5.40554 5.81674 5.25085 6.04887 4.95053C6.44305 4.44054 6.3492 3.70761 5.83928 3.31336C5.32929 2.91918 4.59636 3.01304 4.20217 3.52302C3.96998 3.82335 3.90843 4.20072 4.00013 4.54097L3.52747 5.15244C2.94278 4.93138 2.28924 5.22552 2.0674 5.81014C1.92841 6.17632 1.99178 6.56959 2.20209 6.86704L2.01412 7.11018C1.66169 7.10719 1.31206 7.26188 1.07993 7.5622C0.685748 8.07219 0.779603 8.80512 1.28952 9.19937C1.79951 9.59355 2.53244 9.49969 2.92662 8.98971C3.15876 8.68938 3.22037 8.31207 3.12873 7.97182L3.45569 7.54885L6.70567 8.78219C6.86172 8.84146 7.02944 8.86563 7.1965 8.85241L11.7485 8.49438V16.2458L8.93983 28.1891C8.75362 28.9812 9.24465 29.7743 10.0367 29.9605C10.8285 30.1468 11.6219 29.656 11.8081 28.8637L14.6568 16.7502H15.3432L18.1918 28.8637C18.3782 29.6562 19.1718 30.1468 19.9633 29.9605C20.7554 29.7743 21.2465 28.9812 21.0602 28.1891L18.2515 16.2458V8.49438L22.8035 8.85241C22.9706 8.86563 23.1383 8.8414 23.2943 8.78219L26.5605 7.54273L26.8713 7.94479C26.7796 8.2851 26.8412 8.66242 27.0733 8.96281C27.4675 9.47279 28.2005 9.56665 28.7104 9.1724C29.2204 8.77822 29.3143 8.04522 28.9201 7.5353Z"
                        fill="white" />
                </svg>
            </a>
            <p class="text-[0.7rem] font-bold text-center">Kontrol <br> Aktivitas Fisik</p>
        </div>

        <!-- Catatan Kesehatan -->
        <div class="flex flex-col gap-2 items-center">
            <a href="{{route('kesehatan')}}"
                class="w-[75px] h-[75px] bg-[#FF76CE] rounded-xl flex justify-center items-center">
                <svg class="scale-110" width="26" height="30" viewBox="0 0 26 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24.2669 2.35751H19.1058V1.27386C19.1058 0.575923 18.5303 0.000427246 17.8324 0.000427246H8.22036C7.52242 0.000427246 6.94692 0.575923 6.94692 1.27386V2.35751H1.72461C1.38788 2.33302 0.506273 2.63301 0.451172 3.63095V28.7262C0.451172 29.4242 1.02667 29.9997 1.72461 29.9997H24.3342C25.1485 30.0303 25.5771 29.1364 25.5464 28.7262V3.63095C25.5771 3.33708 25.2771 2.39424 24.2669 2.35751ZM9.4938 2.5473H16.6263V4.71459H9.4938V2.5473ZM23.0608 27.514H2.9307V4.90438H6.9408V5.92068C7.02039 6.97372 7.89588 7.19412 8.21424 7.19412H17.8936C18.5303 7.19412 19.1058 6.61863 19.1058 5.92068V4.90438H23.0547V27.514H23.0608Z"
                        fill="white" />
                    <path
                        d="M8.41016 20.1244H17.5813C18.2793 20.1244 18.8548 19.5489 18.8548 18.851C18.8548 18.153 18.2793 17.5775 17.5813 17.5775H8.41016C7.71221 17.5775 7.13672 18.153 7.13672 18.851C7.13672 19.5489 7.71221 20.1244 8.41016 20.1244Z"
                        fill="white" />
                    <path
                        d="M17.7713 22.4203H8.6001C7.90216 22.4203 7.32666 22.9958 7.32666 23.6937C7.32666 24.3916 7.90216 24.9671 8.6001 24.9671H17.7713C18.408 24.9671 18.9835 24.3916 19.0447 23.6937C19.0447 22.9958 18.4754 22.4203 17.7713 22.4203Z"
                        fill="white" />
                    <path
                        d="M11.0854 13.4389H11.7834V14.1429C11.7834 14.8409 12.3589 15.4164 13.0568 15.4164C13.7548 15.4164 14.3303 14.8409 14.3303 14.1429V13.445H15.0282C15.7261 13.445 16.3016 12.8695 16.3016 12.1715C16.3016 11.4736 15.7261 10.8981 15.0282 10.8981H14.3303V10.2002C14.3303 9.50222 13.7548 8.92673 13.0568 8.92673C12.3589 8.92673 11.7834 9.50222 11.7834 10.2002V10.8981H11.0854C10.3875 10.8981 9.81201 11.4736 9.81201 12.1715C9.81201 12.8634 10.3814 13.4389 11.0854 13.4389Z"
                        fill="white" />
                </svg>
            </a>
            <p class="text-[0.7rem] font-bold text-center">Catatan <br> Kesehatan</p>
        </div>

        <!-- Dukungan Sosial -->
        <div class="flex flex-col gap-2 items-center">
            <a href="{{route('dukungan')}}"
                class="w-[75px] h-[75px] bg-[#FF76CE] rounded-xl flex justify-center items-center">
                <svg class="scale-110" width="36" height="32" viewBox="0 0 36 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18 18.5C21.3137 18.5 24 15.8137 24 12.5C24 9.18629 21.3137 6.5 18 6.5C14.6863 6.5 12 9.18629 12 12.5C12 15.8137 14.6863 18.5 18 18.5ZM18 18.5C13.0294 18.5 9 22.5294 9 27.5V32M18 18.5C22.9706 18.5 27 22.5294 27 27.5V32M19.5 6.5C20.1056 4.00349 22.5227 2 25.5 2C28.7583 2 31.4708 4.68629 31.5 8C31.4708 11.3137 28.7583 14 25.5 14M25.5 14H24M25.5 14C30.4313 14 34.5 18.0294 34.5 23V26M16.5 6.5C15.8944 4.00349 13.4773 2 10.5 2C7.24168 2 4.52922 4.68629 4.5 8C4.52922 11.3137 7.24168 14 10.5 14M10.5 14H12M10.5 14C5.56868 14 1.5 18.0294 1.5 23V26"
                        stroke="white" stroke-width="3" />
                </svg>
            </a>
            <p class="text-[0.7rem] font-bold text-center">Dukungan <br> Sosial</p>
        </div>

    </div>

    <div class="max-w-[18rem] mx-auto overflow-hidden mt-4">
        <!-- Slider Container -->
        <div class="relative w-full flex slider gap-3">
            <!-- Slide 1 -->
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('assets/img1.png') }}" class="w-full h-full object-cover" alt="Image 1">
            </div>
            <!-- Slide 2 -->
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('assets/img2.png') }}" class="w-full h-full object-cover" alt="Image 2">
            </div>
            <!-- Slide 3 -->
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('assets/img3.png') }}" class="w-full h-full object-cover" alt="Image 3">
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 h-16 w-full p-4 px-7 grid grid-cols-2">
        <a href="#"
            class="flex flex-row justify-center items-center font-semibold text-xl gap-2 rounded-full text-[#FF76CE]">
            <svg class="scale-75" width="37" height="30" viewBox="0 0 37 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.6363 4.6392C18.5233 4.54383 18.3729 4.4906 18.2166 4.4906C18.0602 4.4906 17.9099 4.54383 17.7969 4.6392L3.82499 16.4162C3.76565 16.4663 3.71844 16.5265 3.68622 16.5931C3.654 16.6598 3.63744 16.7315 3.63753 16.8039L3.63525 27.8571C3.63525 28.4254 3.89112 28.9704 4.34657 29.3723C4.80201 29.7742 5.41973 29.9999 6.06383 29.9999H13.3571C13.6792 29.9999 13.988 29.8871 14.2158 29.6861C14.4435 29.4852 14.5714 29.2127 14.5714 28.9285V19.8214C14.5714 19.6793 14.6354 19.543 14.7493 19.4426C14.8631 19.3421 15.0175 19.2856 15.1786 19.2856H21.25C21.411 19.2856 21.5655 19.3421 21.6793 19.4426C21.7932 19.543 21.8572 19.6793 21.8572 19.8214V28.9285C21.8572 29.2127 21.9851 29.4852 22.2128 29.6861C22.4405 29.8871 22.7494 29.9999 23.0714 29.9999H30.3617C31.0058 29.9999 31.6235 29.7742 32.079 29.3723C32.5344 28.9704 32.7903 28.4254 32.7903 27.8571V16.8039C32.7904 16.7315 32.7738 16.6598 32.7416 16.5931C32.7094 16.5265 32.6622 16.4663 32.6028 16.4162L18.6363 4.6392Z"
                    fill="#FF76CE" />
                <path
                    d="M36.0424 14.2065L30.3656 9.41452V2.14286C30.3656 1.8587 30.2376 1.58618 30.0099 1.38524C29.7822 1.18431 29.4733 1.07143 29.1513 1.07143H25.5084C25.1864 1.07143 24.8775 1.18431 24.6498 1.38524C24.4221 1.58618 24.2941 1.8587 24.2941 2.14286V4.28572L19.8984 0.577233C19.4871 0.210268 18.8754 0 18.2143 0C17.5556 0 16.9454 0.210268 16.5341 0.577903L0.391636 14.2052C-0.0804178 14.6069 -0.139614 15.2679 0.28994 15.7031C0.397807 15.813 0.529884 15.9024 0.678131 15.9658C0.826379 16.0292 0.987696 16.0653 1.15227 16.0719C1.31684 16.0786 1.48122 16.0556 1.6354 16.0044C1.78959 15.9532 1.93036 15.8748 2.04914 15.7741L17.7969 2.49643C17.9099 2.40106 18.0603 2.34783 18.2166 2.34783C18.373 2.34783 18.5233 2.40106 18.6363 2.49643L34.3856 15.7741C34.6176 15.9704 34.9283 16.0776 35.2497 16.072C35.5711 16.0665 35.8769 15.9488 36.1 15.7447C36.566 15.3188 36.5273 14.6156 36.0424 14.2065Z"
                    fill="#FF76CE" />
            </svg>
            Home
        </a>

        <a href="{{route('profile')}}"
            class="flex flex-row justify-center items-center font-semibold text-xl gap-2 rounded-full text-[#D5D5D5]">

            <svg width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.01562 22.65C7.34375 21.675 8.82812 20.9065 10.4687 20.3445C12.1094 19.7825 13.8281 19.501 15.625 19.5C17.4219 19.499 19.1406 19.7805 20.7812 20.3445C22.4219 20.9085 23.9062 21.677 25.2344 22.65C26.1458 21.625 26.8557 20.4625 27.3641 19.1625C27.8724 17.8625 28.126 16.475 28.125 15C28.125 11.675 26.9078 8.8435 24.4734 6.5055C22.0391 4.1675 19.0896 2.999 15.625 3C12.1604 3.001 9.21094 4.17 6.77656 6.507C4.34219 8.844 3.125 11.675 3.125 15C3.125 16.475 3.37917 17.8625 3.8875 19.1625C4.39583 20.4625 5.10521 21.625 6.01562 22.65ZM15.625 16.5C14.0885 16.5 12.7927 15.994 11.7375 14.982C10.6823 13.97 10.1552 12.726 10.1562 11.25C10.1573 9.774 10.6849 8.53 11.7391 7.518C12.7932 6.506 14.0885 6 15.625 6C17.1615 6 18.4573 6.5065 19.5125 7.5195C20.5677 8.5325 21.0948 9.776 21.0937 11.25C21.0927 12.724 20.5656 13.968 19.5125 14.982C18.4594 15.996 17.1635 16.502 15.625 16.5ZM15.625 30C13.4635 30 11.4323 29.606 9.53125 28.818C7.63021 28.03 5.97656 26.9615 4.57031 25.6125C3.16406 24.2635 2.05104 22.676 1.23125 20.85C0.41146 19.024 0.00104364 17.074 1.97785e-06 15C-0.00103969 12.926 0.409377 10.976 1.23125 9.15C2.05313 7.324 3.16615 5.7365 4.57031 4.3875C5.97448 3.0385 7.62813 1.97 9.53125 1.182C11.4344 0.394 13.4656 0 15.625 0C17.7844 0 19.8156 0.394 21.7187 1.182C23.6219 1.97 25.2755 3.0385 26.6797 4.3875C28.0838 5.7365 29.1974 7.324 30.0203 9.15C30.8432 10.976 31.2531 12.926 31.25 15C31.2469 17.074 30.8365 19.024 30.0187 20.85C29.201 22.676 28.088 24.2635 26.6797 25.6125C25.2714 26.9615 23.6177 28.0305 21.7187 28.8195C19.8198 29.6085 17.7885 30.002 15.625 30Z"
                    fill="#D5D5D5" />
            </svg>
            Profile
        </a>
    </div>
</section>

<style>
/* Custom animation for sliding */
@keyframes slide {
    0% {
        transform: translateX(0);
    }

    33% {
        transform: translateX(calc(-100% - 1rem));
    }

    66% {
        transform: translateX(calc(-200% - 2rem));
    }

    100% {
        transform: translateX(0);
    }
}

.slider {
    animation: slide 20s infinite;
}
</style>
@endsection
