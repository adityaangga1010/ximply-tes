@extends('layouts.MainD')

@section('title', 'Dashboard - Peminjman - Petugas')
@section('content')
    {!! Toastr::message() !!}
    <section class=" ml-[296px] mr-11 mt-[125px] mx-auto font-jakartasans">
        <div class=" bg-putih w-full rounded-xl h-full pt-10 pb-16 px-6">
            <div class=" mb-4 flex justify-between">
                <div class=" text-hitam font-bold">
                    <h1>List Peminjam Buku</h1>
                    <span class=" text-xs font-normal text-ketiga">Untuk Petugas yang meminjam buku!!!</span>
                </div>
                <div class=" flex items-center gap-2">
                    {{-- <form action="{{route('routeBR.search')}}" method="POST">
                        @csrf
                        <div class=" flex items-center relative opacity-70">
                            <input type="text" name="search" placeholder='Cari peminjam...' class=' border rounded-lg border-biru w-[200px] font-DMSans text-xs text-kedua placeholder:text-ketiga focus:placeholder:text-biru py-2 pl-4 focus:outline-none'/>
                            <button type="submit" class=' absolute w-8 h-8 flex items-center justify-center right-0 rounded-r-lg bg-biru'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-putih">
                                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </form> --}}
                </div>
            </div>
            <div class=" mt-6">
                <table class=" w-full flex flex-col gap-4 text-hitam">
                    <thead>
                        <tr class=" flex bg-kelima rounded-2xl px-10 py-3 text-xs font-bold">
                            <td class=" w-[50%]">No</td>
                            <td class=" w-[50%] -translate-x-4">Peminjam</td>
                            <td class=" w-[50%] translate-x-10">Tanggal Peminjaman</td>
                            <td class=" w-[50%] translate-x-24">Tanggal Pengembalian</td>
                            <td class=" w-[50%] text-end">Action</td>
                        </tr>
                    </thead>
                    <tbody class=" flex flex-col gap-4 relative">
                        @foreach ($pborrowings as $item)
                            <tr class=" flex bg-putih border border-kelima rounded-lg px-10 py-4 text-[10px] items-center">
                                <td class=" w-[50%]">{{$loop->index + 1}}</td>
                                <td class=" w-[50%] -translate-x-4">{{$item->getDataPT->nama_petugas}}</td>
                                <td class=" w-[50%] translate-x-10">{{$item->tgl_peminjaman}}</td>
                                <td class=" w-[50%] translate-x-24">{{$item->tgl_pengembalian}}</td>
                                <td class=" w-[50%] justify-end flex">
                                    <div class=" cursor-pointer bg-kelima py-2 rounded-lg px-2 group/2 relative" >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-ketiga duration-300 ease-in-out group-hover/2:text-utama">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>
                                        <div class=" hidden absolute group-hover/2:flex z-10 rounded-md group-hover/2:bg-putih group-hover/2:drop-shadow-5xl top-full left-0 ">
                                            <div class=" flex flex-col items-start gap-3 py-2 px-3 w-full">
                                                <div class=" flex flex-col items-start gap-3 py-3 px-4 w-full">
                                                    <a href="{{route('routePB.show', $item->id)}}" class=" text-merah opacity-70 text-sm font-bold w-full hover:underline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
