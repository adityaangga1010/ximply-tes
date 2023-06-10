@extends('layouts.MainD')

@section('title', 'Detail | buku')

@section('content')
    <div class=" ml-[296px] mr-11 mt-[125px] mx-auto text-hitam">
        <div class=" flex justify-between gap-5">
            <div class=" bg-putih w-full rounded-xl h-full pt-10 pb-16 px-6">
                <div class=" flex">
                    <h1 class=" font-bold">Detail Buku</h1>
                </div>
                <div class=" mt-6">
                    <div class=" border border-kelima rounded-xl p-4 flex flex-col gap-6">
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Judul <span>:</span></h1>
                            <h1 class=" text-utama">{{$books->judul}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Penulis <span>:</span></h1>
                            <h1 class=" text-utama">{{$books->penulis}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Pengarang <span>:</span></h1>
                            <h1 class=" text-utama">{{$books->pengarang}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Tahun terbit <span>:</span></h1>
                            <h1 class=" text-utama">{{$books->tahun_terbit}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Jumblah halaman <span>:</span></h1>
                            <h1 class=" text-utama">{{$books->jumblah_halaman}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Kategori <span>:</span></h1>
                            <h1 class=" text-utama">{{$books->kategori}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Status <span>:</span></h1>
                            @if ($books->status == 'tersedia')
                                <div class=" bg-putih border border-kelima flex items-center gap-1 p-2 rounded-md ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-utama">
                                        <path fill-rule="evenodd" d="M9.661 2.237a.531.531 0 01.678 0 11.947 11.947 0 007.078 2.749.5.5 0 01.479.425c.069.52.104 1.05.104 1.59 0 5.162-3.26 9.563-7.834 11.256a.48.48 0 01-.332 0C5.26 16.564 2 12.163 2 7c0-.538.035-1.069.104-1.589a.5.5 0 01.48-.425 11.947 11.947 0 007.077-2.75zm4.196 5.954a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                    <h1 class=" text-ketiga text-sm">Tersedia</h1>
                                </div>
                            @elseif($books->status == 'dipinjam')
                            <div class=" bg-putih border border-kelima flex items-center justify-center gap-1 p-2 rounded-md ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class=" w-5 h-5 text-merah ">
                                    <path fill-rule="evenodd" d="M10.339 2.237a.532.532 0 00-.678 0 11.947 11.947 0 01-7.078 2.75.5.5 0 00-.479.425A12.11 12.11 0 002 7c0 5.163 3.26 9.564 7.834 11.257a.48.48 0 00.332 0C14.74 16.564 18 12.163 18 7.001c0-.54-.035-1.07-.104-1.59a.5.5 0 00-.48-.425 11.947 11.947 0 01-7.077-2.75zM10 6a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 6zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                                <h1 class=" text-ketiga text-sm">Dipinjam</h1>
                            </div>
                        @endif
                        </div>
                        @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user())
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Hapus Buku <span>:</span></h1>
                            <button data-hs-overlay="#delete-modal" class=" bg-merah text-putih px-3 duration-300 ease-in-out bg-opacity-70 hover:bg-opacity-20 text-sm py-3 rounded-full group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 group-hover:animate-spin group-hover:text-hitam">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </div>
                        @endif

                        {{-- modal delete --}}
                        <div id="delete-modal" class="hs-overlay inset-0 bg-hitam bg-opacity-70 hidden w-full h-full fixed top-0 left-0 z-[99999] overflow-x-hidden overflow-y-auto">
                            <div class=" text-black hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                <div class="flex flex-col bg-putih opacity-70 rounded-xl">
                                    <div class="flex justify-between items-center py-3 px-4 border-b border-b-kelima">
                                        <h3 class=" text-merah font-bold">
                                            Informasi !!!!!
                                        </h3>
                                        <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-hitam" data-hs-overlay="#delete-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 hover:text-biru animate-bounce">
                                                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                            </svg>
                                        </button>
                                    </div>
                                <div class="p-4 overflow-y-auto">
                                    <p class="mt-1">
                                        Yakin Ingin Menghapus Data Ini?
                                    </p>
                                </div>
                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-t-kelima">
                                    <button type="button" class=" duration-300 ease-in-out bg-opacity-70 text-ketiga hover:border-putih hover:text-putih hs-dropdown-toggle hover:bg-biru py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-kedua font-medium shadow-sm align-middle text-sm" data-hs-overlay="#delete-modal">
                                        Kembali
                                    </button>
                                    <form action="{{route('routeB.destroy', ['id_book' =>$books->id])}}">
                                        @csrf
                                        @method('GET')
                                        <button class="duration-300 ease-in-out py-3 px-4 bg-opacity-70 text-ketiga hover:border-putih border-kedua hover:text-putih hover:bg-keempat inline-flex justify-center items-center gap-2 rounded-md border text-sm" href="#">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user())
            @if ($books->status == 'tersedia')
                <div class=" bg-putih w-full rounded-xl h-full pt-10 pb-16 px-6">
                    <div class=" flex flex-col">
                        <h1 class=" font-bold">Peminjaman Buku</h1>
                        <form action="{{route('routePB.store', $books->id)}}" method="POST" class=" flex flex-col mt-11 gap-4">
                            @csrf
                            @method('PUT')
                            <div class=" flex justify-start flex-col items-start gap-2">
                                <label for="tgl_pengembalian" class=" text-sm">Tanggal Pengembalian</label>
                                <input type="date" placeholder="Isi tanggal pengembalian" id="tgl_pengembalian" name="tgl_pengembalian" class=" rounded-md w-full p-3 text-sm border border-kelima" >
                            </div>
                            <button type="button" data-hs-overlay="#pinjam-modal" class=" hover:opacity-70 ease-in-out duration-300 bg-utama rounded-md text-putih py-2">Pinjam</button>
                            {{-- modal pinjam --}}
                            <div id="pinjam-modal" class="hs-overlay inset-0 bg-hitam bg-opacity-70 hidden w-full h-full fixed top-0 left-0 z-[99999] overflow-x-hidden overflow-y-auto">
                                <div class=" text-black hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                    <div class="flex flex-col bg-putih opacity-70 rounded-xl">
                                        <div class="flex justify-between items-center py-3 px-4 border-b border-b-kelima">
                                            <h3 class=" text-utama font-bold">
                                                Informasi !!!!!
                                            </h3>
                                            <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-hitam" data-hs-overlay="#pinjam-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 hover:text-biru animate-bounce">
                                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                                </svg>
                                            </button>
                                        </div>
                                    <div class="p-4 overflow-y-auto">
                                        <p class="mt-1">
                                            Yakin Ingin Meminjam buku <span class=" text-utama font-bold">{{$books->judul}}</span>?
                                        </p>
                                    </div>
                                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-t-kelima">
                                        <button class=" duration-300 ease-in-out bg-opacity-70 text-ketiga hover:border-putih hover:text-putih hs-dropdown-toggle hover:bg-biru py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-kedua font-medium shadow-sm align-middle text-sm" data-hs-overlay="#pinjam-modal">
                                            Kembali
                                        </button>
                                        <button type="submit" class="duration-300 ease-in-out py-3 px-4 bg-opacity-70 text-ketiga hover:border-putih border-kedua hover:text-putih hover:bg-keempat inline-flex justify-center items-center gap-2 rounded-md border text-sm">
                                            Pinjam
                                        </button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @else
            <div class=" bg-putih w-full rounded-xl h-full pt-10 pb-8 px-6">
                <div class=" flex flex-col gap-2text-black">
                    <h1 class=" font-bold">Peminjaman Buku</h1>
                    <h1 class=" border-t border-t-kelima text-sm pt-5 mt-6 text-center"><span class=" text-merah">!!! </span>Mohon maaf Untuk buku berjudul <span class=" text-utama italic">{{$books->judul}}</span> sedang di pinjam <span class=" text-merah">!!!</h1>
                    <h2 class=" text-kedua text-sm text-center">Mohon untuk mencari buku yang tersedia.</h2>
                </div>
            </div>
            @endif
            @endif

            @if (Auth::guard('masyarakat')->user())
            @if ($books->status == 'tersedia')
                <div class=" bg-putih w-full rounded-xl h-full pt-10 pb-16 px-6">
                    <div class=" flex flex-col">
                        <h1 class=" font-bold">Peminjaman Buku</h1>
                        <form action="{{route('routeBR.store', $books->id)}}" method="POST" class=" flex flex-col mt-11 gap-4">
                            @csrf
                            @method('PUT')
                            <div class=" flex justify-start flex-col items-start gap-2">
                                <label for="tgl_pengembalian" class=" text-sm">Tanggal Pengembalian</label>
                                <input type="date" placeholder="Isi tanggal pengembalian" id="tgl_pengembalian" name="tgl_pengembalian" class=" rounded-md w-full p-3 text-sm border border-kelima" >
                            </div>
                            <button type="button" data-hs-overlay="#pinjam-modal" class=" hover:opacity-70 ease-in-out duration-300 bg-utama rounded-md text-putih py-2">Pinjam</button>
                            {{-- modal pinjam --}}
                            <div id="pinjam-modal" class="hs-overlay inset-0 bg-hitam bg-opacity-70 hidden w-full h-full fixed top-0 left-0 z-[99999] overflow-x-hidden overflow-y-auto">
                                <div class=" text-black hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                    <div class="flex flex-col bg-putih opacity-70 rounded-xl">
                                        <div class="flex justify-between items-center py-3 px-4 border-b border-b-kelima">
                                            <h3 class=" text-utama font-bold">
                                                Informasi !!!!!
                                            </h3>
                                            <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-hitam" data-hs-overlay="#pinjam-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 hover:text-biru animate-bounce">
                                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                                </svg>
                                            </button>
                                        </div>
                                    <div class="p-4 overflow-y-auto">
                                        <p class="mt-1">
                                            Yakin Ingin Meminjam buku <span class=" text-utama font-bold">{{$books->judul}}</span>?
                                        </p>
                                    </div>
                                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-t-kelima">
                                        <button class=" duration-300 ease-in-out bg-opacity-70 text-ketiga hover:border-putih hover:text-putih hs-dropdown-toggle hover:bg-biru py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-kedua font-medium shadow-sm align-middle text-sm" data-hs-overlay="#pinjam-modal">
                                            Kembali
                                        </button>
                                        <button type="submit" class="duration-300 ease-in-out py-3 px-4 bg-opacity-70 text-ketiga hover:border-putih border-kedua hover:text-putih hover:bg-keempat inline-flex justify-center items-center gap-2 rounded-md border text-sm">
                                            Pinjam
                                        </button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @else
            <div class=" bg-putih w-full rounded-xl h-full pt-10 pb-8 px-6">
                <div class=" flex flex-col gap-2text-black">
                    <h1 class=" font-bold">Peminjaman Buku</h1>
                    <h1 class=" border-t border-t-kelima text-sm pt-5 mt-6 text-center"><span class=" text-merah">!!! </span>Mohon maaf Untuk buku berjudul <span class=" text-utama italic">{{$books->judul}}</span> sedang di pinjam <span class=" text-merah">!!!</h1>
                    <h2 class=" text-kedua text-sm text-center">Mohon untuk mencari buku yang tersedia.</h2>
                </div>
            </div>
            @endif
            @endif
        </div>

    </div>
@endsection
