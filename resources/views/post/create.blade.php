<x-app-layout>
    <div class="p-4">
        <div class="mx-auto sm:px-6 lg:px-8 gap-4 max-w-4xl">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8 dark:bg-gray-800">
                <form action="{{ route('post.store') }}" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
                    @csrf
                    <!-- Title -->
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" required autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a category</label>
                        <select name="category_id" id="category_id" class="border text-gray-900 text-sm block w-full p-2.5 dark:placeholder-gray-400 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-900 dark:focus:border-gray-400 focus:ring-gray-900 dark:focus:ring-gray-400 rounded shadow-md">
                            <option value="0" selected>Choose a category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id')==$category->id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="dark:text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- image -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">
                            Upload Image for Post
                        </label>
                        <input
                            class="block w-full text-sm text-gray-900 dark:text-gray-300 border border-gray-300 cursor-pointer bg-gray-50 focus:outline-none dark:border-gray-700 dark:placeholder-white-400 
                            dark:bg-gray-900  focus:border-gray-900 dark:focus:border-gray-400 focus:ring-gray-900 dark:focus:ring-gray-400 rounded shadow-md"
                            aria-describedby="image_help" id="image"
                            name="image"
                            type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">
                            Upload an image to represent your post
                        </div>
                        @error('image')
                        <span class="dark:text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Content -->
                    <div>
                        <x-input-label for="content" :value="__('Content')" />
                        <x-textarea-input id="content" class="block mt-1 w-full" name="content" required
                            rows="5">{{ old('content') }}</x-textarea-input>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-primary-button>{{ __('Create Post') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>