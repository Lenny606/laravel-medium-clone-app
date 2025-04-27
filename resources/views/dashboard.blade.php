<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



                    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        @foreach($categories as $category)
                            <li class="me-2">
                                <a href=""
                                   class="inline-block px-4 py-3 rounded-lg {{ $loop->first ? 'text-white bg-blue-600 active' : 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white' }}"
                                    {{ $loop->first ? 'aria-current="page"' : '' }}>
                                    {{ ucfirst($category->name) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <hr>
                <div>
                    <ul class="mt-3 flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        @foreach($posts as $post)
                            <li class="me-2">
                                <a href=""
                                   class="inline-block px-4 py-3 rounded-lg {{ $loop->first ? 'text-white bg-blue-600 active' : 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white' }}"
                                    {{ $loop->first ? 'aria-current="page"' : '' }}>
                                    {{ ucfirst($post->title) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
