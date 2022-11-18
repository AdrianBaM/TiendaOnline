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
                  <h2>Empleados</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('empleados.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for=""class="form-label">Nombre</label>
                            <input type="text" name="Nombre" class="form-control" disabled value="{{$empleado->Nombre}}">
                            @error('Nombre')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Telefono</label>
                            <input type="number" name="Telefono" class="form-control" disabled value="{{$empleado->Telefono}}">
                            @error('Telefono')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Dpi</label>
                            <input type="text" name="Dpi" class="form-control" disabled value="{{$empleado->Dpi}}">
                            @error('Dpi')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Direccion</label>
                            <input type="text" name="Direccion1" class="form-control" disabled value="{{$empleado->Direccion1}}">
                            @error('Direccion1')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Usuario</label>
                            <input type="text" name="Usuario" class="form-control" disabled value="{{$empleado->Usuario}}">
                            @error('Usuario')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Pass</label>
                            <input type="text" name="Pass" class="form-control" disabled value="{{$empleado->Pass}}">
                            @error('Pass')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                        </section>
                    </form>
                  <a href="{{route('empleados.index')}}" class="btn btn-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>