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
{{--                         not binding , assigning --}}
                            <x-category-tabs test="TEST">
{{--                                assign SLOT variable --}}
                                No Categories
                            </x-category-tabs>
                    </ul>
                </div>
                <hr>
                <div>
                    <ul class="mt-3 flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        @forelse($posts as $post)
{{--                            binding variable  --}}
                            <x-post-item :post="$post" :loop="$loop"></x-post-item>
                        @empty
                            <div class="me-2">
                                No posts yet.
                            </div>
                        @endforelse
                    </ul>
                </div>
                {{$posts->onEachSide(2)->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
