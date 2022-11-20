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
    <header>@include('dashboard.partials.nav-header-manager')</header>
    <br><br>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h2>Usuarios</h2>
                </div>
                <div class="card-body">
                    @csrf
            
                        <section class="margen">
                            <label for=""class="form-label">Usuario</label>
                            <input type="text" name="Usuario" class="form-control" disabled value="{{$usuario->Usuario}}">
                            @error('Usuario')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Contraseña</label>
                            <input type="text" name="Pass" class="form-control" disabled value="{{$usuario->Pass}}">
                            @error('Pass')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Tipo de Usuario</label>
                            <input type="text" name="IDTipo" class="form-control" disabled value="{{$usuario->IDTipo}}">
                            @error('IDTipo')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                        </section>
                  <a href="{{route('user.index')}}" class="btn btn-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>