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

                    <!-- image -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">
                            Upload file
                        </label>
                        <input
                            class="block w-full text-sm text-gray-900 dark:text-gray-300 border border-gray-300 cursor-pointer bg-gray-50focus:outline-none dark:border-gray-700 dark:placeholder-white-400
                            dark:bg-gray-900  focus:border-gray-900 dark:focus:border-gray-400 focus:ring-gray-900 dark:focus:ring-gray-400 rounded shadow-md"
                            aria-describedby="user_avatar_help" id="user_avatar"
                            name="user_avatar"
                            type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                            A profile picture is useful to confirm your are logged into your account
                        </div>
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