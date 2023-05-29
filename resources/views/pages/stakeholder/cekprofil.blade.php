@extends('layouts.sidebarstake')
@section('content-stake')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded ">
                    <p class="text-2xl font-extrabold text-black">Profil Tim</p>
                </div>


            </div>

            <div class="flex flex-col text-white bg-purple-700 py-3 px-4  h-auto mb-4 rounded  dark:bg-gray-800">
                <div class="flex flex-row"><img class="rounded-full w-40 h-40" src="{{asset('profile.png')}}"
                                                alt="image description">
                    <h1 class="font-bold text-2xl ml-3 h-fit">Nama Developer</h1>
                    <div class=" p-2 w-64 h-auto self-center -ml-28 ">
                        <p class="font-semibold">Kontak:</p>
                        <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                                <path fill-rule="evenodd"
                                      d="M17.834 6.166a8.25 8.25 0 100 11.668.75.75 0 011.06 1.06c-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788 3.807-3.808 9.98-3.808 13.788 0A9.722 9.722 0 0121.75 12c0 .975-.296 1.887-.809 2.571-.514.685-1.28 1.179-2.191 1.179-.904 0-1.666-.487-2.18-1.164a5.25 5.25 0 11-.82-6.26V8.25a.75.75 0 011.5 0V12c0 .682.208 1.27.509 1.671.3.401.659.579.991.579.332 0 .69-.178.991-.579.3-.4.509-.99.509-1.671a8.222 8.222 0 00-2.416-5.834zM15.75 12a3.75 3.75 0 10-7.5 0 3.75 3.75 0 007.5 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <p>Alamatemail@email.com</p></div>
                        <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                                <path
                                    d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z"/>
                            </svg>
                            <p>AlamatWebsite.com</p></div>


                    </div>
                   <p class="font-light text-green-300">Status: Siap menerima Proyek</p>
                </div>
            </div>


            <div class="grid grid-cols-3 max-h-72 overflow-y-scroll  gap-4  h-auto px-3 py-3 rounded bg-gray-50 dark:bg-gray-800 container">
                <div class="flex flex-col bg-gray-400 w-64 h-auto">
                    <img src="{{asset('portfolio.png')}}" class="h-36" alt="foto">
                    <div class="py-3">
                        <h1 class="font-bold font-sans text-2xl text-white">Nama Proyek</h1>
                        <h2 class="text-sm text-blue-800">Klien: PT Jaya Terus Corp</h2>
                        <p class="text-yellow-300">Rating 4/5</p>
                        <p class="font-extralight text-sm max-w-[250px] max-h-[100px] overflow-hidden">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci autem eos eum inventore iste libero nihil omnis perspiciatis recusandae velit? Necessitatibus optio perferendis placeat quae quod tempore, ut. Ab accusantium alias commodi consequuntur dignissimos distinctio dolor doloribus eos expedita facilis ipsa ipsam labore, molestiae nisi, non nulla perferendis quidem quis sapiente totam unde voluptatem voluptates. Consequuntur eaque illum maxime minima neque nihil nostrum quos totam! Accusantium adipisci alias architecto cum enim impedit laboriosam nostrum, placeat. Beatae distinctio dolore nostrum repellendus sit totam voluptates. Eius eos et eum fuga, laboriosam maiores maxime obcaecati perferendis! A accusamus amet assumenda beatae blanditiis, dicta doloribus excepturi iure labore modi mollitia nemo neque nobis numquam officia perferendis perspiciatis quas quasi qui ratione! Ad dignissimos distinctio doloribus ea harum ipsa mollitia, unde veritatis voluptate voluptates? Adipisci aspernatur iure iusto molestiae necessitatibus numquam odio, odit quisquam rem tenetur? Aperiam asperiores aspernatur consequatur dolore error explicabo, harum labore minima nesciunt non sapiente, sunt tempora, velit veritatis voluptatem! Fugiat illum impedit pariatur porro possimus quasi reprehenderit sequi tempora ullam ut! Aut blanditiis consequuntur distinctio dolores enim inventore minus modi nemo obcaecati officia officiis, quibusdam reiciendis repellendus sit suscipit vero voluptatem. Adipisci asperiores dolores id iure reiciendis unde velit. Molestiae?</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
