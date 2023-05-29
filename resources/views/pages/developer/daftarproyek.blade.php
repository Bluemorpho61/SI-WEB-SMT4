@extends('layouts.sidebardev')
@section('content-dev')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-24 rounded ">
                <p class="text-2xl text-black">Daftar Proyek</p>
            </div>

        </div>
        <div class="flex  overflow-x-auto  p-10 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <div class="relative shadow-md">
                <p class="font-bold font-sans mb-2">Text</p>
                <table class="w-full text-sm text-left text-gray-500 ">
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


                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               Proyek
                            </th>
                            <td class="px-6 py-4">
                                Proyej
                            </td>
                            <td class="px-6 py-4">
                               {{now()}}
                            </td>
                            <td class="px-6 py-4">
                              Text
                            </td>
                            <td class="px-6 py-4">
                        <a href="/dev/daftar-proyek/progress-proyek">Lihat detail</a>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>

    </div>
</div>
<script>
    document.getElementById("openModal").addEventListener("click", function() {
        document.getElementById("modal").classList.remove("hidden");
    });

    document.getElementById("closeModal").addEventListener("click", function() {
        document.getElementById("modal").classList.add("hidden");
    });
</script>

@endsection
