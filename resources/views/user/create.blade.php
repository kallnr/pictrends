@extends('layouts.master')
@section('title', 'Edit profile')
@section('content')
    <div class="lg:mt-[120px] mt-[50px] ">
        <div class="flex mx-auto py-7 px-10 max-w-screen-lg">
            <a href="/user"><b><i class="bi bi-arrow-left" style="font-size: 25px; font-weight:900;"></i></a>
        </div>
    </div>
    <section class="max-w-screen-md mx-auto mt-[-70px] hidden lg:block">
        <div class="flex justify-center">
            <h1 class="text-blue-700 font-bold">Edit Profile</h1>
        </div>
    </section>

    <section class="max-w-screen-md mx-auto lg:mt-10 mt-[-40px]">
        <div class="flex justify-center">
            <div class="w-3/5 max-[480px]:w-full">
                <form action="/user" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div
                        class="bg-putih text-slate-800  dark:bg-slate-600 dark:text-slate-300 rounded-[23px]  lg:shadow-md lg:border  ">
                        <div class="flex flex-col lg:p-3  justify-center">
                            <div class="flex justify-center items-center flex-col p-3" x-data="picturePreview()">
                                <div class="w-[120px] h-[120px] rounded-full bg-gray-500" ><svg
                                        xmlns="http://www.w3.org/2000/svg" width="120" height="150" fill="currentColor"
                                        class=" text-putih bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                    <img id="preview" src="/profile/{{ old('profile', Auth::User()->profile) }}"
                                        alt="" class=" W-[120px] h-[120px] absolute mt-[-150px] rounded-full">
                                </div>
                                <div @click=" document.getElementById( 'input-file' ).cilck "
                                    class="absolute mt-[90px] ml-[70px]">

                                    <label for="input-file">
                                        <div class="w-8 h-8 bg-putih dark:bg-slate-700 shadow rounded-full">
                                            <div class="flex justify-center py-[5px]">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    style="font-color:white" fill="currentColor" class=" bi bi-camera"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z" />
                                                    <path
                                                        d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
                                                </svg>
                                            </div>
                                        </div>
                                        <input @change="showPreview(event)" type="file" name="fileFoto" accept="image"
                                            id="input-file" class="hidden" value="{{ $dataprofile->profile }}">
                                    </label>

                                </div>

                            </div>
                            <div class="flex-col px-5 lg:mt-2">
                                <div>
                                    <div class="flex flex-col">
                                        <label for="name" class="text-[16px] font-semibold ml-1">Username</label>
                                        <input type="text" name="name" id="name" value="{{ $dataprofile->name }}"
                                            class="w-full h-9 rounded-md font-normal font-poppins mt-1 dark:border-blue-700  dark:bg-slate-800 border-gray-300">
                                    </div>
                                </div>
                                <div class="flex columns-2 gap-3 mt-2">
                                    <div class="flex flex-col">
                                        <label for="tgl_lahir" class="text-[16px] font-semibold ml-1">Date of birth</label>
                                        <input type="date" name="tgl_lahir" id="tgl_lahir"
                                            value="{{ $dataprofile->tgl_lahir }}"
                                            class="w-full h-9 rounded-md font-normal font-poppins mt-1 dark:border-blue-700 dark:bg-slate-800 border-gray-300">
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="name" class="text-[16px] font-semibold ml-1">Gender</label>
                                        <select type="text" name="jenis_kelamin" id=""
                                            class="w-full h-9 rounded-md font-normal font-poppins mt-1 dark:border-blue-700 dark:bg-slate-800 border-gray-300">
                                            <option value=""></option>
                                            @foreach (['laki-laki', 'perempuan'] as $option)
                                                <option value="{{ $option }}"
                                                    {{ $option == $dataprofile->jenis_kelamin ? 'selected' : '' }}>
                                                    {{ $option }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="flex flex-col">
                                        <label for="bio" class="text-[16px] font-semibold ml-1">Bio</label>
                                        <input type="text" value=" {{ $dataprofile->bio }}" name="bio" id="bio"
                                            class="px-2 font-normal rounded-md dark:bg-slate-800 dark:border-blue-700 border-gray-300 ">

                                        </input>
                                    </div>
                                </div>
                                <div class="mt-3 mb-4">
                                    <div class=" lg:ml-[200px] ">
                                        <button type="submit"
                                            class="justify-center w-full text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </section>

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
    <br><br>
@endsection
