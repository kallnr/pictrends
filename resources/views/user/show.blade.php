@extends('layouts.master')
@section('title', 'Other User')
@section('content')
    <section class="hidden lg:block mt-[100px]">
        <div class="mt-[150px]"></div>
        <div
            class=" mt-[40px] w-full max-w-screen-md mx-auto bg-putih bord rounded-lg dark:bg-slate-800 dark:border-gray-700 ">

            <div class="flex flex-col items-center pb-10">

                <div type="button" class="bg-slate-500 rounded-full w-24 h-24 mb-3 bg-cover"
                    style="background-image: url('/profile/{{ $dataprofile->profile }}');">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg"
                        width="96" height="122" fill="currentColor"
                        class=" dark:text-slate-800 text-putih bi bi-person-fill" viewBox="0 0 16 16" >
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg> --}}
                    {{-- <img src="/profile/{{ auth()->user()->profile }}" alt=""
                        class="w-24 rounded-full absolute mt-[-122px]"> --}}
                </div>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $dataprofile->name }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $dataprofile->bio }}</span>
                <div class="flex gap-4 mt-2 ">
                    <small>{{ Auth::user()->followings->count() }}<span class="ms-1">followers</span></small>
                    <small>{{ Auth::user()->followers->count() }}<span class="ms-1">following</span></small>
                </div>
                <div class="flex mt-4 md:mt-6">
                    @if (Auth::user()->isNot($user))
                        @if (Auth::user()->follow($user))
                            <form action="{{ route('users.unfollow', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-putih bg-secondary border border-gray-300 rounded-lg hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">
                                    Followed</button>
                            </form>
                        @else
                            <form action="{{ route('users.follow', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-putih bg-utama border border-gray-300 rounded-lg hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">
                                    Follow</button>
                            </form>
                        @endif
                    @else
                        <a href="/user/create"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-putih border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Edit
                            Profile</a>
                    @endif
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-putih border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">
                        about
                    </button>
                    <!--modal-->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-putih rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        About
                                    </h3>
                                    <button type="button"
                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="authentication-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <div class="flex flex-col">
                                        <div class="mt-2">
                                            <div>
                                                <h2 class=" font-bold text-[16px] font-poppins ">Work</h2>
                                            </div>
                                            <div class="flex items-center mt-3 ml-1">
                                                <div
                                                    class="bg-slate-300 w-7 h-7 rounded-full flex justify-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-briefcase-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                                                        <path
                                                            d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
                                                    </svg>
                                                </div>
                                                <small class="ml-3 text-[14px] ">Programner</small>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div>
                                                <h2 class=" font-bold text-[16px] font-poppins ">Places lived</h2>
                                            </div>
                                            <div class="flex items-center mt-3 ml-1">
                                                <div
                                                    class="bg-slate-300 w-7 h-7 rounded-full flex justify-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                    </svg>
                                                </div>
                                                <small class="ml-3 text-[14px] ">Jakarta</small>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div>
                                                <h2 class=" font-bold text-[16px] font-poppins ">Basic info</h2>
                                            </div>
                                            <div class="flex items-center mt-3 ml-1">
                                                <div
                                                    class="bg-slate-300 w-7 h-7 rounded-full flex justify-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20"
                                                        fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                    </svg>
                                                </div>
                                                <small class="ml-3 text-[16px] ">{{ $dataprofile->jenis_kelamin }}</small>
                                            </div>
                                            <div class="flex items-center mt-2 ml-1">
                                                <div
                                                    class="bg-slate-300 w-7 h-7 rounded-full flex justify-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-cake2-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m2.899.804.595-.792.598.79A.747.747 0 0 1 4 1.806v4.886q-.532-.09-1-.201V1.813a.747.747 0 0 1-.1-1.01ZM13 1.806v4.685a15 15 0 0 1-1 .201v-4.88a.747.747 0 0 1-.1-1.007l.595-.792.598.79A.746.746 0 0 1 13 1.806m-3 0a.746.746 0 0 0 .092-1.004l-.598-.79-.595.792A.747.747 0 0 0 9 1.813v5.17q.512-.02 1-.055zm-3 0v5.176q-.512-.018-1-.054V1.813a.747.747 0 0 1-.1-1.01l.595-.79.598.789A.747.747 0 0 1 7 1.806" />
                                                        <path
                                                            d="M4.5 6.988V4.226a23 23 0 0 1 1-.114V7.16c0 .131.101.24.232.25l.231.017q.498.037 1.02.055l.258.01a.25.25 0 0 0 .26-.25V4.003a29 29 0 0 1 1 0V7.24a.25.25 0 0 0 .258.25l.259-.009q.52-.018 1.019-.055l.231-.017a.25.25 0 0 0 .232-.25V4.112q.518.047 1 .114v2.762a.25.25 0 0 0 .292.246l.291-.049q.547-.091 1.033-.208l.192-.046a.25.25 0 0 0 .192-.243V4.621c.672.184 1.251.409 1.677.678.415.261.823.655.823 1.2V13.5c0 .546-.408.94-.823 1.201-.44.278-1.043.51-1.745.696-1.41.376-3.33.603-5.432.603s-4.022-.227-5.432-.603c-.702-.187-1.305-.418-1.745-.696C.408 14.44 0 14.046 0 13.5v-7c0-.546.408-.94.823-1.201.426-.269 1.005-.494 1.677-.678v2.067c0 .116.08.216.192.243l.192.046q.486.116 1.033.208l.292.05a.25.25 0 0 0 .291-.247M1 8.82v1.659a1.935 1.935 0 0 0 2.298.43.935.935 0 0 1 1.08.175l.348.349a2 2 0 0 0 2.615.185l.059-.044a1 1 0 0 1 1.2 0l.06.044a2 2 0 0 0 2.613-.185l.348-.348a.94.94 0 0 1 1.082-.175c.781.39 1.718.208 2.297-.426V8.833l-.68.907a.94.94 0 0 1-1.17.276 1.94 1.94 0 0 0-2.236.363l-.348.348a1 1 0 0 1-1.307.092l-.06-.044a2 2 0 0 0-2.399 0l-.06.044a1 1 0 0 1-1.306-.092l-.35-.35a1.935 1.935 0 0 0-2.233-.362.935.935 0 0 1-1.168-.277z" />
                                                    </svg>
                                                </div>
                                                <div class="flex flex-col ml-3">
                                                    <small class="text-[14px] ">{{ $dataprofile->tgl_lahir }}</small>
                                                    <small class="mt-[-2px] text-[10px] font-light">Birthday</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tabs Menu -->
        <div class="mb-4  border-gray-200 dark:border-gray-700 mx-4 -sm:pl-[40px]">
            <ul class="flex flex-wrap  text-sm font-medium text-center justify-between lg:justify-normal md:justify-normal sm:pl-[260px] sm:justify-normal"
                id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="unggahan-tab"
                        data-tabs-target="#unggahan" type="button" role="tab" aria-controls="unggahan"
                        aria-selected="false">Post</button>
                </li>
                <li class="" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="album-tab" data-tabs-target="#album" type="button" role="tab" aria-controls="album"
                        aria-selected="false">Album</button>
                </li>
                <li class="" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="liked-tab" data-tabs-target="#liked" type="button" role="tab" aria-controls="liked"
                        aria-selected="false">Favorite</button>
                </li>
            </ul>
        </div>
    </section>
    <section class=" lg:hidden mx-auto mt-[50px]">



        <div class="w-full max-w-sm bg-putih   ">
            <div class="flex justify-end px-4 pt-4">
                <button id="dropdownButton" data-dropdown-toggle="dropdown"
                    class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                    type="button">
                    <span class="sr-only">Open dropdown</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 16 3">
                        <path
                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 ">
                    <ul class="py-2" aria-labelledby="dropdownButton">
                        <li class="px-3 mt-2">
                            <div class="flex flex-col">
                                <h2 class="font-bold text-[16px]">Account</h2>
                                <div>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">{{ $dataprofile->email }}</a>
                                </div>
                                <hr>
                            </div>
                        </li>
                        <li>
                            <a href="/editakun"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit
                                account</a>
                        </li>
                        <li>
                            <a href="/logout"
                                class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col items-center pb-10">
                <button type="button" class="bg-slate-500 rounded-full w-24 h-24 mb-3 bg-cover"
                    style="background-image: url('/profile/{{ $dataprofile->profile }}');">
                    {{-- <svg
                        xmlns="http://www.w3.org/2000/svg" width="96" height="122" fill="currentColor"
                        class=" text-putih bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg><img src="/profile/{{ $dataprofile->profile }}" alt=""
                        class="w-24 rounded-full absolute mt-[-122px]"> --}}
                </button>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $dataprofile->name }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $dataprofile->bio }}</span>
                <div class="flex mt-4 md:mt-6">
                    @if (Auth::id())
                        <a href="/user/create"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-putih bg-utama border border-gray-300 rounded-lg hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">
                            Follow</a>
                    @else
                        <a href="/user/create"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-putih border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Edit
                            Profile</a>
                    @endif
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-putihborder border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">About</a>
                </div>
            </div>
        </div>
        <div class="mb-4  border-gray-200 dark:border-gray-700 mx-4 sm:pl-[40px]">
            <ul class="flex flex-wrap  text-sm font-medium text-center justify-center lg:justify-normal md:justify-normal sm:pl-[260px] sm:justify-normal"
                id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="unggahan-tab"
                        data-tabs-target="#unggahan" type="button" role="tab" aria-controls="unggahan"
                        aria-selected="false">Post</button>
                </li>
                <li class="" role="presentation">
                    @if (auth()->user()->id)
                    @else
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="album-tab" data-tabs-target="#album" type="button" role="tab"
                            aria-controls="album" aria-selected="false">Album</button>
                    @endif
                </li>
                <li class="" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="liked-tab" data-tabs-target="#liked" type="button" role="tab" aria-controls="liked"
                        aria-selected="false">Favorite</button>
                </li>
            </ul>
        </div>

    </section>
    <div id="default-tab-content">
        <!-- unggahan -->
        <div class="hidden p-4 rounded-lg bg-putih mb-14 dark:bg-slate-800" id="unggahan" role="tabpanel"
            aria-labelledby="unggahan-tab">
            <div class="max-w-screen-md columns-2 gap-2 mx-auto  space-y-2 lg:columns-3">
                @foreach ($datapic as $ft)
                    <div class="overflow-hidden" x-data="{ open: false }">
                        <a href="/post/{{ $ft->id }}">
                            <img src="/gallery/{{ $ft->url }}" alt="" class="rounded-[20px]">
                        </a>
                        <div class="flex justify-between">
                            <h2>{{ $ft->judul_foto }}</h2>
                            <button @click=" open = !open" class="mx-2 text-[20px] mt-0">...</button>
                            <!-- Dropdown menu -->
                            <div x-show="open" @click.outside=" open = false "
                                class="z-10 absolute text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 ">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Share</a>
                                    </li>
                                    <li>
                                        <a href="/editakun"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Save
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/editakun"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/logout"
                                            class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <!-- Album -->
        <div class="hidden p-4 rounded-lg mb-14" id="album" role="tabpanel" aria-labelledby="album-tab">
            <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-4 lg:grid-cols-6 gap-3 md:pl-[260px] sm:pl-[260px]">
                @foreach ($dataalbum as $item)
                    <a href="/album/{{ $item->id }}">
                        <div class="aspect-square rounded-lg bg-cover transition duration-500 ease-in-out hover:scale-105"
                            style="background-image: url('/fotoalbums/{{ $item->foto_album }}');">
                            {{-- <a href="#">
                        <img class="rounded-md" src="" alt=""
                            class="transition-transform duration-300 transform hover:scale-110" />
                    </a> --}}
                        </div>
                        <div class=" items-center z ">
                            <div class=" flex justify-center mt-2 ">
                                <h2 class="text-[14px] text-slate-800 font-normal">
                                    {{ $item->judul_album }}
                                </h2>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <!-- Liked -->
            <div class="hidden p-4 rounded-lg mb-14" id="liked" role="tabpanel" aria-labelledby="liked-tab">

            </div>
        </div>
        </section>
    @endsection
