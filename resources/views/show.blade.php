<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $note->title }}</title>
</head>
<body>
    <h1>{{ $note->title }}</h1>

    <p>{{ $note->body }}</p>

    <a href="{{ route('notes.edit', $note) }}">Edit</a><br>
    <a href="{{ route('notes.index') }}">Back to Notes</a>
</body>
</html>
