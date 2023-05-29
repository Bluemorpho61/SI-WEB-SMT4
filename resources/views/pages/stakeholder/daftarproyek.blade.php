@extends('layouts.sidebarstake')

@section('content-stake')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded ">
                    <p class="text-2xl text-black">Daftar Proyek</p>
                </div>
                @if(session('dlt-pry'))
                    <script>
                        alert('Proyek berhasil dihapus')
                    </script>
                @endif


            </div>
            {{-- Warning --}}
            @if ($count > 0)
                <div class="flex items-center justify-center h-auto mb-4 rounded bg-gray-50 dark:bg-gray-800">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="p-5">

                            <table class="w-full text-sm text-left overflow-y-scroll text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Proyek
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jangka Deadline
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status Proyek
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Lihat Detail
                                    </th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($show as $shows)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $shows->nama_proyek }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $shows->jangka_deadline }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if($shows->status_proyek==0)
                                                Menunggu Tawaran
                                            @elseif($shows->status_proyek==1)
                                                Tengah Dikerjakan
                                            @else
                                                Selesai
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="detail-proyek/{{$shows->id}}" class="text-blue-500">Lihat
                                                detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            @else
                <div class=" flex items-center justify-center h-48 mb-4 rounded bg-yellow-100 dark:bg-gray-800">
                    <div class="p-10 bg-cover mr-2"
                         style="background-image: url({{ asset('assets/warning.png') }})"></div>
                    <div class="space-y-2 grid-flow-col">
                        <p class="text-2xl text-black dark:text-gray-500">Anda masih belum pernah mengajukan proyek</p>
                        <a href="{{ route('buat-pro') }}" type="button"
                           class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Buat
                            Proyek Sekarang</a>
                    </div>
                </div>
            @endif


        </div>
    </div>
@endsection
