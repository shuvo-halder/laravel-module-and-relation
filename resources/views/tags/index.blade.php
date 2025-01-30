<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">register</a>
    <div class="container mt-5">
        <h2 class="mb-4">User Details</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>post</th>
                    <th>user</th>
                    <th>Post</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row -->
                @foreach ($tags as $index => $tag)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>
                            <ul>
                                @foreach ($tag->posts as $post)
                                    <li>{{ $post->title }}</li>
                                    {{-- user: {{ $post->user->name }} --}}
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <ul>
                                @foreach ($tag->posts as $post)
                                    <li>{{ $post->user->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>