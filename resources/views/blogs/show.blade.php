<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($blog->title) }}
        </h2>
        <span class="sm:float-right float-left text-gray-400">
            {{ $blog->created_at->format("j M, Y") }} &#x2022; {{ $blog->min_to_read }} min. read
        </span>
        <ul clas="pb-10">
            @foreach ($blog->tags as $tag)
                <x-blog.tag-item :tag="$tag->name"/>
            @endforeach
        </ul>
        <div class="h-24 min-h-screen mt-16">
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                {{ $blog->description }}
            </p>
            <br>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                {{ $blog->content }}
            </p>
        </div>
    </x-slot>
</x-app-layout>
