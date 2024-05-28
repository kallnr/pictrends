<header x-data="{ mobileMenuOpen: open }" class="fixed w-full top-0 z-30 bg-putih   dark:bg-slate-800 dark:text-slate-200 ">
    <nav class="w-full top-0 max-w-7xl mx-auto flex items-center   lg:max-w-screen-xl py-2 lg:mx-auto">
        <div class="flex w-full items-center justify-center px-4 lg:justify-around">
            <div class="flex shrink-0">
                <a href="/post">
                    <h2 class="font-poppins text-slate-800 text-[20px] font-bold hidden lg:block ">Snapdrow</h2>
                </a>
            </div>
            {{-- <div class=" hidden lg:block">
                <ul class="flex justify-evenly ms-[-180px] gap-6 text-[14px] font-poppins">
                    <li><a href="/post"
                            class=" {{ Route::is('post') ? 'text-slate-600 dark:text-slate-100 font-semibold' : '' }}   text-gray-700  ">Home</a>
                    </li>
                    <li><a href="/explore"
                            class="{{ Route::is('explore') ? 'text-slate-600 font-semibold' : '' }}   text-gray-700   ">Explore</a>
                    </li>
                    <li><a href="/post/create"
                            class="{{ Route::is('post.create') ? 'text-slate-600 dark:text-slate-100 font-semibold' : '' }}   text-gray-700  ">Post</a>
                    </li>
                </ul>
            </div> --}}
            <div class="mt-2">
                <div class="">
                    <form action="{{ route('post') }}" method="GET">
                        <input type="text" name="search" id="search"
                            class="lg:w-[400px] w-[370px] mx-auto px-4 py-1 ml-10 rounded-full border border-slate-900 bg-putih  dark:text-black"
                            placeholder="Search..." value="{{ request('search') }}">
                        <div class="absolute  lg:ml-[360px] ml-[330px] mt-[-32px] ">
                            <button type="submit" class="w-7 h-7 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="dark:text-slate-800 bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="hidden lg:block lg:ms-[-150px]">
                <div class="">
                    <button id="dropdownInformationButton" data-dropdown-toggle="notif"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bell" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                        </svg>
                    </button>
                    <!-- dropdown notif-->


                    <div id="notif"
                        class=" hidden w-full max-w-md p-4 bg-slate-50 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-4">
                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Notifikasi</h5>
                            <a href="#"
                                class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">

                            </a>
                        </div>
                        <div class="h-[200px] overflow-y-auto">
                            <ul class=" h-100 divide-y divide-gray-200 dark:divide-gray-700 ">
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/asssets/c4.jfif" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Nael
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                Commented : bla bla bla
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-light  text-gray-900 dark:bg-slate-800 dark:text-white">
                                            <span class="text-[10px]">1 hourse</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center ">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/asssets/c11.jfif"
                                                alt="Bonnie image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Bonnie Green
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                like your picture
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            <span class="text-[10px]">1 hourse</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/asssets/c8.jfif"
                                                alt="Michael image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Michael Gough
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                like your picture
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            <span class="text-[10px]">1 hourse</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center ">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/asssets/c12.jfif" alt="Lana image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Lana Byrd
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                Commented : bla bla bla
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            <span class="text-[10px]">1 hourse</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="pt-3 pb-0 sm:pt-4">
                                    <div class="flex items-center ">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/asssets/c14.jfif"
                                                alt="Thomas image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Thomes Lean
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                like your picture
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            <span class="text-[10px]">1 hourse</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="">
                <div class="flex items-center justify-center gap-3">
                    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" type="button"
                        class="hidden lg:block bg-slate-500 rounded-full w-9 h-9 bg-cover"
                        style="background-image: url('/profile/{{ auth()->user()->profile }}');">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg"
                    width="40" height="50" fill="currentColor"
                    class=" text-putih dark:text-slate-800 bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg><img src="/profile/{{ auth()->user()->profile }}" alt=""
                    class="w-10 rounded-full absolute mt-[-50px]"> --}}
                    </button>
                    <div class="hidden lg:block">
                        <a href="/post/create"
                            class="bg-gray-500 flex justify-center items-center w-[26px] h-[26px] rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="text-putih bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            {{--
            <div class="flex">
                <span class="mr-2 text-sm text-slate-500 dark:text-slate-200">Light</span>
                <input type="checkbox" class="hidden" id="dark-toggle">
                <label for="dark-toggle">
                    <div class="flex  w-10 cursor-pointer items-center rounded-full bg-slate-500 p-1 dark:bg-white">
                        <div
                            class="toggle-circle h-4 w-4 rounded-full bg-slate-100  transition duration-300
                        ease-in-out dark:bg-blue-700">
                        </div>
                    </div>
                </label>
                <span class="ml-2 text-sm text-slate-500 dark:text-slate-200">Dark</span>
            </div> --}}

            <!-- Dropdown menu -->
            <div id="dropdownInformation"
                class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow w-44 bg-slate-50 dark:bg-slate-800 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div>{{ auth()->user()->name }}</div>
                    <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                    <li>
                        <a href="/user"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                    <li>
                        <a href="{{route('settings.index')}}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="/logout"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                        out</a>
                </div>
            </div>
        </div>
        <div
            class="lg:hidden fixed  bottom-0 right-0 left-0 bg-putih rounded-t-[20px] pb-2  dark:text-utama shadow-2xl px-8 pt-3">
            <ul class="flex justify-between text-slate-600">
                <li><a href="/post" class="">
                        <i class=" bi bi-house-door-fill"style="font-size: 25px;"></i>
                    </a></li>
                <li><a href="/post" for="search" class="" >
                        <i class="bi bi-search"style="font-size: 25px;"></i>
                    </a></li>
                <li><a href="/post/create"
                        class="w-[50px] h-[40px] bg-utama/70 rounded-md flex justify-center items-center">
                        <i class="text-putih bi bi-plus"style="font-size: 30px;"></i>
                    </a></li>
                <li><a href="" name="notifikasi" class="">
                        <i class="bi bi-bell"style="font-size: 25px;"></i>
                    </a></li>
                <li><a href="/user" class="">
                        <button type="button"
                            class="lg:block bg-slate-500 rounded-full w-9 h-9 bg-cover"style="background-image: url('/profile/{{ auth()->user()->profile }}');">
                            {{-- <svg
                                xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor"
                                class="dark:text-slate-800 text-putih bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg><img src="/profile/{{ auth()->user()->profile }}" alt=""
                                class="w-10 rounded-full absolute mt-[-50px]"> --}}
                        </button>

                    </a></li>
            </ul>
        </div>

    </nav>
</header>
