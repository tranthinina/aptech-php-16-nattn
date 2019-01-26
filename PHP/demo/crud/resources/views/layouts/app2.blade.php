<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-1 mt-2">
            <form action="{{route('users.index')}}" method="get">
                <button class="btn btn-sm btn-primary font-weight-bold">HOME</button>
            </form>
            </div>
            <div class="col-10 text-center font-weight-bold"><h1>DEMO CRUD</h1></div>
        </div>
    </div>
    <hr>
</header>
<main>
  @yield('content')
</main>
<footer>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <span class="text-muted">DEMO CRUD</span>
                    <form action="{{route('users.create')}}" method="get">
                        <button type="submit" class="btn btn-sm btn-info font-weight-bold">CREATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>