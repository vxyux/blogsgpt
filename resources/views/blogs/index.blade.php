<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blogs') }}
        </h2>
        <p class="text-lg leading-7 text-gray-400">
            Learn more about Laravel and Tailwind CSS
        </p>
    </x-slot>

    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($blogs as $blog)
            <x-blog.blog-item :blog="$blog" />
        @endforeach
    </div>

</x-app-layout>
