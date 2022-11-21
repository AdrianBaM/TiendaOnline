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
                  <h2>Ventas</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('ventas.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for=""class="form-label">Fecha</label>
                            <input type="date" name="Fecha" class="form-control" disabled value="{{$venta->Fecha}}">
                            @error('Fecha')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Total</label>
                            <input type="number" name="Total" class="form-control" disabled value="{{$venta->Total}}">
                            @error('Telefono')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Envio</label>
                            <input type="text" name="Envio" class="form-control" disabled value="{{$venta->Envio}}">
                            @error('Envio')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Estado</label>
                            <input type="text" name="Estado" class="form-control" disabled value="{{$venta->Estado}}">
                            @error('Estado')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Direccion</label>
                            <input type="text" name="Direccion" class="form-control" disabled value="{{$venta->Direccion}}">
                            @error('Direccion')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Cliente</label>
                            <input type="text" name="IDCliente" class="form-control" disabled value="{{$venta->Cliente->Nombre}}">
                            @error('IDCliente')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Sucursal</label>
                            <input type="text" name="IDSucursal" class="form-control" disabled value="{{$venta->Sucursal->Direccion}}">
                            @error('IDSucursal')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Departamento</label>
                            <input type="text" name="IDDepartamento" class="form-control" disabled value="{{$venta->Departamento->Depto}}">
                            @error('IDDepartamento')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                        </section>
                    </form>
                  <a href="{{route('ventas.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>