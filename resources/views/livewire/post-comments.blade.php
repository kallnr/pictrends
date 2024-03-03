<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section
        class=" px-4 relative flex flex-col bg-putih dark:bg-slate-800 py-1 antialiased overflow-y-auto h-[300px] scrollbar-hidden">
        @forelse ($this->comments as $item)
            {{-- @foreach ($this->comments as $komentar) --}}

            <article class="p-2 text-base bg-white rounded-lg dark:bg-gray-900">
                <footer class="flex justify-between items-center mb-1">
                    <div class="flex items-center">
                        <a href="/user/{{ $item->user->id }}">
                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                           <img
                                class="mr-2 w-6 h-6 rounded-full" src="/profile/{{ $item->user->profile }}"
                                alt="Michael Gough">{{ $item->user->name }}</p></a>
                        <small
                            class="text-[10px] font-light text-gray-600 dark:text-gray-400">{{ $item->created_at->diffForHumans() }}</small>
                    </div>
                    <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 16 3">
                            <path
                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                        </svg>
                        <span class="sr-only">Comment settings</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownComment1"
                        class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                            </li>
                        </ul>
                    </div>
                </footer>
                <p class="ms-8 text-gray-700 dark:text-gray-400 text-[14px] font-normal">{{ $item->isi_komentar }}.</p>
            </article>
        @empty
            <div class="mt-10 p-3 flex justify-center items-center">
                <span class="text-[16px] font-normal text-slate-500">No Comments Posted</span>
            </div>
            {{-- @endforeach --}}
        @endforelse

    </section>

    <div class="flex gap-2 mt-2 ml-6 mb-2">
        <div class="w-3/4">


            <input wire:model.defer="isi_komentar" type="text"
                class="w-[270px] px-3 py-1 rounded-full border-slate-500 font-normal" placeholder="Comments...">
        </div>
        <button wire:click="postComment" class="px-4 rounded-full bg-blue-700"><i
                class=" text-white bi bi-send"></i></button>
        </form>
    </div>
</div>
