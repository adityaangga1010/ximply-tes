@extends('layouts.MainLR')

@section('title', 'LandingPage - Pers Ximply')

@section('content')
    <div class=" min-h-screen">
        {!! Toastr::message() !!}
        <header class=" absolute top-0 left-0 right-0 z-10 duration-300 ease-linear bg-utama">
            <div class=" px-14 py-3">
                <div class=" flex justify-between">
                    <div class=" flex items-center gap-2">
                        <img class=" w-14 h-14" src="{{asset('img/logo.svg')}}">
                        <h1 class=" text-putih font-bold" id="text2">Pers <span id="text3">Xim</span><span id="text4">ply</span></h1>
                    </div>
                    <div class=" flex items-center gap-4">
                        <a href="{{route('route.login')}}" class=" hover:underline text-putih text-sm" id="text1">Masuk</a>
                        <a href="{{route('route.register')}}" class=" before:bg-putih gap-2  before:border-utama border bg-utama flex py-2 px-4 items-center text-sm text-putih hover:text-utama rounded-full overflow-hidden relative cursor-pointer transition-all duration-100 ease-in-out z-[1]  before:inline-block before:translate-y-full before:left-0 before:w-[100%] before:h-[300%] before:absolute before:rounded-full before:z-[-1] before:transition-transform before:ease-in before:duration-300 hover:transition-colors hover:duration-500 hover:ease-in hover:before:-translate-y-0  focus:outline-none">
                            <h1>Daftar</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M15.988 3.012A2.25 2.25 0 0118 5.25v6.5A2.25 2.25 0 0115.75 14H13.5v-3.379a3 3 0 00-.879-2.121l-3.12-3.121a3 3 0 00-1.402-.791 2.252 2.252 0 011.913-1.576A2.25 2.25 0 0112.25 1h1.5a2.25 2.25 0 012.238 2.012zM11.5 3.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v.25h-3v-.25z" clip-rule="evenodd" />
                                <path d="M3.5 6A1.5 1.5 0 002 7.5v9A1.5 1.5 0 003.5 18h7a1.5 1.5 0 001.5-1.5v-5.879a1.5 1.5 0 00-.44-1.06L8.44 6.439A1.5 1.5 0 007.378 6H3.5z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main class=" mx-auto pt-56 flex flex-col gap-16 mb-24">
            <div class=" flex justify-between">
                <div class=" max-w-[550px] pl-14 flex flex-col gap-8 text-hitam ">
                    <h1 class=" text-4xl font-bold tracking-wide leading-normal font-PlusJakarta">Selamat Datang Di Aplikasi Perpusatakaan <span class=" text-kuning">Xim<span class=" text-utama">ply</span></span></h1>
                    <span class=" text-kedua tracking-wide">Maka dari itu, motivasi untuk mulai membaca buku perlu senantiasa ditingkatkan. Salah satunya yakni dengan membaca hingga membagikan kata-kata bijak tentang membaca buku.</span>
                    <div class=" flex gap-3">
                        <a href="#benefit" class=" before:bg-putih gap-2.5 group before:border-utama border bg-kuning flex font-DMSANS h-[42px] px-6 items-center text-sm text-putih hover:text-kuning rounded-full overflow-hidden relative cursor-pointer transition-all duration-100 ease-in-out z-[1]  before:inline-block before:translate-y-full before:left-0 before:w-[100%] before:h-[300%] before:absolute before:rounded-full before:z-[-1] before:transition-transform before:ease-in before:duration-300 hover:transition-colors hover:duration-500 hover:ease-in hover:before:-translate-y-0  focus:outline-none">
                            <h1 class=" text-sm font-bold">Benefit</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 group-hover:translate-x-1 duration-300 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </a>
                        <a href="{{route('route.register')}}" class=" before:bg-utama gap-2.5 group before:border-utama border bg-putih flex font-DMSANS h-[42px] px-6 items-center text-sm text-utama hover:text-putih rounded-full overflow-hidden relative cursor-pointer transition-all duration-100 ease-in-out z-[1]  before:inline-block before:translate-y-full before:left-0 before:w-[100%] before:h-[300%] before:absolute before:rounded-full before:z-[-1] before:transition-transform before:ease-in before:duration-300 hover:transition-colors hover:duration-500 hover:ease-in hover:before:-translate-y-0  focus:outline-none">
                            <h1 class=" text-sm font-bold">Daftar</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M15.988 3.012A2.25 2.25 0 0118 5.25v6.5A2.25 2.25 0 0115.75 14H13.5v-3.379a3 3 0 00-.879-2.121l-3.12-3.121a3 3 0 00-1.402-.791 2.252 2.252 0 011.913-1.576A2.25 2.25 0 0112.25 1h1.5a2.25 2.25 0 012.238 2.012zM11.5 3.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v.25h-3v-.25z" clip-rule="evenodd" />
                                <path d="M3.5 6A1.5 1.5 0 002 7.5v9A1.5 1.5 0 003.5 18h7a1.5 1.5 0 001.5-1.5v-5.879a1.5 1.5 0 00-.44-1.06L8.44 6.439A1.5 1.5 0 007.378 6H3.5z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class=" -translate-y-10 -translate-x-1">
                    <img src="{{asset('img/banner.svg')}}">
                </div>
            </div>
            <div class=" px-14">
                <h1 class=" text-sm font-bold text-kuning mb-2 tracking-[4px] font-PlusJakarta" id="benefit">Benefit <span class=" text-utama">Kami</span></h1>
                <h1 class=" text-4xl max-w-md font-bold tracking-wide mb-10 font-PlusJakarta">Explore Benefit</h1>
                <div class=" grid grid-cols-3 gap-8">
                    <div class=" rounded-md border hover:shadow-lg hover:border-putih border-kelima px-6 py-6">
                        <div class=" flex flex-col gap-10">
                            <div class=" bg-utama w-36 h-36 rounded-md flex justify-center items-center bg-opacity-20">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-utama">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>
                            <div class=" max-w-[300px]">
                                <h1 class=" text-2xl font-bold text-hitam">Buku Lengkap Siap Pinjam & Tentunya Gratis</h1>
                            </div>
                            <h1 class=" text-kedua">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur molestias ipsum, eos tenetur culpa ea nulla cumque obcaecati modi sequi!</h1>
                            <div class=" flex">
                                <button class=" flex items-center gap-2 group">
                                    <h1 class=" text-utama">Pelajari Sekarang</h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" group-hover:translate-x-1 duration-300 ease-in-out w-6 h-6 text-utama">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=" rounded-md border hover:shadow-lg hover:border-putih border-kelima px-6 py-6">
                        <div class=" flex flex-col gap-10">
                            <div class=" bg-biru w-36 h-36 rounded-md flex justify-center items-center bg-opacity-20">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-biru">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>
                            </div>
                            <div class=" max-w-[300px]">
                                <h1 class=" text-2xl font-bold text-hitam">Baca Pintar & Baca Cerdas</h1>
                            </div>
                            <h1 class=" text-kedua">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur molestias ipsum, eos tenetur culpa ea nulla cumque obcaecati modi sequi!</h1>
                            <div class=" flex">
                                <button class=" flex items-center gap-2 group">
                                    <h1 class=" text-biru">Pelajari Sekarang</h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" group-hover:translate-x-1 duration-300 ease-in-out w-6 h-6 text-biru">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=" rounded-md border hover:shadow-lg hover:border-putih border-kelima px-6 py-6">
                        <div class=" flex flex-col gap-10">
                            <div class=" bg-kuning w-36 h-36 rounded-md flex justify-center items-center bg-opacity-20">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-kuning">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                </svg>
                            </div>
                            <div class=" max-w-[300px]">
                                <h1 class=" text-2xl font-bold text-hitam">Sirkulasi Buku Sangat Baik & Terarah</h1>
                            </div>
                            <h1 class=" text-kedua">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur molestias ipsum, eos tenetur culpa ea nulla cumque obcaecati modi sequi!</h1>
                            <div class=" flex">
                                <button class=" flex items-center gap-2 group">
                                    <h1 class=" text-kuning">Pelajari Sekarang</h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" group-hover:translate-x-1 duration-300 ease-in-out w-6 h-6 text-kuning">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class=" bg-kelima flex justify-center items-center py-7">
            <h1 class=" text-black"><span class=" text-kuning">&copy;</span> Copyright 2023 Perpustakaan <span class=" text-kuning">Xim</span><span class=" text-utama">ply</span> Allright Reserved.</h1>
        </footer>
    </div>
@endsection
