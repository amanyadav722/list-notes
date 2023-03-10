<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 px-4 py-2 by-green-100 border border-green-200 text-green-700 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex">
                <p class="opacity-70 mr-2">
                    <strong>Created At: </strong> {{ $note->created_at->diffForHumans() }}
                </p>
                <p class="opacity-70">
                    <strong>Updated At: </strong> {{ $note->updated_at->diffForHumans() }}
                </p>
                <a href="{{ route('notes.edit', $note) }}" class="btn-link ml-2">Edit Note</a>
                <form action="{{ route('notes.destroy', $note) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4"
                        onclick="return confirm('Are you sure you wish to delete this note')">Delete Note</button>
                </form>
            </div>

            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-4xl">
                    {{ $note->title }}
                </h2>
                <p class="mt-6 whitespace-pre-wrap">{{ $note->text }}</p>
            </div>

        </div>
    </div>
</x-app-layout>
