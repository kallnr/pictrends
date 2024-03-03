<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex ml-4 lg:hidden  justify-center items-center pt-1">
        <div class="font-poppins  font-normal ms-[8px]  text-[12px] text-slate-500 mr-2">{{ $post->likes()->count() }}
        </div>
        <button wire:click="toggleLike"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                fill="currentColor" class="{{ Auth::user()->hasLiked($post) ? 'text-red-600' : '' }} bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
            </svg></button>
    </div>
    <div class=" hidden lg:block flex-col justify-center">
        <button wire:click="toggleLike"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                fill="currentColor"
                class="{{ Auth::user()->hasLiked($post) ? 'text-red-600' : '' }}  bi bi-suit-heart-fill"
                viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
            </svg></i></button>
        <div class="font-poppins  font-normal ms-[8px]  text-[12px] text-slate-500">{{ $post->likes()->count() }}
        </div>
    </div>
</div>
