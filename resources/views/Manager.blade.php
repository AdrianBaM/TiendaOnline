<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Ver</title>
</head>
<body>
    <div id="Manager">
        @include('dashboard.partials.nav-header-manager');
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h2>Manager</h2>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </main>
</body>
</html>