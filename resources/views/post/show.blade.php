@extends('layouts.master')
@section('title', 'Detail post')

{{-- @push('css')
    @livewireStyles
@endpush
@push('js')
    @livewireScripts
@endpush --}}


@section('content')

    <section class="">
        <div class="lg:mt-[120px] mt-[89px]  ">
            <a href="{{ url()->previous() }}">
                <div class="hidden lg:block lg:mx-auto   px-5 lg:py-7 lg:px-10 lg:max-w-screen-lg  ">
                    <b><i class="bi bi-arrow-left" style="font-size: 25px; font-weight:900;"></i>
            </a>
        </div>

        <div class=" flex absolute justify-center items-center w-8 h-8 bg-putih rounded-full ml-1 lg:hidden">
            <a href="/post"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="dark:text-black bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                </svg></a>
        </div>
        </div>
        </div>
        <div
            class="flex flex-col lg:flex-row max-w-screen-md  mt-[-40px] dark:text-slate-800 lg:border  bg-putih lg:shadow-xl pb-4 lg:rounded-[20px] dark:bg-slate-800  mx-auto  lg:px-0 ">
            <div class="lg:w-1/2 w-full ">
                <div class="flex flex-col">
                    <div class="lg:ml-2  z-10 mt-2 flex justify-end lg:justify-start">
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                            class="flex justify-center items-center">
                            <div class="flex justify-center  w-[90px] h-[28px] bg-putih/100 rounded-full">
                                <span class="pb-7 mr-1 items-center"><i class="bi bi-plus-circle-fill"
                                        style="font-size: 20px;"></i></span>
                                <span class="font-poppins text-[10px] font-light mt-2">Add album</span>
                            </div>
                        </button>
                    </div>

                    <img src="/gallery/{{ $detailfoto->url }}" alt=""
                        class="mt-[-38px]  lg:rounded-l-[20px] rounded-md">


                </div>
            </div>
            <div class="lg:w-1/2 w-full dark:text-slate-200">
                <div class="flex justify-end px-4 pt-1" x-data="{ open: false }">
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
                                <a href="/editakun"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Save
                                </a>
                            </li>
                            <li>
                                <a href="/logout"
                                    class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Report</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-between px-4 py-2 ">
                    <div class="flex flex-row items-center gap-2">
                        <div>
                            <a href="/user/{{ $detailfoto->user->id }}"><img
                                    class="w-10 h-10 rounded-full bg-cover bg-gray-500 "
                                    style="background-image: url('/profile/{{ $detailfoto->user->profile }}');"
                                    alt="">
                            </a>
                        </div>
                        <div class="flex flex-col">
                            <a href="/user/{{ $detailfoto->user->id }}"
                                class="text-[14px]">{{ $detailfoto->user->name }}</a>
                            <small
                                class=" font-normal text-[14px] text-gray-700">{{ Auth::user()->followings->count() }}<span
                                    class="ms-1">followers</span></small>
                        </div>
                    </div>
                    @if (Auth::user()->isNot($user))
                        <div>
                            {{-- auth()->check() &&  --}}
                            {{-- @if (auth()->user()->id !== $user->id) --}}
                            {{-- @if (auth()->check() && auth()->user()->id !== $user->id) --}}

                            @if (Auth::user()->follow($user))
                                <form action="{{ route('users.unfollow', $user->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="px-2 rounded-full bg-secondary text-white text-[10px] font-semibold p-1">
                                        Followed
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('users.follow', $user->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="px-2 rounded-full bg-utama text-white text-[10px] font-semibold p-1">
                                        Follow
                                    </button>
                                </form>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="flex items-center justify-between px-4 mt-4">
                    <div class="flex flex-col px-2">
                        <h2 class="text-[20px] font-poppins font-semibold">{{ $detailfoto->judul_foto }}</h2>
                        <p class="text-[14px] font-poppins font-normal mt-1 px-1">
                            <span class="text-[12px] font-normal text-slate-500"> #{{ $detailfoto->kategori->tag }}</span>
                            <br>
                            {{ $detailfoto->deskripsi }}
                    </div>
                    <div class="flex  justify-center items-center lg:flex-col" x-data="{ open: false }">
                        <div class="flex lg:hidden">
                            <button @click=" open = !open " class="flex">
                                <div class="font-poppins text-[14px] font-light mr-2 mt-[6px]">
                                    {{ $post->komentar()->count() }}</div>
                                <div><i class="bi bi-chat-dots" style="font-size: 20px;"></i></div>
                            </button>
                            <!-- Dropdown menu -->
                            <div x-show="open"
                                class="absolute z-20 mt-5 left-0  w-full justify-center pb-2  bg-white rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
                                aria-labelledby="dropdownNotificationButton">
                                <div
                                    class=" flex justify-between items-center px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-putih border dark:bg-gray-800 dark:text-white mb-3 pb-3">
                                    <div>Comments <span class="ms-2">{{ $post->komentar()->count() }}</span></div>
                                    <div @click=" open = false "><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                        </svg></div>
                                </div>
                                @livewire('mobile-post-comments', ['id' => $post->id])
                            </div>


                        </div>
                        {{-- @livewire('like-button') --}}
                        <livewire:like-button :key="$post->id . now()" :$post />
                    </div>
                </div>
                <div class="mt-4 px-4 hidden lg:block">
                    <div class=" flex px-2 font-normal text-gray-500 dark:text-gray-300">
                        Comments <span class="ml-3">{{ $post->komentar()->count() }}</span>
                    </div>
                    <hr>
                </div>
                <div class="hidden lg:block">


                    {{-- <livewire:post-comments :key="'comment' . $post->id" :$post /> --}}
                    {{-- <livewire:post.comment/> --}}
                    {{-- @livewire('post.comment',['id'=>$fotos_id->id]) --}}
                    @livewire('post-comments', ['id' => $post->id])



                </div>
            </div>
        </div>
    </section>
    <!--End Dekstop-->

    <!--postingan-->
    <section class="lg:mt-[120px] mt-[20px]">
        <div class=" max-w-screen-md columns-2 gap-3 mx-auto px-2 space-y-2 lg:columns-5 lg:max-w-screen-lg"
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

        </div>
    </section>

 <!-- Main modal -->
 <div id="authentication-modal" tabindex="-1" aria-hidden="true"
 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
 <div class="relative p-4 w-full max-w-md max-h-full">
     <!-- Modal content -->
     <div class="relative bg-putih rounded-lg shadow dark:bg-gray-700">
         <!-- Modal header -->
         <div
             class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
             <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                 Add new album
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
             <form class="space-y-4" action="/updatealbm/{{$addalbum->id}}" method="POST">
                 @csrf
                 <div class="flex gap-2">
                     <select type="text" name="album"
                         class="bg-putih rounded-md lg:w-[150px] h-[35px] w-full py-1 text-[14px] font-normal">
                         <option value="" class=" ">Add to album</option>
                         @foreach ($dataalbum as $item)
                             <option value="{{ $item->id }}" name="album" >
                                 {{ $item->judul_album }}
                             </option>
                         @endforeach
                     </select>
                 <button type="submit"
                     class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                     album</button>

             </form>
         </div>
     </div>
 </div>
</div>



    <br><br><br><br><br>
@endsection
