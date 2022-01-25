<div>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            @if (Session("success"))
            <p>{{Session("success")}}</p>
            @endif
            <form wire:submit.prevent="submitForm" class="mt-8 space-y-6" enctype="multipart/form-data">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label>title</label>
                        <input wire:model="title" type="text"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div>
                        <label>content</label>
                        <input wire:model="content" type="text"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('content')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div>
                        <label>photo</label>
                        <input wire:model="photo" type="file"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('photo')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    @if ($photo)
                    <img src="{{$photo->temporaryUrl()}}" alt="temp">
                    @endif
                </div>

                <div>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-indigo-500 hover:bg-indigo-400 transition ease-in-out duration-150">
                        <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>