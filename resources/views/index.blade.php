<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Notes</title>
</head>
<body>
    <h1>📝 All Notes</h1>

    <a href="{{ route('notes.create') }}">Create New Note</a>

    <ul>
        @foreach ($notes as $note)
            <li>
                <strong>{{ $note->title }}</strong><br>
                {{ \Illuminate\Support\Str::limit($note->body, 100) }}<br>
                <a href="{{ route('notes.show', $note) }}">View</a> |
                <a href="{{ route('notes.edit', $note) }}">Edit</a> |
                <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this note?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
