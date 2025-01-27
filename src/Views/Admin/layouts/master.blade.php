<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>

<body>
    <div class="container">
        <div class="row text-black   mt-1">
            <div class="col-2 mt-1">
                <img src="./upload/logo.png" class="w-25">
            </div>
            <div class="col-5 mt-2">
                <ul class="nav text-black  ">
                    <li class=" nav-item "><a class="nav-link active text-black " href="{{url('admin')}}">Dasboard</a>
                    </li>
                    <li class=" nav-item "> <a class="nav-link text-black " href="{{url('admin/products')}}">Products</a></li>
                    <li class=" nav-item "> <a class="nav-link text-black " href="{{url('admin/categories')}}">Category</a></li>
                    <li class=" nav-item "> <a class="nav-link text-black" href="{{url('admin/users')}}">User </a></li>
                </ul>
            </div>
            <div class="col-3 mt-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm...." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
            </div>
            
        </div>
        <!-- <nav class="mt-5">
        <a href="{{url('admin')}}">Dasboard</a>
        <a href="{{url('admin/products')}}">Quản lý sản phẩm</a>
    </nav> -->
        <h1 class="mt-5 mb-3 text-center"> @yield('title')</h1>
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

</html>