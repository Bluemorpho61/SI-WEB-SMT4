@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.sidebardev')

@section('content-dev')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-dashed rounded-lg border-dashed mt-14">
            <div class="flex flex-row">
                <div class="flex-col text-black h-auto w-fit mb-4 rounded ">
                    <h1 class="text-left font-bold text-2xl px-4 h-fit py-2 ">{{$dataProyek[0]->proyek}}</h1>
                    @if($dataProyek[0]->dibuat==null)
                        <p class="ml-3 font-thin text-sm font-bold">Tanggal dipost: NULL </p>
                    @else
                        <p class="ml-3  text-sm font-bold">Tanggal dipost: {{$dataProyek[0]->dibuat}} </p>
                    @endif
                </div>
                <div class="flex flex-row w-auto h-fit ml-11 space-x-1 mt-5">
                    <p class="font-bold">Jumlah Penawar Proyek</p>: 3
                </div>
                <div class="ml-6 h-fit mt-14">

                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                        Pasang Penawaran
                    </button>

                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-hide="authentication-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-6 py-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Masukkan besaran
                                        harga jasa terbaik yang ingin tawarkan</h3>
                                    {{--                                    Untuk Memproses request Post--}}
                                    <form class="space-y-6" method="post" id="myForm"
                                          action="/dev/tambah-penawaran/{{$dataProyek[0]->id}}">
                                        @csrf
                                        <div>
                                            <input type="number" name="harga"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                   placeholder="Contoh: Rp. 12000000" required>
                                        </div>

                                        <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Konfirmasi Penawaran
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row "><h1 class="text-2xl font-bold mt-14">Deskripsi</h1></div>
            <div class="flex  flex-col  h-48 mb-4  overflow-y-scroll rounded bg-blue-800 text-white dark:bg-gray-800">
                <p class="p-6">{{$dataProyek[0]->deskripsi}}</p>
            </div>

{{--@dd(Auth::id())--}}
            <h1 class="font-bold w-fit mt-14">Tawaran yang diajukan</h1>
            <div class="">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tim Developer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tawaran yang diajukan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Penawaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($penawar as $tawaran)

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$tawaran->nama}}
                                </th>
                                <td class="px-6 py-4">
                                    Rp. {{$tawaran->harga}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$tawaran->tanggal}}
                                </td>
                                @if($tawaran->pengguna === Auth::id())
                                    <td>
                                        <form action="/dev/hapus-penawaran/{{$tawaran->id}}" method="post">
                                            @csrf
                                            <button class="ml-6 bg-red-600 text-white px-4 py-2 rounded-2xl"
                                                    type="submit">Hapus
                                            </button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

