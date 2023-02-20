<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    @section('header')
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarBasic">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            
            </div>
        </div>
    </nav>
    @show

    @yield('content')

    @section('footer')
        <div class='container-fluid fixed-bottom bg-light'>
            <div class="row">
                <div class="col-lg-3">
                    <h3>Section 1</h3>
                    <ul class="list-unstyled">
                        <li>Home</li>
                        <li>About us</li>
                        <li>Courses</li>
                        <li>Product</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Section 2</h3>
                    <ul class="list-unstyled">
                        <li>Home</li>
                        <li>About us</li>
                        <li>Courses</li>
                        <li>Product</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Section 3</h3>
                    <ul class="list-unstyled">
                        <li>Home</li>
                        <li>About us</li>
                        <li>Courses</li>
                        <li>Product</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Section 4</h3>
                    <ul class="list-unstyled">
                        <li>Home</li>
                        <li>About us</li>
                        <li>Courses</li>
                        <li>Product</li>
                    </ul>
                </div>
                
            </div>
        </div>
    @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>