@extends('layouts.master')
@section('title', 'Post')
@section('content')
    <section class="">
        <div class="lg:mt-[120px] mt-[70px] ">
            <div class="flex mx-auto lg:py-7 lg:px-10 py-2 px-4 max-w-screen-lg">
                <a href="/post"><b><i class="bi bi-arrow-left" style="font-size: 25px; font-weight:900;"></i></a>
            </div>
        </div>
        <form action="/post" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex mx-auto max-w-screen-lg px-3 lg:px-[100px] flex-wrap  justify-center lg:gap-4">
                <div x-data="picturePreview()">
                    <div class="w-[300px] lg:w-[250px] lg:h-[300px] h-[200px]  rounded-[20px] bg-gray-300 lg:mt-5 ">
                        <div class="flex flex-col justify-center items-center">
                            <label for="input-file" @click=" document.getElementById( 'input-file' ).cilck ">
                                <div class="flex flex-col justify-center items-center mt-7">
                                    <div class="lg:mx-[90px] lg:mt-[70px] ">
                                        <i class="bi bi-cloud-arrow-up" style="font-size: 60px;"></i>
                                    </div>
                                    <div class="mt-[-10px]">
                                        <p class="text-[10px] text-center font-poppins font-light">Click to upload or drag
                                            and drop <br>
                                            JPG, PNG or GIF (Max 1024 MB)</p>
                                    </div>
                                    <div
                                        class="absolute mt-8 lg:mt-[60px]  w-[250px] lg:h-[300px] h-[200px]  rounded-[20px]">
                                        <img id="preview" src="" alt="=="
                                            class=" w-[250px] rounded-[20px] ">
                                    </div>
                                </div>
                                <input @change="showPreview(event)" type="file" name="fileFoto" accept="image"
                                    id="input-file" class="hidden">
                            </label>
                        </div>
                    </div>

                </div>
                <div class=" ">
                    <div class="flex flex-col lg:mt-2 mt-4 font-semibold">
                        <div>
                            <h2 class=" lg:font-semibold  mb-1">Title</h2>
                            <input type="text" name="judul_foto" value="{{ old('judul_foto') }}"
                                class="bg-putih  rounded-md lg:w-[380px] lg:h-[35px] w-full form-control @error('judul_foto') is-invalid @enderror">
                        </div>
                        <div class="flex gap-4">
                            <div class="mt-2  items-center ">
                                <h2 class=" lg:font-semibold  mb-1">Album</h2>
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
                                    <button type="button" data-modal-target="authentication-modal"
                                        data-modal-toggle="authentication-modal"
                                        class=" items-center w-9 h-9 rounded-md border-1 border-slate-500">+</button>
                                </div>
                            </div>
                            <div class="mt-2  items-center ">
                                <h2 class=" lg:font-semibold  mb-1">Category</h2>
                                <div class="">
                                    <select type="text" name="kategori_id"
                                        class="bg-putih rounded-md lg:w-full h-[35px] w-full py-1 text-[14px] font-normal form-control @error('judul_foto') is-invalid @enderror">
                                        <option value="">Select a category</option>
                                        @foreach ($datatag as $item)
                                            <option value="{{ $item->id }}" name="album">{{ $item->tag }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h2 class=" lg:font-semibold  mb-1">Deskripsi</h2>
                            <textarea name="deskripsi" class="bg-putih rounded-md text-[16px] font-normal px-2 w-full  h-[120px]"
                                value="{{ old('deskripsi') }}"></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="bg-primary w-full h-[40px] rounded-[10px] text-white">Posting</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        </div>
    </section>
    <br><br><br><br><br><br>
    <!--Modal-->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-putih rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add Album
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="/album" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                Album</label>
                            <input type="text" name="judul_album"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="New album" />
                            <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                Foto Album</label>
                            <input type="file" name="foto_album" value="c11.jfif"
                                class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                        </div>
                        <button type="submit"
                            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="mt-[70px] lg:hidden">
        <form action="/save-post" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="flex mx-auto max-w-screen-md flex-wrap justify-center ">
                <div class="">
                    <div class="w-[300px] h-[300px] rounded-[20px] bg-gray-300 items-center mt-2">
                        <div class="flex flex-col justify-center items-center">
                            <label for="input-file">
                                <div class="grid place-items-center">
                                    <div class=" mt-[70px] ml-11">
                                        <i class="bi bi-cloud-arrow-up" style="font-size: 60px;"></i>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-center font-poppins font-light">Click to upload or drag
                                            and drop <br>
                                            JPG, PNG or GIF (Max 1024 MB)</p>
                                    </div>
                                </div>
                                <input type="file" id="input-file"class="hidden">

                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mt-3 max-[200px]:w-full px-2">
                        <div class="flex flex-col flex-wrap">
                            <h3>Judul</h3>
                            <input type="text" name="" id="" class="py-1 rounded-md border-slate-500">
                            <h3 class="mt-4">Deskripsi</h3>
                            <textarea name="" id="" cols="28" rows="10" class="w-full h-20 border-slate-500 rounded-xl"></textarea>
                            <div class="flex flex-row justify-between">
                                <button class="px-6 py-1 mt-3 text-white rounded-md bg-primary">Post</button>

                            </div>
                        </div><br><br><br><br>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section> --}}

    <script>
        function picturePreview() {
            return {
                showPreview: (event) => {
                    if (event.target.files.length > 0) {
                        var src = URL.createObjectURL(event.target.files[0]);
                        document.getElementById('preview').src = src;
                    }
                }
            }
        }
    </script>
@endsection
