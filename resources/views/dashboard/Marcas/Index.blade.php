<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Marcas</title>
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
                    <a href="{{route('marcas.create')}}" class="btn btn-success">Crear</a>
                    <table class="table table-striped">
                <Thead>
                    <body>
                        <tr>
                            <td>
                                Id
                            </td>
                            <td>
                                Marca
                            </td>
                            <td>
                                Categoria
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

                    @foreach ($marcas as $marca)
                        <tr>
                            <td>
                                {{$marca->id}}
                            </td>
                            <td>
                                {{$marca->NMarca}}
                            </td>
                            <td>
                                {{$marca->Categoria->NCategoria}}
                            </td>
                            <td>
                                {{$marca->created_at->format('d-m-Y')}}
                            </td>
                        
                            <td>
                                {{$marca->updated_at-> format('d-m-Y')}}
                            </td>

                            <td>                    
                                <form method="POST" action="{{route('marcas.destroy', $marca->id)}}">
                                @method('DELETE')
                                @csrf
                                <a href="{{route('marcas.show', $marca->id)}}" class="btn btn-info">Ver</a>
                                <a href="{{route('marcas.edit', $marca->id)}}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" type="submit">Borrar</button>
                                </form >
                            </td>
                        </tr>
                    @endforeach
                        

                </Thead>
                
            </table>
            <br>
            {{$marcas->links()}}
            <br>
        </div>
    </main>
    <footer>
        <br><br>
    </footer>
</body>
</html>