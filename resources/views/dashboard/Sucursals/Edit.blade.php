<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <title>Editar Sucursal</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        <center><h1 class="mb-5">Actualizar Sucursal</h1></center>
    </header>
    
    <form action="{{route('sucursals.update',$sucursal->id)}}" method="post"> 
        @method('PUT')
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="Direccion" class="form-control form-floating mb-3" placeholder="Direccion" value="{{$sucursal->Direccion}}">
                    <label for="text">Direccion</label>
                    @error('Direccion')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <select name="IDDepartamento" id="IDDepartamento" class="form-control">
                        <option value="" disabled>Departamento</option>
                        @foreach ($departamentos as $departamento)
                            @if($sucursal->IDDepartamento==$departamento->id)
                                <option selected value="{{$departamento->id}}" id="{{$departamento->id}}">{{$departamento->Depto}}</option>
                            @else
                                <option value="{{$departamento->id}}" id="{{$departamento->id}}">{{$departamento->Depto}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>

                
                <center><button type="" class="btn btn-success btn-lg">Guardar</button>
                    <a href="{{route('sucursals.index')}}" class="btn btn-primary btn-lg">Regresar</a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>