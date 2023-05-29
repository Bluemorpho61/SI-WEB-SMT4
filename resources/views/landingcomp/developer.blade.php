@include('layouts.app')

<div id="carker">
    <div class="flex space-x-10">
        <div class="mt-64 h-auto max-w-fit ml-9 ">
            <a
                class="p-2 h-9 w-36 rounded-lg bg-blue-600 font-bold text-white hover:bg-blue-500 active:ring-4 active:ring-purple-500";
                style="margin-left: 70px;"
                href="#">
                Stakeholder
            </a>
            <div class="mt-6">
                <a
                    class="p-2 h-9 w-36 rounded-lg text-center bg-blue-600 font-bold text-white hover:bg-blue-500 active:ring-4 active:ring-purple-500";
                    style="margin-left: 70px;"
                    href="#">
                    Developer </a>
            </div>
        </div>


        <!-- Tampilan Stakeholder -->
        <div class="bg-carker-color py-24 rounded-lg "; style="margin-left: 65px; margin-top: 65px;">
            <div class="ml-5 mt-7"; style="margin-left: 60px; margin-right: 100px;">
                <article class="space-y-3">

                    <div class="flex"; style="margin-top: -70px;">
                        <img src="{{ asset('assets/daftar_tim.png') }}"
                             class="h-20 w-20 object-cover max-h-fit max-w-fit" alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Daftarkan tim anda</h1>
                            <p class="ml-4 mt-2 max-w-10 text-sm font-sans">Tentukan tim skill dan keahlian dari tim developer anda,
                                unggah portofolio yang pernah tim anda buat sebelumnya</p>
                        </div>
                    </div>

                    <div class="flex"; style="margin-top: 50px;">
                        <img src="{{ asset('assets/data-carilah-proyek.png') }}"
                             class="h-20 w-20 object-cover max-h-fit max-w-fit" alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Carilah proyek </h1>
                            <p class="ml-4 mt-2 max-w-10 text-sm">Ada beragam jenis proyek aplikasi yang
                                dapat anda pilih di DevHunt. Pilihlah sesuai dengan kemampuan tim anda</p>
                        </div>
                    </div>

                    <div class="flex"; style="margin-top: 50px;">
                        <img src="{{ asset('assets/pasang_tawaran.png') }}" class="h-20 w-20 object-cover max-h-fit max-w-fit"
                             alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Pasang tawaran terbaik anda</h1>
                            <p class="ml-4 mt-2 max-w-10 text-sm">Ada beragam jenis proyek aplikasi yang dapat anda pilih di DevHunt.
                                Pilihlah yang sesuai dengan kemampuan tim anda,
                                berikan penawaran terbaik anda dan terima kontrak kerja</p>
                        </div>
                    </div>

                    <div class="flex"; style="margin-top: 50px; margin-bottom: -40px;">
                        <img src="{{ asset('assets/Dapatkan_hasil.png') }}" class="h-20 w-20 object-cover max-h-fit max-w-fit"
                             alt="foto">
                        <div class="h-fit w-fit border-none">
                            <h1 class="ml-4 h-fit w-fit font-bold">Dapatkan penghasilan</h1>
                            <p class="ml-4 mt-2 max-w-10 text-sm">Dapatkan penghasilan berdasarkan kontrak yang telah anda buat</p>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>
</div>
