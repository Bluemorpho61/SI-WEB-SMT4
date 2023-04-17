@include('layouts.app')

{{-- @section('content') --}}

<div id="carker">
    <div class="flex space-x-10">
        <div class="mt-64 h-auto max-w-fit ml-9 ">
            <button
                class="h-9 w-24 rounded-lg bg-blue-600 font-bold text-white hover:bg-blue-500 active:ring-4 active:ring-purple-500">Stakeholder</button>
            <div class="mt-4">
                <button
                    class="h-9 w-24 rounded-lg text-center bg-blue-600 font-bold text-white hover:bg-blue-500 active:ring-4 active:ring-purple-500">
                    Developer
                </button>
            </div>
        </div>
        <div class="bg-carker-color h-auto py-24 w-auto rounded-lg">
            <div class="ml-5 mt-7">
                <article class="space-y-3">
                    <div class="flex">
                        <img src="{{ asset('assets/tambah-proyek.png') }}"
                            class="h-20 w-20 object-cover max-h-fit max-w-fit" alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Posting Proyek</h1>
                            <p class="ml-4 mt-2 max-w-xs text-sm font-sans">Cukup dengan memposting proyek yang ingin
                                anda capai,
                                dan dapatkan tawaran dari beberapa tim developer dalam waktu sekejap</p>
                        </div>
                    </div>

                    <div class="flex">
                        <img src="{{ asset('assets/pilih-dev.png') }}"
                            class="h-20 w-20 object-cover max-h-fit max-w-fit" alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Pilih tim developer</h1>
                            <p class="ml-4 mt-2 max-w-xs text-sm">Pilihlah tim developer yang sesuai dengan kriteria
                                anda, cek profilnya, hubungi developer dan buat kontrak</p>
                        </div>
                    </div>

                    <div class="flex">
                        <img src="{{ asset('assets/bayar.png') }}" class="h-20 w-20 object-cover max-h-fit max-w-fit"
                            alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Pilih tim developer</h1>
                            <p class="ml-4 mt-2 max-w-xs text-sm">Pilihlah tim developer yang sesuai dengan kriteria
                                anda, cek profilnya, hubungi developer dan buat kontrak</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
