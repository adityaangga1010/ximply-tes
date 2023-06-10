@extends('layouts.MainD')

@section('title', 'Detail | User')

@section('content')
    <div class=" ml-[296px] mr-11 mt-[125px] mx-auto text-hitam">
        <div class=" bg-putih w-1/2 rounded-xl h-full pt-10 pb-16 px-6">
            <div class=" flex">
                <h1 class=" font-bold">Detail User</h1>
            </div>
            <div class=" mt-6">
                <div class=" border border-kelima rounded-xl p-4 flex flex-col gap-6">
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Nama <span>:</span></h1>
                        <h1 class=" text-utama">{{$masyarakats->nama}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Username <span>:</span></h1>
                        <h1 class=" text-utama">{{$masyarakats->username}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Email <span>:</span></h1>
                        <h1 class=" text-utama">{{$masyarakats->email}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Telp <span>:</span></h1>
                        <h1 class=" text-utama">{{$masyarakats->telp}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Jenis Kelamin <span>:</span></h1>
                        <h1 class=" text-utama">{{$masyarakats->jenis_kelamin}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Hapus User <span>:</span></h1>
                        <button data-hs-overlay="#delete-modal" class=" bg-merah text-putih px-3 duration-300 ease-in-out bg-opacity-70 hover:bg-opacity-20 text-sm py-3 rounded-full group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 group-hover:animate-spin group-hover:text-hitam">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>

                    {{-- modal --}}
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
                                <button type="button" class=" duration-300 ease-in-out bg-opacity-70 text-ketiga hover:border-putih hover:text-putih hs-dropdown-toggle hover:bg-biru py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-kedua font-medium shadow-sm text-sm" data-hs-overlay="#delete-modal">
                                    Kembali
                                </button>
                                <form action="{{route('routeM.destroy', ['id_masyarakat' =>$masyarakats->id])}}">
                                    @csrf
                                    @method('GET')
                                    <button class="py-3 px-4 duration-300 ease-in-out bg-opacity-70 text-ketiga hover:border-putih border-kedua hover:text-putih hover:bg-keempat inline-flex justify-center items-center gap-2 rounded-md border text-sm" href="#">
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
    </div>
@endsection
