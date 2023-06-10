@extends('layouts.MainD')

@section('title', 'Detail | User')

@section('content')
    <div class=" ml-[296px] mr-11 mt-[125px] mx-auto text-hitam">
        <div class=" bg-putih rounded-xl h-full pt-10 pb-16 px-6">
            <div class=" flex">
                <h1 class=" font-bold">Detail Peminjam</h1>
            </div>
            <div class=" flex gap-12 justify-between mt-6">
                <div class=" w-1/2 border border-kelima rounded-xl p-4 flex flex-col gap-6">
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Judul <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->getDataBook->judul}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Penulis <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->getDataBook->penulis}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Pengarang <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->getDataBook->pengarang}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Tahun Terbit <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->getDataBook->tahun_terbit}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Jumblah Halaman <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->getDataBook->jumblah_halaman}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Kategori <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->getDataBook->kategori}}</h1>
                    </div>
                </div>
                <div class=" w-1/2 border border-kelima rounded-xl p-4 flex flex-col gap-6">
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Peminjam <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->getDataMR->nama}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Tanggal Peminjam <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->tgl_peminjaman}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Tanggal Pengembalian <span>:</span></h1>
                        <h1 class=" text-utama">{{$borrowings->tgl_pengembalian}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Status <span>:</span></h1>
                        @if ($borrowings->getDataBook->status == 'tersedia')
                            <div class=" bg-putih border border-kelima flex items-center gap-1 p-2 rounded-md ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-utama">
                                    <path fill-rule="evenodd" d="M9.661 2.237a.531.531 0 01.678 0 11.947 11.947 0 007.078 2.749.5.5 0 01.479.425c.069.52.104 1.05.104 1.59 0 5.162-3.26 9.563-7.834 11.256a.48.48 0 01-.332 0C5.26 16.564 2 12.163 2 7c0-.538.035-1.069.104-1.589a.5.5 0 01.48-.425 11.947 11.947 0 007.077-2.75zm4.196 5.954a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                </svg>
                                <h1 class=" text-ketiga text-sm">Tersedia</h1>
                            </div>
                        @elseif($borrowings->getDataBook->status == 'dipinjam')
                        <div class=" bg-putih border border-kelima flex items-center justify-center gap-1 p-2 rounded-md ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class=" w-5 h-5 text-merah ">
                                <path fill-rule="evenodd" d="M10.339 2.237a.532.532 0 00-.678 0 11.947 11.947 0 01-7.078 2.75.5.5 0 00-.479.425A12.11 12.11 0 002 7c0 5.163 3.26 9.564 7.834 11.257a.48.48 0 00.332 0C14.74 16.564 18 12.163 18 7.001c0-.54-.035-1.07-.104-1.59a.5.5 0 00-.48-.425 11.947 11.947 0 01-7.077-2.75zM10 6a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 6zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                            <h1 class=" text-ketiga text-sm">Dipinjam</h1>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
