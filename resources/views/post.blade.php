<!DOCTYPE html>
<html>
<head>
    <title>Post Page</title>
</head>
<body>
    <h1>Post Page</h1>
    <form method="post" action="{{ route('submit.form') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
