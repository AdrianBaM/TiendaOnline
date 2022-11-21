<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/Styles.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Login</title>
</head>
<body class="fondo">
    @include('dashboard.partials.nav-header-main')
    <div class="contorno fondo1">
        <center>
            <h1 class="mt-5">Login</h1>
        @csrf
        <form method="POST">
            @csrf
            <label class="mt-3">
                <input name="Usuario" type="text" placeholder="Usuario">
            </label> <br>
            <label class="mt-2">
                <input name="Pass" type="password" placeholder="Password...">
            </label> <br>
            <button type="submit" class="mt-3 mb-5">Login</button>
        </form>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>