@extends('layouts.master')
{{-- @push('cssjsexternal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush --}}
@section('title', 'Home')
@section('content')

    <section class="lg:mt-[100px]  mt-[60px]">
        <div class="max-w-screen-md  flex flex-col lg:flex-row justify-center mx-auto lg:mb-10 mb-3">
            {{-- <h class="hidden lg:block text-[25px] font-medium">Welcome to <span
                    class="text-utama font-bold">pictrends</span>,👋</h> --}}
            <div
                class="flex overflow-x-scroll lg:w-[750px] lg:rounded-full mx-auto w-[370px] no-scrollbar  space-x-8 lg:mb-3">
                @foreach ($kategori as $item)
                    <section class="mx-2">
                        <div class="flex flex-col">
                            <a href="/explore/{{ $item->id }}">
                                <div class="   hidden lg:block ">
                                    <div class="flex items-center justify-center">
                                        <div class="w-[60px] h-[60px] bg-blue-300 rounded-full bg-cover bg-center"
                                            style="background-image: url('/asssets/{{ $item->foto_kategori }}');">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flex justify-center items-center ">
                                <a href="/explore/{{ $item->id }}"><h2
                                    class="text-[12px] lg:text-slate-900 text-slate-800 font-semibold font-poppins py-2 px-3 bg-slate-300 lg:bg-putih rounded-full">
                                    {{ $item->judul_kategori }}
                                </h2></a>
                            </div>
                        </div>
                    </section>
                @endforeach


            </div>
        </div>
        <div class=" max-w-screen-md columns-2  lg:gap-3 mx-auto px-2 space-y-2 lg:columns-5 lg:max-w-screen-lg"
            id="homedata">
            @foreach ($datapic as $ft)
                <div class="overflow-hidden mb-3">
                    <a href="{{ route('post.show', $ft->id) }}"><img src="/gallery/{{ $ft->url }}" alt=""
                            class="rounded-[20px]"></a>
                    <div class="flex justify-between " x-data="{ open: false }">
                        <a href="/user/{{ $ft->user->id }}">
                            <p
                                class="inline-flex mt-2 items-center mr-3 text-[12px] text-gray-900 dark:text-white font-normal">
                                <img class="mr-2 w-6 h-6 rounded-full"
                                    src="/profile/{{ $ft->user->profile }}">{{ $ft->user->name }}
                            </p>
                        </a>

                        <button @click=" open = !open " class="mx-2 text-[20px] mt-0">...</button>

                        <!-- Dropdown menu -->
                        <div x-show="open" @click.outside=" open = false "
                            class="z-10 absolute text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 ">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Share</a>
                                </li>
                                <li>
                                    {{-- <livewire:post-saves :key="'save' .$post->id . now()" :$post /> --}}
                                    @livewire('post-saves')
                                </li>
                                <li>
                                    <a href="/logout"
                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Report</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="   overflow-hidden">
                <img src="/asssets/c16.jfif" alt="" class="rounded-[20px]">
                <div class="flex justify-between">
                    <h2>Kucing</h2>
                    <button class="mx-2 text-[20px] mt-0">...</button>
                </div>
            </div>
            <div class="  overflow-hidden">
                <img src="/asssets/c14.jfif" alt="" class="rounded-[20px]">
                <div class="flex justify-between">
                    <h2>Kucing</h2>
                    <button class="mx-2 text-[20px] mt-0">...</button>
                </div>
            </div>
            <div class="   overflow-hidden">
                <img src="/asssets/c15.jfif" alt="" class="rounded-[20px]">
                <div class="flex justify-between">
                    <h2>Kucing</h2>
                    <button class="mx-2 text-[20px] mt-0">...</button>
                </div>
            </div>
            <div class="   overflow-hidden">
                <img src="/asssets/c16.jfif" alt="" class="rounded-[20px]">
                <div class="flex justify-between">
                    <h2>Kucing</h2>
                    <button class="mx-2 text-[20px] mt-0">...</button>
                </div>
            </div>
            <div class="   overflow-hidden">
                <img src="/asssets/c13.jfif" alt="" class="rounded-[20px]">
                <div class="flex justify-between">
                    <h2>Kucing</h2>
                    <button class="mx-2 text-[20px] mt-0">...</button>
                </div>
            </div>
            <div class="   overflow-hidden">
                <img src="/asssets/Wallpaper.jpg" alt="" class="rounded-[20px]">
                <div class="flex justify-between">
                    <h2>Kucing</h2>
                    <button class="mx-2 text-[20px] mt-0">...</button>
                </div>
            </div> --}}

        </div>
    </section>

@endsection
{{-- @push('footerjsexternal')
    <script src="/javascript/home.js"></script>
@endpush --}}
