@include('layouts.app')

{{-- @section('content') --}}


<div id="carker">
    <div class="flex space-x-10">
        <div class="mt-64 h-auto max-w-fit ml-9 ">
            <a
                class="p-2 h-9 w-36 rounded-lg bg-blue-600 font-bold text-white hover:bg-blue-500 active:ring-4 active:ring-purple-500"; 
                style="margin-left: 70px;";
                href="{{ route('stakeholder') }}">
                Stakeholder
            </a>
            <div class="mt-6">
                <a
                    class="p-2 h-9 w-36 rounded-lg text-center bg-blue-600 font-bold text-white hover:bg-blue-500 active:ring-4 active:ring-purple-500"; 
                    style="margin-left: 70px;"
                    href="{{ route('developer') }}">
                    Developer </a>
            </div>
        </div>


<!-- Tampilan Stakeholder -->
        <div class="bg-carker-color py-24 rounded-lg "; style="margin-left: 65px; margin-top: 65px;">
            <div class="ml-5 mt-7"; style="margin-left: 60px; margin-right: 100px;">
                <article class="space-y-3">
                    <div class="flex"; style="margin-top: -70px;">
                        <img src="{{ asset('assets/tambah-proyek.png') }}"
                            class="h-20 w-20 object-cover max-h-fit max-w-fit" alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Posting Proyek</h1>
                            <p class="ml-4 mt-2 max-w-10 text-sm font-sans">Cukup dengan memposting proyek yang ingin
                                anda capai, dan dapatkan tawaran dari beberapa tim developer dalam waktu sekejap</p>
                        </div>
                    </div>

                    <div class="flex"; style="margin-top: 50px;">
                        <img src="{{ asset('assets/pilih-dev.png') }}"
                            class="h-20 w-20 object-cover max-h-fit max-w-fit" alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Pilih tim developer</h1>
                            <p class="ml-4 mt-2 max-w-10 text-sm">Pilihlah tim developer yang sesuai dengan kriteria
                                anda, cek profilnya, hubungi developer dan buat kontrak</p>
                        </div>
                    </div>

                    <div class="flex"; style="margin-top: 50px; margin-bottom: -40px;">
                        <img src="{{ asset('assets/bayar.png') }}" class="h-20 w-20 object-cover max-h-fit max-w-fit"
                            alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Pilih tim developer</h1>
                            <p class="ml-4 mt-2 max-w-10 text-sm">Pilihlah tim developer yang sesuai dengan kriteria
                                anda, cek profilnya, hubungi developer dan buat kontrak</p>
                        </div>
                    </div>
                    
                </article>
            </div>
        </div>
    </div>
</div>
