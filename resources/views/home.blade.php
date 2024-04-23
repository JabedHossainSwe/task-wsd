<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Listing App</title>
</head>

<body>
    <div>
        <h1>Welcome to Movie Listing App</h1>
        <ul>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('movies.index') }}">View All Movies</a></li>
            <li><a href="{{ route('user.favorites') }}">View Favorites</a></li>
        </ul>
    </div>
</body>

</html>
