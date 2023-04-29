<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create blog') }}
        </h2>
        <p class="text-lg leading-7 text-gray-400">
            Let's get creative!
        </p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
        <form action="{{ route('myblog.update', $blog->id) }}" method="POST">
            @method('POST')
            @csrf
            <div class="py-4">
                <x-input-label for="title" :value="__('Blog title')" />

                <x-text-input id="title" class="block mt-1 w-full"
                              type="text"
                              name="title"
                              value="{{ $blog->title }}"
                              required autocomplete="title" />

                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="py-4">
                <x-input-label for="description" :value="__('Blog description')" />

                <x-text-input id="description" class="block mt-1 w-full"
                              type="text"
                              name="description"
                              value="{{ $blog->description }}"
                              required autocomplete="description" />

                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>

            <div class="py-4">
                <x-input-label for="min" :value="__('Approx. minutes to read')" />

                <x-text-input id="min" class="block mt-1 w-full"
                              type="number"
                              name="min"
                              max="30"
                              value="{{ $blog->min_to_read }}"
                              required autocomplete="min" />

                <x-input-error :messages="$errors->get('min')" class="mt-2" />
            </div>

            <div class="py-4">
                <x-input-label for="blog" :value="__('Blog content')" />

                <x-text-input-xl id="blog" class="block mt-1 w-full"
                                 type="text"
                                 name="blog"
                                 value="{{ $blog->content }}"
                                 required autocomplete="min" />

                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>

            <div class="py-4">
                <label for="default" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blog tag</label>
                <select id="default" name="tag" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Choose a tag</option>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col items-center mt-6">
                <x-pill-button>
                    {{ __('Update It!') }}
                </x-pill-button>
            </div>

        </form>
    </div>
</x-app-layout>
