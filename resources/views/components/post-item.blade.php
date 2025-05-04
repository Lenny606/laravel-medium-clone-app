<li class="me-2">
    <a href=""
       class="inline-block px-4 py-3 rounded-lg {{ $loop->first ? 'text-white bg-blue-600 active' : 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white' }}"
        {{ $loop->first ? 'aria-current="page"' : '' }}>
        {{ ucfirst($post->title) }}
    </a>
</li>
