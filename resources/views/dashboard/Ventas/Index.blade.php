<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Ventas</title>
</head>
<body>

    
    <header>@include('dashboard.partials.nav-header-admin')</header>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <br><br>
        <div class="container">
            <div class="card">
                
                <div class="card-header">
                    <a href="{{route('ventas.create')}}" class="btn btn-primary">Crear</a>
                    <table class="table table-striped">
                <Thead>
                    <body>
                        <tr>
                            <td>
                                Id
                            </td>
                            <td>
                                Fecha
                            </td>
                            <td>
                                Total
                            </td>
                            <td>
                                Envio
                            </td>
                            <td>
                                Estado
                            </td>
                            <td>
                                Direccion
                            </td>
                            <td>
                                Cliente
                            </td>
                            <td>
                                Sucursal
                            </td>
                            <td>
                                Departamento
                            </td>
                            <td>
                                Creado
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                        
                    </body>

                    @foreach ($ventas as $venta)
                        <tr>
                            <td>
                                {{$venta->id}}
                            </td>
                            <td>
                                {{$venta->Fecha}}
                            </td>
                            <td>
                                {{$venta->Total}}
                            </td>
                            <td>
                                {{$venta->Envio}}
                            </td>
                            <td>
                                {{$venta->Estado}}
                            </td>
                            <td>
                                {{$venta->Direccion}}
                            </td>
                            <td>
                                {{$venta->Cliente->Nombre}}
                            </td>
                            <td>
                                {{$venta->Sucursal->Direccion}}
                            </td>
                            <td>
                                {{$venta->Departamento->Depto}}
                            </td>
                            <td>
                                {{$venta->created_at->format('d-m-Y')}}
                            </td>
                        
                            <td>
                                {{$venta->updated_at-> format('d-m-Y')}}
                            </td>

                            <td>                 
                                <form method="POST" action="{{route('ventas.destroy', $venta->id)}}">
                                @method('DELETE')
                                @csrf
                                <a href="{{route('ventas.show', $venta->id)}}" class="btn btn-info">Ver</a>
                                <a href="{{route('ventas.edit', $venta->id)}}" class="btn btn-warning">Actualizar</a>
                                <button class="btn btn-danger" type="submit">Borrar</button>
                                </form >
                            </td>
                        </tr>
                    @endforeach
                        

                </Thead>
                
            </table>
            <br>
            {{$ventas->links()}}
            <br>
        </div>
    </main>
    <footer>
        <br><br>
    </footer>
</body>
</html>