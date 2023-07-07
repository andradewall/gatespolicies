<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-4">
                        @method('PATCH')
                        @csrf

                        <label for="body" class="block">Write what you are thinking</label>
                        <textarea name="body" id="body" cols="60" rows="2"
                                  class="dark:bg-gray-600 block rounded">{{ $post->body }}</textarea>
                        <button type="submit" class="dark:bg-green-600 p-2 rounded">Tell 'em</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
