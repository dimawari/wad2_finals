<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Note</title>
</head>
<body>
    <h1>Create New Note</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br><br>

        <label>Description (optional):</label><br>
        <input type="text" name="description" value="{{ old('description') }}"><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5">{{ old('content') }}</textarea><br><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('notes.index') }}">Back to Notes</a>
</body>
</html>
