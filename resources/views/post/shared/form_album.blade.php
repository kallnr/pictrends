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
