@extends('layouts.MainD')

@section('title', 'Dashboard - buku')
@section('content')
    {!! Toastr::message() !!}
    <section class=" ml-[296px] mr-11 mt-[125px]  mx-auto font-jakartasans">
        <div class=" bg-putih w-full rounded-xl h-full pt-10 pb-16 px-6">
            <div class=" mb-4 flex justify-between">
                <div class=" text-hitam font-bold">
                    <h1>List Buku</h1>
                    <span class=" text-xs font-normal text-ketiga">Cari buku yang tersedia di aplikasi kami!!!</span>
                </div>
                <div class=" flex items-center gap-2">
                    @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user())
                    <button data-hs-overlay="#modal-tambah" class=" before:bg-putih opacity-70 gap-2 group before:border-utama border bg-utama flex px-5 py-2 items-center text-sm text-putih hover:text-utama rounded-full overflow-hidden relative cursor-pointer transition-all duration-100 ease-in-out z-[1]  before:inline-block before:translate-y-full before:left-0 before:w-[100%] before:h-[300%] before:absolute before:rounded-full before:z-[-1] before:transition-transform before:ease-in before:duration-300 hover:transition-colors hover:duration-500 hover:ease-in hover:before:-translate-y-0 focus:outline-none">
                        <h1>Tambah</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    @endif
                    <form action="{{ route('routeB.search') }}" method="POST">
                    @csrf
                    <div class=" flex items-center relative opacity-70">
                        <input type="text" name="search" placeholder='Cari buku...' class=' border rounded-lg border-biru w-[200px] font-DMSans text-xs text-kedua placeholder:text-ketiga focus:placeholder:text-biru py-2 pl-4 focus:outline-none'/>
                        <button type="submit" class=' absolute w-8 h-8 flex items-center justify-center right-0 rounded-r-lg bg-biru'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-putih">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
            {{-- modal --}}
            <div id="modal-tambah" class="hs-overlay z-[9999] inset-0 bg-hitam bg-opacity-70 hidden w-full h-full fixed top-0 left-0 overflow-x-hidden overflow-y-auto">
                <div class=" text-black hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                    <div class="flex flex-col bg-putih opacity-70 rounded-xl">
                        <div class="flex justify-between items-center py-3 px-4 border-b border-b-kelima">
                            <h3 class=" text-utama opacity-70 font-bold">
                                Tambah buku
                            </h3>
                            <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-hitam" data-hs-overlay="#modal-tambah">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 hover:text-biru animate-bounce">
                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>
                            </button>
                        </div>
                        <div class=" py-5">
                            <form action="{{route('routeB.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class=" w-full flex px-4 flex-col gap-4">
                                    <div class=" flex items-center gap-3">
                                        <div class=" w-1/2 flex flex-col gap-2">
                                            <label for="judul" class=" text-xs">Judul</label>
                                            <input type="text" placeholder="Judul" id="judul" name="judul" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-utama focus:outline-none focus:border-utama border rounded-md border-kelima px-4 py-2" required>
                                        </div>
                                        <div class=" w-1/2 flex flex-col gap-2">
                                            <label for="penulis" class=" text-xs">Penulis</label>
                                            <input type="text" placeholder="Penulis" id="penulis" name="penulis" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-utama focus:outline-none focus:border-utama border rounded-md border-kelima px-4 py-2" required>
                                        </div>
                                    </div>
                                    <div class=" flex items-center gap-3">
                                        <div class=" w-1/2 flex flex-col gap-2">
                                            <label for="pengarang" class=" text-xs">Pengarang</label>
                                            <input type="text" placeholder="Pengarang" id="pengarang" name="pengarang" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-utama focus:outline-none focus:border-utama border rounded-md border-kelima px-4 py-2" required>
                                        </div>
                                        <div class=" w-1/2 flex flex-col gap-2">
                                            <label for="tahun_terbit" class=" text-xs">tahun_terbit</label>
                                            <input type="number" placeholder="tahun_terbit" id="tahun_terbit" name="tahun_terbit" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-utama focus:outline-none focus:border-utama border rounded-md border-kelima px-4 py-2" required>
                                        </div>
                                    </div>
                                    <div class=" flex items-center gap-3">
                                        <div class=" w-1/2 flex flex-col gap-2">
                                            <label for="jumblah_halaman" class=" text-xs">Jumblah halaman</label>
                                            <input type="number" placeholder="Jumblah halaman" id="jumblah_halaman" name="jumblah_halaman" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-utama focus:outline-none focus:border-utama border rounded-md border-kelima px-4 py-2" required>
                                        </div>
                                        <div class=" w-1/2 flex flex-col gap-2">
                                            <label for="kategori" class=" text-xs">Kategori</label>
                                            <select name="kategori" id="kategori" class=" appearance-none w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-utama focus:outline-none focus:border-utama border rounded-md border-kelima px-4 py-2" required>
                                                <option selected disabled value="">Pilih Kategori</option>
                                                <option value="novel">novel</option>
                                                <option value="kamus">kamus</option>
                                                <option value="komik">komik</option>
                                                <option value="manga">manga</option>
                                                <option value="biografi">biografi</option>
                                                <option value="naskah">naskah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" class=" hover:opacity-70 duration-200 ease-in-out w-full bg-utama rounded-md py-2">
                                            <h1 class=" text-putih">Tambah</h1>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end modal --}}
            <div class=" mt-6">
                <table class=" w-full flex flex-col gap-4 text-hitam">
                    <thead>
                        <tr class=" flex bg-kelima rounded-2xl px-10 py-3 text-xs font-bold">
                            <td class=" w-[50%]">No</td>
                            <td class=" w-[50%] -translate-x-4">Judul</td>
                            <td class=" w-[50%] translate-x-10">Kategori</td>
                            <td class=" w-[50%] translate-x-24">Status</td>
                            <td class=" w-[50%] text-end">Action</td>
                        </tr>
                    </thead>
                    <tbody class=" flex flex-col gap-4 relative">
                        @foreach ($books as $item)
                            <tr class=" flex bg-putih border border-kelima rounded-lg px-10 py-4 text-[10px] items-center">
                                <td class=" w-[50%]">{{$loop->index + 1}}</td>
                                <td class=" w-[50%] -translate-x-4">{{$item->judul}}</td>
                                <td class=" w-[50%] translate-x-10">{{$item->kategori}}</td>
                                <td class=" w-[50%] translate-x-24">
                                    @if ($item->status == 'tersedia')
                                        <div class=" bg-putih border border-kelima flex items-center pl-2 gap-1 py-1 rounded-sm w-20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3 text-utama">
                                                <path fill-rule="evenodd" d="M9.661 2.237a.531.531 0 01.678 0 11.947 11.947 0 007.078 2.749.5.5 0 01.479.425c.069.52.104 1.05.104 1.59 0 5.162-3.26 9.563-7.834 11.256a.48.48 0 01-.332 0C5.26 16.564 2 12.163 2 7c0-.538.035-1.069.104-1.589a.5.5 0 01.48-.425 11.947 11.947 0 007.077-2.75zm4.196 5.954a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                            </svg>
                                            <h1 class=" text-ketiga">Tersedia</h1>
                                        </div>
                                    @elseif($item->status == 'dipinjam')
                                        <div class=" bg-putih border border-kelima flex items-center justify-center gap-1 py-1 rounded-sm w-20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class=" w-3 h-3 text-merah">
                                                <path fill-rule="evenodd" d="M10.339 2.237a.532.532 0 00-.678 0 11.947 11.947 0 01-7.078 2.75.5.5 0 00-.479.425A12.11 12.11 0 002 7c0 5.163 3.26 9.564 7.834 11.257a.48.48 0 00.332 0C14.74 16.564 18 12.163 18 7.001c0-.54-.035-1.07-.104-1.59a.5.5 0 00-.48-.425 11.947 11.947 0 01-7.077-2.75zM10 6a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 6zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                            </svg>
                                            <h1 class=" text-ketiga">Dipinjam</h1>
                                        </div>
                                    @endif
                                </td>
                                <td class=" w-[50%] justify-end flex">
                                    <div class=" cursor-pointer bg-kelima py-2 rounded-lg px-2 group/2 relative" >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-ketiga duration-300 ease-in-out group-hover/2:text-utama">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>
                                        <div class=" hidden absolute group-hover/2:flex z-10 rounded-md group-hover/2:bg-putih group-hover/2:drop-shadow-5xl top-full left-0 ">
                                            <div class=" flex flex-col items-start gap-3 py-2 px-3 w-full">
                                                <div class=" flex flex-col items-start gap-3 py-3 px-4 w-full">
                                                    <a href="{{route('routeB.show', $item->id )}}" class=" text-merah opacity-70 text-sm font-bold w-full hover:text-hitam">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </a>
                                                    @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user())
                                                    <button data-hs-overlay="#modal-edit{{$item->id}}" class=" text-biru opacity-70 text-sm font-bold w-full hover:text-hitam">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- modal edit --}}
                @foreach ($books as $item)
                <div id="modal-edit{{$item->id}}" class="hs-overlay z-[9999] inset-0 bg-hitam bg-opacity-70 hidden w-full h-full fixed top-0 left-0 overflow-x-hidden overflow-y-auto">
                    <div class=" text-black hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div class="flex flex-col bg-putih opacity-70 rounded-xl">
                            <div class="flex justify-between items-center py-3 px-4 border-b border-b-kelima">
                                <h3 class=" text-biru opacity-70 font-bold">
                                    Edit buku
                                </h3>
                                <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-hitam" data-hs-overlay="#modal-edit{{$item->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 hover:text-biru animate-bounce">
                                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                    </svg>
                                </button>
                            </div>
                            <div class=" py-5">
                                <form action="{{route('routeB.update', ['id_book' =>$item->id])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class=" w-full flex px-4 flex-col gap-4">
                                        <div class=" flex items-center gap-3">
                                            <div class=" w-1/2 flex flex-col gap-2">
                                                <label for="judul" class=" text-xs">Judul</label>
                                                <input type="text" placeholder="Judul" id="judul" value="{{$item->judul}}" name="judul" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-biru focus:outline-none focus:border-biru border rounded-md border-kelima px-4 py-2" required>
                                            </div>
                                            <div class=" w-1/2 flex flex-col gap-2">
                                                <label for="penulis" class=" text-xs">Penulis</label>
                                                <input type="text" placeholder="Penulis" id="penulis" value="{{$item->penulis}}" name="penulis" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-biru focus:outline-none focus:border-biru border rounded-md border-kelima px-4 py-2" required>
                                            </div>
                                        </div>
                                        <div class=" flex items-center gap-3">
                                            <div class=" w-1/2 flex flex-col gap-2">
                                                <label for="pengarang" class=" text-xs">Pengarang</label>
                                                <input type="text" placeholder="Pengarang" id="pengarang" value="{{$item->pengarang}}" name="pengarang" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-biru focus:outline-none focus:border-biru border rounded-md border-kelima px-4 py-2" required>
                                            </div>
                                            <div class=" w-1/2 flex flex-col gap-2">
                                                <label for="tahun_terbit" class=" text-xs">tahun_terbit</label>
                                                <input type="number" placeholder="tahun_terbit" id="tahun_terbit" value="{{$item->tahun_terbit}}" name="tahun_terbit" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-biru focus:outline-none focus:border-biru border rounded-md border-kelima px-4 py-2" required>
                                            </div>
                                        </div>
                                        <div class=" flex items-center gap-3">
                                            <div class=" w-1/2 flex flex-col gap-2">
                                                <label for="jumblah_halaman" class=" text-xs">Jumblah halaman</label>
                                                <input type="number" placeholder="Jumblah halaman" id="jumblah_halaman" value="{{$item->jumblah_halaman}}" name="jumblah_halaman" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-biru focus:outline-none focus:border-biru border rounded-md border-kelima px-4 py-2" required>
                                            </div>
                                            <div class=" w-1/2 flex flex-col gap-2">
                                                <label for="kategori" class=" text-xs">Kategori</label>
                                                <select name="kategori" id="kategori" class="w-full placeholder:text-xs appearance-none text-xs focus:placeholder:text-kedua text-biru focus:outline-none focus:border-utama border rounded-md border-kelima px-4 py-2" required>
                                                    <option selected value="{{$item->kategori}}">{{$item->kategori}}</option>
                                                    <option value="novel">novel</option>
                                                    <option value="kamus">kamus</option>
                                                    <option value="komik">komik</option>
                                                    <option value="manga">manga</option>
                                                    <option value="biografi">biografi</option>
                                                    <option value="naskah">naskah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" flex">
                                            <button type="submit" class=" duration-300 ease-in-out hover:opacity-70 w-full bg-biru rounded-md py-2">
                                                <h1 class=" text-putih">Edit</h1>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
