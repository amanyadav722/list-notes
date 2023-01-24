<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">



                <form action="{{ route('notes.update', $note) }}" method="post">
                    @method('put')
                    @csrf
                    <input type="text" name="title" placeholder="Title" class="w-full" autocomplete="off"
                        value="{{ @old('title', $note->title) }}">
                    </input>

                    @error('title')
                        <div class="text-red-600 text-sm"> {{ $message }}</div>
                    @enderror

                    <textarea name="text" rows="10" placeholder="Just type here..." class="w-full mt-2" value="{{ @old('text', $note->text) }}">
                    </textarea>

                    @error('text')
                        <div class="text-red-600 text-sm"> {{ $message }}</div>
                    @enderror

                    <button class="mt-2 my-2 p-2 bg-white border-b border-black-400 shadow-sm sm:rounded-lg">
                        Save Note
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
