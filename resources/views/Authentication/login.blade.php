<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/framework/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <header class="text-center p-5">
        <h1>Welcome to Inventory System Web Page</h1>
    </header>
    <div class="container p-5 d-flex justify-content-center">
        <form class="d-flex flex-sm-column justify-content-center gap-2" action="{{ route('login.user') }}" method="post">
            @csrf
            <div class="d-flex flex-column">
                <label class="form-label" for="username">Username: </label>
                <input class="form-control form-control-sm-2" style="width: 400px;" type="text" name="username" id="username">
            </div>
            <div class="d-flex flex-column">
                <label class="form-label" for="password">Password: </label>
                <input class="form-control form-control-sm-2" style="width: 400px;" type="text" name="password" id="password">
            </div>
            <div class="col-sm-1">
                <button class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
    <footer class="text-center pt-5">
        <p>Copyright © 2023 <span><a href="http://github.com/ivandnd" target="_blank">ivandnd</a></span></p>
    </footer>
</body>

</html>