<!DOCTYPE html>
<html>
<head>
    <title>Upload Avatar</title>
</head>
<body>
    <h1>Upload Avatar</h1>
    <form method="post" action="{{ route('upload.avatar') }}" enctype="multipart/form-data">
        @csrf
        <label for="avatar">Avatar:</label>
        <input type="file" name="avatar" id="avatar" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
