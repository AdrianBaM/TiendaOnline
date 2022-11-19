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
                  <h2>Productos</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('productos.store')}}" method="post">

                        @csrf
            
                        <section class="margen">
                            <label for=""class="form-label">Nombre</label>
                            <input type="text" name="Nombre" class="form-control" disabled value="{{$producto->Nombre}}">
                            @error('Nombre')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Descripcion</label>
                            <input type="text" name="Descripcion" class="form-control" disabled value="{{$producto->Descripcion}}">
                            @error('Descripcion')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Precio</label>
                            <input type="number" step="0.25" name="Precio" class="form-control" disabled value="{{$producto->Precio}}">
                            @error('Precio')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Cod</label>
                            <input type="text" name="Cod" class="form-control" disabled value="{{$producto->Cod}}">
                            @error('Cod')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Imagen</label>
                            <input type="text" name="Imagen" class="form-control" disabled value="{{$producto->Imagen}}">
                            @error('Imagen')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Marca</label>
                            <input type="text" name="IDMarca" class="form-control" disabled value="{{$producto->Marca->NMarca}}">
                            @error('IDMarca')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                        </section>
                    </form>
                  <a href="{{route('productos.index')}}" class="btn btn-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>