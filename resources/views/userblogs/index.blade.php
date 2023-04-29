<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Blogs') }}
        </h2>
        <p class="text-lg leading-7 text-gray-400">
            Here you can find all your published blogs.
        </p>
    </x-slot>

    <div class="mt-16">

        <div class="flex items-center justify-center">
            <a href="{{ route('myblog.create') }} ">
                <button data-tooltip-target="tooltip-new" type="submit" class="inline-flex items-center justify-center w-10 h-10 font-medium bg-green-600 rounded-full hover:bg-green-700 transition group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"></path>
                    </svg>
                    <span class="sr-only">New item</span>
                </button>
            </a>
        </div>


        <div class="mt-16">
            @if($blogs->count() == 0)
                <p class="font-semibold text-2xl dark:text-gray-500 text-center">
                    No blogs found, create your a new blog with the 'green plus button'.
                </p>
            @else
            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($blogs as $blog)
                    <x-blog.blog-item :blog="$blog" />
                @endforeach
            </div>
            @endif
        </div>

    </div>
</x-app-layout>
