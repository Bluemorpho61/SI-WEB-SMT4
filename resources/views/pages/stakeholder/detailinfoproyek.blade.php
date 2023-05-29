@php use App\Enums\ProjectStatus; @endphp
@extends('layouts.sidebarstake')
@section('content-stake')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">

            <div class="flex flex-row">
                <div class="flex-col text-black h-auto w-fit mb-4 rounded ">
                    <h1 class="text-left font-bold text-2xl px-4 h-fit py-2 ">{{$pengajuan->nama_proyek}}</h1>
                    <p class="ml-3 font-thin text-sm">Diposting pada: {{$pengajuan->created_at}} </p>
                    <div class="flex"><h1 class="mt-5">Status Proyek: </h1>
                        @if($pengajuan->status_proyek==0)
                            <p class="mt-5 font-bold text-yellow-300 outline-1 outline-black">Menunggu Penawaran</p>
                        @elseif($pengajuan->status_proyek==1)
                            <p class="mt-5 font-bold text-blue-600 outline-1 outline-black">Tengah Dikerjakan</p>
                        @else
                            <p class="mt-5 font-bold text-green-700 outline-1 outline-black">Selesai</p>
                        @endif

                    </div>
                </div>

                <div class="h-fit ml-11  mt-5">
                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                        Edit Info Proyek
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
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our
                                        platform</h3>
                                    <form class="space-y-6" action="/stake/updatePengajuan/{{$pengajuan->id}}"
                                          method="post">
                                        @csrf
                                        <div>
                                            <label for="email"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                                                Judul Baru Anda</label>
                                            <input type="text" name="nama_proyek" id="email"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                   placeholder="Judul Lama: '{{$pengajuan->nama_proyek}}'" required>
                                        </div>
                                        <div>
                                            <label for="deskripsi"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edit
                                                Deskripsi</label>
                                            <textarea name="deskripsi" id="deskripsi" rows="4"
                                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$pengajuan->deskripsi}}</textarea>
                                        </div>
                                        <div>
                                            <label for="jangka_deadline"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edit
                                                Deadline</label>
                                            <input type="date" name="jangka_deadline" id="jangka_deadline">
                                        </div>

                                        <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Konfirmasi Perubahan
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="/stake/takedown-pengajuan/{{$pengajuan->id}}" method="post"
                          onsubmit="return confirm('Apakah anda yakin ingin membatalkan pengajuan proyek ini?')">
                        @csrf
                        <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ml-44">
                            Batalkan Proyek
                        </button>
                    </form>
                </div>
            </div>

            <div class="flex flex-row "><h1 class="text-2xl font-bold mt-14">Deskripsi</h1></div>
            <div class="flex  flex-col  h-48 mb-4  overflow-y-scroll rounded bg-blue-800 text-white dark:bg-gray-800">
                <p class="p-6">{{$pengajuan->deskripsi}}</p>
            </div>
            <h1 class="text-2xl font-bold mt-14 w-fit">Daftar Tawaran Proyek</h1>
            <div class="flex items-center h-auto justify-center h-48 mb-4 rounded ">
                <div class="mt-5 relative object-cover overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tim Developer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Besaran Bid

                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Penawaran
                            </th>

                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tawaran as $tawarans)

                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$tawarans->nama}}
                                </th>
                                <td class="px-6 py-4">
                                    Rp. {{$tawarans->harga}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$tawarans->tanggal}}
                                </td>

                                <td class="px-6 py-4">
                                    <form action="/stake/ambil-tawaran/{{$tawarans->id}}" method="post">
                                        @csrf
                                        <button type="submit"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            Ambil
                                            Tawaran
                                        </button>
                                    </form>
                                    <a href="/stake/detail-proyek/{{$tawarans->id_user}}/cek-profil/"
                                       class="font-medium text-yellow-600">Cek Profil</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection
