<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Homepage</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <a class="navbar-brand" href="#">Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('menus.index')}}">Menus</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservation</a>
                </li>
            </ul>
            <a href="#" class="btn btn-outline-success my-2 my-sm-0 ml-2">Reservation</a>
        </div>
    </nav>
    

    <!-- Hero Section -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to Our Restaurant</h1>
            <p class="lead">Delicious food and great service in a cozy setting.</p>
            <a href="{{route('items.index')}}" class="btn btn-light btn-lg">Order Now</a>
        </div>
    </header>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet, nulla id iaculis vestibulum, arcu arcu laoreet erat, non tincidunt sapien justo nec erat. Duis vitae urna vel purus cursus condimentum.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2024 Restaurant. All rights reserved.</p>
            <p class="mb-0"><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/4H1tQq1K5tF5UnY6E+2M7E+3C7k3GzFTiXM1bs4p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.11.0/dist/umd/popper.min.js" integrity="sha384-2p2nPi2N6s4u5hDBj/wPqfNTqgH7EY9C7enPrF5THcICtH8sF5J6FCzz+IlvMx9o" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8QG4aZl6sCk0z9Q0mL5lDq6Pj5Pz7y1p9lCzT6F0Q2PxtRmJz" crossorigin="anonymous"></script>
</body>
</html>
