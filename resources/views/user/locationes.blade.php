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
                    
                    <th>country</th>
                    <th>user name</th>
                    <th>User email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row -->
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            {{-- {{ $user->location->country_name }} --}}
                            @foreach ($user->locationes as $locati)
                                {{ $locati->country_name }}
                            @endforeach
                        </td>
                        
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
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