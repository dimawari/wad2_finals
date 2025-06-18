@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">📒 My Notes</h1>

    <a href="{{ route('notes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Create Note</a>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($notes->count())
        <ul>
            @foreach($notes as $note)
                <li class="border p-4 mb-2 rounded">
                    <h2 class="text-xl font-semibold">{{ $note->title }}</h2>
                    <p class="text-gray-600">{{ $note->description }}</p>
                    <a href="{{ route('notes.show', $note) }}" class="text-blue-500">View</a> |
                    <a href="{{ route('notes.edit', $note) }}" class="text-yellow-500">Edit</a> |
                    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500" onclick="return confirm('Delete this note?')">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>

        {{ $notes->links() }}
    @else
        <p>No notes yet.</p>
    @endif
</div>
@endsection
