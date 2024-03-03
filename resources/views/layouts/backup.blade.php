@extends('layouts.master')

@section('content')
<section class="hidden lg:block">
        <div class="mt-[120px]">
            <div class="flex mx-auto py-7 px-10 max-w-screen-lg ">
            <b><i class="bi bi-arrow-left" style="font-size: 25px; font-weight:900;"></i>
            </div>
        </div>
        <div  class=" max-w-screen-md  mt-[-40px] flex mx-auto bg-white shadow-xl rounded-[20px]">
            
            <div class="flex flex-col w-3/5 max-[480px]:w-full">
                <div class="ml-2  z-10">
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                        <div class="flex pl-1 pb-1 w-[90px] h-[28px] bg-gray-500/50 rounded-full">
                        <span class="pb-7 mr-1"><i class="bi bi-plus-circle-fill" style="font-size: 20px;"></i></span>
                        <span class="font-poppins text-[10px] font-light mt-2">Add album</span>
                        </div>
                    </button>
                </div>
<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Album
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Album Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                      <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Album</label>
                      <input type="text" name="text" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="New album">
                  </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Album Description</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add album
                </button>
            </form>
        </div>
    </div>
</div> 

                <img src="/asssets/c14.jfif" alt="" class="mt-[-38px] rounded-[20px]">
                
                
            </div>
            
            <div class="flex flex-col">
                <div class="flex mt-4">
                    <div class="w-[40px] h-[40px] rounded-full ml-4">
                        <img src="/asssets/c11.jfif" alt="" class="w-[40px] h-[40px] rounded-full">
                    </div>
                    <div class=" ml-2 flex flex-col">
                        <div class="font-poppins text-[16px] font-medium">username</div>
                        <div class="font-poppins text-[14px] font-light mt-[-3px]">1.7k follower</div>
                    </div>
                    <div class="ml-[60px] mt-2">
                        <button class="bg-primary text-[14px] text-white w-[60px] rounded-full ">follow</button>
                    </div>
                </div>
                <div class="flex mt-[35px] ml-5 w-[270px] ">
                    <div class="flex flex-col">
                        <div class="font-poppins text-[23px] font-semibold">Judul foto</div>
                        <div class="font-poppins text-[12px] font-light ">Lorem ipsum dolor sit amet culpa.</div>
                    </div>
                    <div class="flex flex-col mt-1 ml-11">
                        <div><i class="bi bi-heart" style="font-size: 20px;"></i></div>
                        <div class="font-poppins text-[14px] font-light mt-[-4px]">15k</div>
                    </div>
                </div>
                
<div role="status" class="max-w-md p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow animate-pulse dark:divide-gray-700 md:p-6 dark:border-gray-700">
    <div class="flex items-center justify-between">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
    </div>
    <div class="flex items-center justify-between pt-4">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
    </div>
    <div class="flex items-center justify-between pt-4">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
    </div>
    <div class="flex items-center justify-between pt-4">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
    </div>
    <div class="flex items-center justify-between pt-4">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
    </div>
    <span class="sr-only">Loading...</span>
</div>

                <div class="flex ml-4 mt-[250px]">
                    
                    <input type="text" class="w-[240px] h-[35px] rounded-full mb-[5px]" placeholder="Comment..">
                
                <div class="mt-[-10px]"><i class="bi bi-check-lg" style="font-size: 30px; font-weight:bold ;"></i></div>
            </div>
                
        </div>
        </div>
    </section>
    <!--End Dekstop-->
    <!--Mobile-->
    <section class="lg:mt-[120px] mt-[75px]">
        <div class="max-w-screen-md mx-auto mb-[20px] lg:hidden">
            <div class="flex flex-col mx-4 ]">
                <div class=" flex ml-2  z-10  justify-between">
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="mt-4">
                        <div class="flex pl-1 pb-1 w-[90px] h-[28px] bg-gray-500/50 rounded-full">
                        <span class="pb-7 mr-1"><i class="bi bi-plus-circle-fill" style="font-size: 20px;"></i></span>
                        <span class="font-poppins text-[10px] font-light mt-2">Add album</span>
                        </div>
                    </button>
                    </a>
                    <a href="" class="mt-4">
                        <div class="flex  bg-gray-500/50 rounded-full mr-2">
                        <i class="bi bi-x-circle" style="font-size: 20px;"></i></span>
                        </div>
                    </a>
                </div>
                <img src="/asssets/c14.jfif" alt="" class="mt-[-30px] rounded-[20px]">
                
                <div class="flex mt-4">
                    <div class="w-[40px] h-[40px] rounded-full ml-4">
                        <img src="/asssets/c11.jfif" alt="" class="w-[40px] h-[40px] rounded-full">
                    </div>
                    <div class=" ml-2 flex flex-col">
                        <div class="font-poppins text-[16px] font-medium">username</div>
                        <div class="font-poppins text-[14px] font-light mt-[-3px]">1.7k follower</div>
                    </div>
                    <div class="ml-[130px] mt-2">
                        <button class="bg-primary text-[14px] text-white w-[60px] rounded-full ">follow</button>
                    </div>
                </div>
                <div class="flex mt-4 justify-between mx-4">
                    <div class="flex-col">
                      <div class="font-poppins text-[16px]">Elina</div>
                      <div class="font-poppins text-[13px] font-light mt-[-2px]">#anime</div>
                    </div>
                    <div class="flex">
                        <div class="flex">
                            <div class="font-poppins text-[14px] font-light mr-2 mt-[6px]">11</div>
                            <div><i class="bi bi-chat-dots" style="font-size: 20px;"></i></div>
                        </div>
                        <div class="flex ml-4">
                            <div class="font-poppins text-[14px] font-light mr-2 mt-[6px]">54</div>
                            <div><i class="bi bi-heart" style="font-size: 20px;"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" max-w-screen-md columns-2 gap-2 mx-auto px-4 space-y-2 lg:columns-4 lg:max-w-screen-lg">
          <div class="  overflow-hidden">
            <img src="/asssets/c3.jpeg" alt="" class="rounded-[20px]">
            <div class="flex justify-between">
              <h2>Kucing</h2>
              <button class="mx-2 text-[20px] mt-0">...</button>
            </div>
          </div>
          <div class="   overflow-hidden">
            <img src="/asssets/c10.jfif" alt="" class="rounded-[20px]">
            <div class="flex justify-between">
              <h2>Kucing</h2>
              <button class="mx-2 text-[20px] mt-0">...</button>
            </div>
          </div>
          <div class="   overflow-hidden">
            <img src="/asssets/c4.jfif" alt="" class="rounded-[20px]">
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
          
        </div>
      </section>
      @endsection
    