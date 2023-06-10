@extends('layouts.MainD')

@section('title', 'Dashboard - Ximply')

@section ('content')
    <section class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
        {!! Toastr::message() !!}
        <div class=" w-full rounded-xl h-full">
            <div class=" flex flex-col gap-8">
                @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user())
                <div class=" flex flex-col gap-1">
                    <h1 class=" font-bold tracking-[1px] text-ketiga text-lg">Dashboard</h1>
                    <h1 class=" font-bold text-ketiga text-xs"> Halo, <span class=" text-kuning">{{ Auth::user()->nama_petugas }}</span></h1>
                </div>
                <span class=" w-full border rounded-full border-kelima"></span>
                <div class=" grid grid-cols-4 gap-4 mt-6 text-hitam">
                    <div class=" bg-putih aspect-video flex items-center justify-center rounded-3xl drop-shadow-4xl relative">
                        <div class=" absolute top-0 -translate-y-6 rounded-full shadow-lg shadow-kuning p-4 bg-kuning opacity-70">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                            </svg>
                        </div>
                        <div class=" flex items-center translate-y-4 flex-col gap-4">
                            <h1 class=" text-ketiga text-xs">Total User</h1>
                            <h1 class=" text-sm">{{ $totalMasyarakat }}</h1>
                        </div>
                    </div>
                    <div class=" bg-putih aspect-video flex items-center justify-center rounded-3xl drop-shadow-4xl relative">
                        <div class=" absolute top-0 -translate-y-6 rounded-full shadow-lg shadow-biru p-4 bg-biru opacity-70">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div class=" flex items-center translate-y-4 flex-col gap-4">
                            <h1 class=" text-ketiga text-xs">Total Buku</h1>
                            <h1 class=" text-sm">{{$totalBook}}</h1>
                        </div>
                    </div>
                    <div class=" bg-putih aspect-video flex items-center justify-center rounded-3xl drop-shadow-4xl relative">
                        <div class=" absolute top-0 -translate-y-6 rounded-full shadow-lg shadow-utama p-4 bg-utama opacity-70">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class=" flex items-center translate-y-4 flex-col gap-4">
                            <h1 class="text-ketiga text-xs">Tersedia</h1>
                            <h1 class="text-sm">{{$totalTersedia}}</h1>
                        </div>
                    </div>
                    <div class=" bg-putih aspect-video flex items-center justify-center rounded-3xl drop-shadow-4xl relative">
                        <div class=" absolute top-0 -translate-y-6 rounded-full shadow-lg shadow-merah p-4 bg-merah opacity-70">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                            </svg>
                        </div>
                        <div class=" flex items-center translate-y-4 flex-col gap-4">
                            <h1 class=" text-ketiga text-xs">Dipinjam</h1>
                            <h1 class=" text-sm">{{$totalDipinjam}}</h1>
                        </div>
                    </div>
                </div>
                @endif

                @if (Auth::guard('masyarakat')->user())
                <div class=" flex flex-col gap-1">
                    <h1 class=" font-bold tracking-[1px] text-ketiga text-lg">Dashboard</h1>
                    <h1 class=" font-bold text-ketiga text-xs"> Halo, <span class=" text-kuning">{{ Auth::user()->nama }}</span></h1>
                </div>
                <span class=" w-full border rounded-full border-kelima"></span>
                <div class=" w-full rounded-xl bg-putih h-full py-28 mb-[116px] px-10 ">
                    <div class=" flex justify-between items-start">
                        <div class=" flex flex-col gap-4">
                            <div class=" flex flex-col text-3xl tracking-wider gap-1 text-hitam font-bold">
                                <span>Selamat Datang Di Aplikasi</span>
                                <span>Perpustakaan <span class=" text-kuning">Xim<span class=" text-utama">ply</span></span></span>
                                <span class=" text-utama"></span>
                            </div>
                            <div class=" max-w-[400px]">
                                <h1 class=" text-md tracking-wide text-ketiga">Maka dari itu, motivasi untuk mulai membaca buku perlu senantiasa ditingkatkan. Salah satunya yakni dengan membaca hingga membagikan kata-kata bijak tentang membaca buku.</h1>
                            </div>
                            <div class=" flex">
                                <a href="{{route('routeB.index')}}" class=" before:bg-putih gap-4 group before:border-utama border bg-utama flex py-4 px-8 items-center text-sm text-putih hover:text-utama rounded-full overflow-hidden relative cursor-pointer transition-all duration-100 ease-in-out z-[1]  before:inline-block before:translate-y-full before:left-0 before:w-[100%] before:h-[300%] before:absolute before:rounded-full before:z-[-1] before:transition-transform before:ease-in before:duration-300 hover:transition-colors hover:duration-500 hover:ease-in hover:before:-translate-y-0  focus:outline-none">
                                    <h1 class=" font-medium">Ayo pinjam buku</h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 group-hover:rotate-[360deg] ease-in-out duration-300">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <img class=" w-[500px] h-w-[500px]" src="{{asset('img/Banner.svg')}}">
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection
