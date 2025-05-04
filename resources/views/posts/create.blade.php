<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" class="block text-sm font-medium text-gray-700">Title</x-input-label>
                            <x-text-input type="text" name="title" id="title"
                                   :value="old('title')" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                            <x-input-error type="text" name="title" id="title"
                                          :messages="$errors->get('title')" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                        </div>
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content" id="content" rows="4"
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                        </div>
                        <div class="mb-4">
                            <x-input-label for="image" :value="__('Image')"/>
                            <x-text-input type="file" name="image" id="image"
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"/>
                            <x-input-error :messages="$errors->get('image')" class="mt-2"/>
                        </div>


                        <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Create Post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
