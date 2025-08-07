<x-app-layout>
    <div class="p-4">
        <div class="mx-auto sm:px-6 lg:px-8 gap-4 flex flex-col max-w-6xl">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-1text-gray-900 dark:text-gray-100">
                    <div
                        class="text-sm font-medium text-center text-gray-500  border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px justify-center">
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-900 dark:hover:text-gray-300 dark:hover:border-gray-300">
                                    All</a>
                            </li>
                            @foreach ($categories as $category)
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-900 dark:hover:text-gray-300 dark:hover:border-gray-300">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="py-4">

                <div class="flex justify-center gap-4 flex-col">
                    @forelse ($posts as $post)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 flex justify-between">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $post->title }}
                                </h5>

                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ $post->content }}
                            </p>
                            
                            <x-primary-button>
                                <a href="#" class="inline-flex items-center">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </x-primary-button>
                        </div>
                        <a href="#" class="flex-shrink-0 w-48 ">
                            <img class="rounded-r-lg object-cover h-full w-full" src="{{ Storage::url($post->image) }}" alt="" />
                        </a>
                    </div>

                    @empty
                    <div>
                        <p class="flex justify-center text-gray-500">No posts available.</p>
                    </div>
                    @endforelse
                    <div class="mt-4">
                        <!-- Pagination links -->
                        {{ $posts->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>