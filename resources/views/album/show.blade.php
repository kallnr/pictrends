@extends('layouts.master')
{{-- @push('cssjsexternal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush --}}
@section('title', 'Category')
@section('content')

    <section class="lg:mt-[90px] mt-[80px]">
        <div class="lg:mt-[120px] mt-[89px]  ">
            <a href="{{ url()->previous() }}">
                <div class="hidden lg:block lg:mx-auto   px-5 lg:py-7 lg:px-10 lg:max-w-screen-lg  ">
                    <b><i class="bi bi-arrow-left" style="font-size: 25px; font-weight:900;"></i>
            </a>
        </div>
        <div class="max-w-screen-md  flex flex-col lg:flex-row justify-center mx-auto mb-10">
            <h class="hidden lg:block text-[25px] font-medium">{{ $album->judul_album }}</h>
        </div>

        <div class=" max-w-screen-md columns-2 gap-2 mx-auto px-2 space-y-2 lg:columns-4 lg:max-w-screen-md" id="homedata">
            @foreach ($dataalbum as $item)
                <div class="overflow-hidden">
                    <a href="/post/{{ $item->id }}"><img src="/gallery/{{ $item->url }}" alt=""
                            class="rounded-[20px]"></a>
                    <div class="flex justify-between" x-data="{ open: false }">
                        <h2 class="font-semibold mt-2 px-1">{{ $item->judul_foto }}</h2>

                        <button @click=" open = !open " class="mx-2 text-[20px] mt-0">...</button>

                        <!-- Dropdown menu -->
                        <div x-show="open" @click.outside=" open = false "
                            class="z-10 absolute text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 ">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                                {{-- <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"></a>
                                </li>
                                <li>
                                    <a href="/editakun"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    </a>
                                </li> --}}
                                <li>
                                    <form action="/removefromalbum/{{$item->id}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                            class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
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
