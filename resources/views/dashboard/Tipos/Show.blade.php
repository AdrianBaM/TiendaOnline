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
    <header>@include('dashboard.partials.nav-header-admin')</header>
    <br><br>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h2>Tipos</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('tipos.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for=""class="form-label" >Tipo de Usuario</label>
                            <input type="text" name="TipoU" class="form-control" disabled value="{{$tipo->TipoU}}">
                            @error('TipoU')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                        </section>
                    </form>
                  <a href="{{route('tipos.index')}}" class="btn btn-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>