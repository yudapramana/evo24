<nav class="navbar relative justify-center">
    {{-- <a href="{{ route('home') }}">
        <img src="{{ asset('img/logo.png') }}" class="h-8 mx-1">
    </a> --}}

    <div>
        <img class="w-24 h-24" src="http://koeliah.com/wp-content/uploads/2018/05/undip.png" alt="Pemilihan">
    </div>





    <div clas="flex-grow">

    </div>
    {{-- <a href="{{ route('home') }}" class="pb-2 pl-3"> --}}
    <div class="pb-2 pl-5" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bolder;">

        {{-- <span class="text-2xl gr-dark-orange text-black pl-3">@yield('title', config('app.name', ''))</span>
            --}}
        <span class="text-3xl gr-dark-orange text-black">PEMIRA DAN SUKSESI 2024</span> <br>
        <span class="text-xl gr-dark-orange text-black">FAKULTAS EKONOMIKA DAN BISNIS</span> <br>
        <span class="text-xl gr-dark-orange text-black">UNIVERSITAS DIPONEGOROO</span> <br>
    </div>
    {{--
    </a> --}}



    <div class="hidden lg:visible lg:flex">
        <img class="h-24" src="https://res.cloudinary.com/dezj1x6xp/image/upload/v1700062858/Proyek%20Pemira%20Undip%202023/Logo%20-%20logo/Logo_pemira_2023_pdbjdj.png" alt="Pemilihan">
    </div>

    <div class="hidden lg:visible lg:flex">
        <img class="h-24" src="https://res.cloudinary.com/dezj1x6xp/image/upload/v1700062856/Proyek%20Pemira%20Undip%202023/Logo%20-%20logo/logo_suksesi_MSA_Manajemen_dan_Bisnis_Digital_tduimn.png" alt="Manajemen">
    </div>
    <div class="hidden lg:visible lg:flex">
        <img class="h-24" src="https://res.cloudinary.com/dezj1x6xp/image/upload/v1700062883/Proyek%20Pemira%20Undip%202023/Logo%20-%20logo/Logo_Suksesi_DESC_Ekonomi_n34piu.png" alt="Ekonomi">
    </div>
    <div class="hidden lg:visible lg:flex">
        <img class="w-24 h-24" src="https://res.cloudinary.com/dezj1x6xp/image/upload/v1700062857/Proyek%20Pemira%20Undip%202023/Logo%20-%20logo/Logo_Sukseesi_KMA_Akuntansi_agh11h.png" alt="Akuntansi">
    </div>
    <div class="hidden lg:visible lg:flex">
        <img class="w-24 h-24" src="https://res.cloudinary.com/dezj1x6xp/image/upload/v1700062856/Proyek%20Pemira%20Undip%202023/Logo%20-%20logo/Logo_Suksesi_HMEI_Ekonomi_Islam_na0ohz.jpg" alt="Ekonomi Islam">
    </div>

    <div class="hidden lg:visible lg:flex">
        <img class="w-24 h-24" src="https://res.cloudinary.com/dezj1x6xp/image/upload/v1700062877/Proyek%20Pemira%20Undip%202023/Logo%20-%20logo/logo_senator_pbfd43.png" alt="Senat">
    </div>

    <div class="block lg:hidden">
        <button id="nav-toggle" class="nav-toggle">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>

    <div class="flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center font-light">

            <li class="mt-2 sm:mt-2 md:mt-2 lg:mt-0 xl:mt-0">
                <a href="@if (request()->segment(1) == 'vote') {{ route('home') }} @else  {{ route('home.vote') }} @endif" class="link-button {{ url()->current() == route('home.vote') || url()->current() == route('home.vote.detail') ? 'active' : '' }}">
                    @if (request()->segment(1) == 'vote')
                        Home
                    @else
                        Vote
                    @endif
                </a>
            </li>

        </ul>
    </div>


</nav>

{{-- <li class="mt-2 sm:mt-2 md:mt-2 lg:mt-0 xl:mt-0">
    <a href="{{ route('home.vote') }}"
        class="link-button {{ url()->current() == route('home.vote') || url()->current() == route('home.vote.detail') ? 'active' : '' }}">
        Vote
    </a>
</li> --}}
