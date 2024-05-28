@extends('layouts.master')
@section('title', 'Post')
@section('content')
    <section class="lg:mt-[100px] mt-[60px]">
        <div class="max-w-screen-lg flex flex-col lg:flex-row justify-center mx-auto lg:mb-10 mb-3">
            <!-- Main Content -->
            <div class="container mx-auto mt-8 flex flex-col lg:flex-row">
                <div class="lg:w-1/3 border-r p-4 font-poppins" x-data="{ open: false }">
                    <h2 class="text-lg font-semibold mb-4">Settings</h2>
                    <button @click="open = !open" class=" text-gray-800 hover:text-gray-600"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                        </svg></button>
                    <ul class="lg:block" x-show="open" @click.away="open = false">
                        <li class="mb-2"><a href="#acount" class="text-gray-800 hover:text-gray-600">Management
                                Account</a></li>
                        <li class="mb-2"><a href="#editprofile" class="text-gray-800 hover:text-gray-600">Edit Profile</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-gray-800 hover:text-gray-600">Dark Mode</a></li>
                    </ul>
                </div>


                <!-- Content -->
                <div class="lg:w-2/3 bg-white p-4">
                    <div class="w-full" id="acount">
                        <h1 class="text-xl font-semibold mb-4">Management Account</h1>
                        <form action="{{ route('updatepassword') }}" method="POST">
                            @csrf
                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" value="{{ $dataprofile->email }}"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-full">
                            </div>
                            <!-- Password -->
                            <label for="password" class=" text-sm font-medium text-gray-700">Password</label>
                            <div class="flex justify-center items-center gap-2 mb-4 w-1/2">
                                <input type="password" name="password" id="password"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-full">
                                <div class="">
                                    <button data-modal-target="authentication-modal" type="button"
                                        data-modal-toggle="authentication-modal"
                                        class="flex justify-center items-center bg-gray-700 rounded-full text-[12px] p-2 text-putih font-bold ">
                                        <div>Change</div>
                                        </>
                                </div>

                            </div>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- Submit Button -->

                        </form>
                    </div>
                </div>

                {{-- <div class="w-full" id="editprofile">
                    <h1 class="text-xl font-semibold mb-4">Edit Profile </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec est nulla. Sed tristique ligula
                        vel posuere volutpat.</p>
                    <p>Ut ultrices justo sit amet magna suscipit, at dapibus ex convallis. Fusce id enim vitae tortor
                        egestas eleifend sit amet eget ante.</p>
                </div> --}}
            </div>
        </div>
        </div>
    </section>






    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Change password
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
                    <form class="space-y-4" action="{{ route('updatepassword') }}" method="POST">
                        @csrf
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old
                                password</label>
                            <input type="password" name="current_password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                password</label>
                            <input type="password" name="new_password" id="new_password" placeholder=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <div>
                            <label for="new_password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comfirm
                                new_password</label>
                            <input type="password" name="new_password_confirmation" id="new_password" placeholder=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>

                        <button type="submit"
                            class=" mt-3 w-1/4 flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
