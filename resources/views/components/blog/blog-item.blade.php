<div class="space-y-2 xl:items-baseline xl:space-y-0">
    <div class="border-b-2 border-neutral-700 pb-10 pt-10">
        <span class="sm:float-right float-left text-gray-400">
            {{ $blog->created_at->format("j M, Y") }} &#x2022; {{ $blog->min_to_read }} min. read
        </span>

        <h2 class="text-white sm:pt-0 pt-10 pb-6 text-3xl sm:text-2xl font-bold sm:pb-2 w-full block">
            {{ $blog->title }}
        </h2>

        <ul clas="pb-10">
            @foreach ($blog->tags as $tag)
                <x-blog.tag-item :tag="$tag->name"/>
            @endforeach
        </ul>

        <p class="text-gray-400 leading-8 py-6 text-lg">
            {{ $blog->excerpt }}
        </p>

        <div class="columns-2">
            <div class="text-left">
                <a href="{{ route('blog.show', $blog->id) }}" class="text-green-400 transition-all hover:text-green-600 pb-3">
                    Read more <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>

        @if(Route::currentRouteName() == 'myblog.index')
            <div class="text-right">
                <a href="{{ route('myblog.edit', $blog->id) }}" class="text-blue-300 transition-all hover:text-blue-600 pb-3 text-right">
                    Edit
                </a>
                <a href="{{ route('myblog.destroy', $blog->id) }}" class="text-red-400 transition-all hover:text-red-600 pb-3 text-right">
                    Delete <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>
        @endif
</div>

</div>
</div>
