<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Note</title>
</head>
<body>
    <h1>Edit Note</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ $note->title }}"><br><br>

        <label>Body:</label><br>
        <textarea name="body" rows="5">{{ $note->body }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('notes.index') }}">Back to Notes</a>
</body>
</html>
