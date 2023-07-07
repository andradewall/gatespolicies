<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <label for="body" class="block">Write what you are thinking</label>
                        <textarea name="body" id="body" cols="60" rows="2"
                                  class="dark:bg-gray-600 block rounded"></textarea>
                        <button type="submit" class="dark:bg-green-600 p-2 rounded">Tell 'em</button>
                    </form>
                </div>

                <hr class="dark:border-gray-600">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <span class="font-bold text-lg uppercase tracking-wide">All Posts</span>

                    @if(! $posts->isEmpty())
                        @foreach($posts as $item)
                            <div class="m-4 border-l dark:border-gray-600 pl-4">
                                <div class="dark:text-gray-400 text-sm
                                    {{ $item->createdBy->gender == 'M'
                                        ? 'dark:text-blue-700' : 'dark:text-pink-700'
                                    }}
                                ">
                                    {{ $item->createdBy->name }}
                                </div>
                                <div>{{ $item->body }}</div>
                                <div class="text-sm underline dark:text-gray-600"><a href="{{ route('posts.edit',
                                $item)
                                }}">Edit</a></div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
