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
                  <h2>Clientes</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('clientes.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for=""class="form-label">Nombre</label>
                            <input type="text" name="Nombre" class="form-control" disabled value="{{$cliente->Nombre}}">
                            @error('Nombre')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Telefono</label>
                            <input type="number" name="Telefono" class="form-control" disabled value="{{$cliente->Telefono}}">
                            @error('Telefono')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Correo</label>
                            <input type="text" name="Correo" class="form-control" disabled value="{{$cliente->Correo}}">
                            @error('Correo')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">NIT</label>
                            <input type="text" name="Nit" class="form-control" disabled value="{{$cliente->Nit}}">
                            @error('Nit')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                            
                            <label for=""class="form-label">Direccion1</label>
                            <input type="text" name="Direccion1" class="form-control" disabled value="{{$cliente->Direccion1}}">
                            @error('Direccion1')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Direccion2</label>
                            <input type="text" name="Direccion2" class="form-control" disabled value="{{$cliente->Direccion2}}">
                            @error('Direccion2')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Direccio3</label>
                            <input type="text" name="Direccio3" class="form-control" disabled value="{{$cliente->Direccio3}}">
                            @error('Direccio3')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                        </section>
                    </form>
                  <a href="{{route('clientes.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>