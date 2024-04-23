<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Listing App</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Bootstrap theme -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Welcome to Movie Listing App</h1>
        <ul class="list-group mt-4">
            <li class="list-group-item"><a href="{{ route('register') }}" class="btn btn-primary">Register</a></li>
            <li class="list-group-item"><a href="{{ route('login') }}" class="btn btn-success">Login</a></li>
            <li class="list-group-item"><a href="{{ route('movies.index') }}" class="btn btn-info">View All Movies</a></li>
            <li class="list-group-item"><a href="{{ route('user.favorites') }}" class="btn btn-warning">View Favorites</a></li>
        </ul>
    </div>

    <!-- Bootstrap JavaScript and dependencies (optional) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>

</html>
