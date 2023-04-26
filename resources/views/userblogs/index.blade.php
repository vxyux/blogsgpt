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
        @isset($blogs)
            <p class="font-semibold text-2xl dark:text-gray-500 text-center">
                No blogs found, create your a new blog with the 'green plus button'.
            </p>
        @endisset
        <div class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($blogs as $blog)
                <x-blog.blog-item :blog="$blog" />
            @endforeach
        </div>
    </div>
</x-app-layout>
