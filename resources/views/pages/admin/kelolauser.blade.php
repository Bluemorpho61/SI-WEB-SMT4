@extends('layouts.sidebaradmin')

@section('content-adm')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded ">
                    <p class="text-2xl text-black font-bold">Kelola User</p>
                </div>

            </div>
            <div class="grid justify-items-start px-20 mb-4 rounded bg-gray-50 dark:bg-gray-800">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @if(session('success'))

                    @endif
                    <div class="grid">
                        <form method="POST">
                            <div class="flex">
                                <label for="search-dropdown"
                                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                                    Email</label>
                                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                                    type="button">Berdasarkan Tipe <svg aria-hidden="true" class="w-4 h-4 ml-1"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></button>
                                <div id="dropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdown-button">
                                        <li>
                                            <button type="button"
                                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Stakeholder</button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Developer</button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin</button>
                                        </li>

                                    </ul>
                                </div>
                                <div class="relative w-full">
                                    <input type="search" id="search-dropdown"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                        placeholder="Cari Disini" required>
                                    <button type="submit"
                                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-white uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama User
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Id User
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipe
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        No. Hp
                                    </th>
                                    <th scope="col" class="px-12 py-3">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $users)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $users->nama }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $users->id_users }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $users->email }}
                                        </td>
                                        @if ($users->tipe_user === 0)
                                            <td class="px-6 py-4">
                                                Stakeholder
                                            </td>
                                        @elseif($users->tipe_user === 1)
                                            <td class="px-6 py-4">
                                                Admin
                                            </td>
                                        @else
                                            <td class="px-6 py-4">
                                                Developer
                                            </td>
                                        @endif
                                        <td class="px-6 py-4">
                                            {{ $users->no_hp }}
                                        </td>
                                        <td class="px-12 py-4">
                                            <form action="/stake/takedown-user/{{$users->id_users}}" method="post" onsubmit="return confirm('Apakah anda yakin ingin men-takedown user ini?')">
                                                <button
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                    data-modal-target="popup-model" type="submit"
                                                    data-modal-toggle="popup-modal">Takedown
                                                </button>
                                            </form>

                                            <a href="detail-akun/{{$users->id_users}}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline mt-2">Periksa
                                                Profil</a>
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Kirim
                                                Pesan</a>
                                        </td>
                                    </tr>
                                @endforeach




                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
        </div>
    </div>
@endsection
