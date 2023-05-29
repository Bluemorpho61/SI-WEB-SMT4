@extends('layouts.sidebardev')

@section('content-dev')
    <div class="p-4 sm:ml-64 bg-blue-200">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded ">
                    <p class="text-2xl text-black">Cari Proyek</p>
                </div>
            </div>

            <div class="flex  overflow-x-auto  p-10 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <div class="relative shadow-md sm:rounded-lg">
                    <p class="mb-2 font-bold font-sans">Total proyek yang tersedia: {{$totalProyek}}</p>
                    <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Proyek
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Perusahaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tenggat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                   Status Proyek
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($showProyek as $data)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$data->proyek}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$data->nama}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$data->tenggat}}
                                </td>
                                <td class="px-6 py-4">
                                  @if($data->status_proyek==0)
                                      Menunggu Penawaran
                                    @elseif($data->status_proyek==1)
                                      Tengah dikerjakan
                                    @else
                                      Selesai
                                  @endif
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/dev/cari-proyek/detail-proyek/{{$data->id}}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Cek</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            {{--  --}}
        </div>
    </div>
@endsection
