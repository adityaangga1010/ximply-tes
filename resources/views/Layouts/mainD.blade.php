<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body class=" bg-body font-DMSANS">
    {{-- Sidebar --}}
    <div class=" absolute top-0 left-0 bottom-0 z-10">
        <div class=" w-64 drop-shadow-4xl bg-putih min-h-screen fixed font-jakartasans">
            <div class=" flex flex-col pt-9">
                <div class=" flex items-center gap-2 pl-10">
                    <img class=" w-7 h-7" src="{{asset('img/logo.svg')}}">
                    <h1 class=" pl-[3px] text-hitam font-bold tracking-wider">Pers <span class=" text-kuning">Xim<span class=" text-utama">ply</span></span></h1>
                </div>
                <div class=" flex flex-col pt-14">
                    <h1 class=" text-hitam pl-10 font-bold">Main Menu</h1>
                    <div class=" flex flex-col pt-9 pl-6">
                        {{-- dashboard --}}
                        <a href="{{route('masyarakat.dashboard')}}" class="{{ Route::is('masyarakat.dashboard') ? 'bg-body border-r border-utama' : '' }} gap-3 mb-6 rounded-l-xl hover:border-r hover:border-r-utama flex group active:bg-body hover:bg-body pl-3 py-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" {{ Route::is('masyarakat.dashboard') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                            </svg>
                            <h1 class="{{ Route::is('masyarakat.dashboard') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Dashboard</h1>
                        </a>

                        {{-- petugas --}}
                        @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user())
                        <a href="{{route('routeM.index')}}" class="{{ Route::is('routeM.index') ? 'bg-body border-r border-utama' : '' }} gap-3 mb-6 rounded-l-xl hover:border-r hover:border-r-utama group hover:bg-body pl-3 py-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routeM.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                            </svg>
                            <h1 class="{{ Route::is('routeM.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">List User</h1>
                        </a>
                        <a href="{{route('routeB.index')}}" class="{{ Route::is('routeB.index') ? 'bg-body border-r border-utama' : '' }} gap-3 mb-6 rounded-l-xl hover:border-r hover:border-r-utama group hover:bg-body pl-3 py-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routeB.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <h1 class="{{ Route::is('routeB.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">List Buku</h1>
                        </a>
                        {{-- ini Dropdown --}}
                        <div class=" relative group">
                            <div class=" {{ Route::is('routeBR.index') ? 'bg-body border-r border-utama' : '' }}  {{ Route::is('routePB.index') ? 'bg-body border-r border-utama' : '' }} gap-3 rounded-l-xl cursor-pointer hover:border-r hover:border-r-utama group hover:bg-body pl-3 py-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" {{ Route::is('routeBR.index') ? 'text-utama' : '' }} {{ Route::is('routePB.index') ? 'text-utama' : '' }}  w-6 h-6 text-ketiga group-hover:text-utama">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                </svg>
                                <h1 class=" {{ Route::is('routeBR.index') ? 'text-utama' : '' }} {{ Route::is('routePB.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Peminjaman</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="{{ Route::is('routeBR.index') ? 'text-utama' : '' }} {{ Route::is('routePB.index') ? 'text-utama' : '' }} w-6 h-6 text-kedua absolute right-3 group-hover:text-utama group-hover:rotate-180 duration-300 ease-in-out">
                                    <path fill-rule="evenodd" d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class=" hidden duration-300 ease-in-out ml-6 group-hover:border-l group-hover:border-l-utama group-hover:flex">
                                <div class=" flex flex-col gap-4 py-4 w-full">
                                    <div class=" {{ Route::is('routeBR.index') ? 'bg-utama' : '' }} ml-4 rounded-l-full hover:bg-utama duration-300 ease-in-out">
                                        <a href="{{route('routeBR.index')}}" class=" {{ Route::is('routeBR.index') ? 'text-putih' : '' }} duration-300 ease-in-out flex py-2 pl-2 text-xs font-bold text-hitam hover:text-putih">User</a>
                                    </div>
                                    <div class=" {{ Route::is('routePB.index') ? 'bg-utama' : '' }} ml-4 rounded-l-full hover:bg-utama duration-300 ease-in-out">
                                        <a href="{{route('routePB.index')}}" class=" {{ Route::is('routePB.index') ? 'text-putih' : '' }} duration-300 ease-in-out flex py-2 pl-2 text-xs font-bold text-hitam hover:text-putih">Petugas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        {{-- user --}}
                        @if (Auth::guard('masyarakat')->user())
                        <a href="{{route('routeB.index')}}" class="{{ Route::is('routeB.index') ? 'bg-body border-r border-utama' : '' }} gap-3 mb-6 rounded-l-xl hover:border-r hover:border-r-utama group hover:bg-body pl-3 py-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routeB.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <h1 class="{{ Route::is('routeB.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">List Buku</h1>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Navbar --}}
    <div class=" absolute top-0 left-0 right-0">
        <div class=" w-full fixed h-24 bg-putih flex items-center justify-between">
            <div class=" ml-[296px] flex gap-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                </svg>
            </div>
            <div class=" flex">
                <button id="hamburger" name="hamburger" type="button" class=" flex items-center gap-1 mr-10">
                    <span class=" w-8 h-8 rounded-full">
                        <img src={{asset('img/profil.svg')}}>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-ketiga">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <nav id="navMenu" class=" hidden absolute bg-putih drop-shadow-5xl w-full max-w-[150px] rounded-md right-11 top-[90%]">
                    <div class=" flex flex-col my-2 mx-3">
                        <div class=" flex items-center ">
                            <div class=" group flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-kedua group-hover:text-utama duration-300 ease-in">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                                <a class=" group-hover:text-utama duration-300 text-sm text-kedua" href="{{route('logout')}}">Keluar</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @yield('content')
    <script src="{{asset('js/app..js')}}"></script>
</body>
</html>
