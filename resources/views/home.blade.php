<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Listing App</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Movie App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('movies.index') }}">View All Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.favorites') }}">View Favorites</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Carousel -->
        <div id="movieCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $movies = [['title' => 'Movie 1', 'image' => asset('images/movie1.jpg')], ['title' => 'Movie 2', 'image' => asset('images/movie2.jpg')], ['title' => 'Movie 3', 'image' => asset('images/movie3.jpg')]];
                
                foreach ($movies as $index => $movie) {
                    echo '<li data-target="#movieCarousel" data-slide-to="' . $index . '" class="' . ($index === 0 ? 'active' : '') . '"></li>';
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                foreach ($movies as $index => $movie) {
                    echo '<div class="carousel-item ' . ($index === 0 ? 'active' : '') . '">';
                    echo '<img src="' . $movie['image'] . '" class="d-block w-100" alt="' . $movie['title'] . '">';
                    echo '</div>';
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#movieCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#movieCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Bootstrap JavaScript and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
