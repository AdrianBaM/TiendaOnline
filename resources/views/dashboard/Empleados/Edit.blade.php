<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <title>Editar Empleado</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        <center><h1 class="mb-5">Actualizar Empleado</h1></center>
    </header>
    
    <form action="{{route('empleado.update',$empleado->id)}}" method="post"> 
        @method('PUT')
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="Nombre" class="form-control form-floating mb-3" placeholder="Nombre" value="{{$empleado->Nombre}}">
                    <label for="text">Nombre</label>
                    @error('Nombre')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Telefono" class="form-control form-floating mb-3" placeholder="Telefono" value="{{$empleado->Telefono}}">
                    <label for="text">Telefono</label>
                    @error('Telefono')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Dpi" class="form-control form-floating mb-3" placeholder="Dpi" value="{{$empleado->Dpi}}">
                    <label for="text">Dpi</label>
                    @error('Dpi')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Direccion" class="form-control form-floating mb-3" placeholder="Direccion" value="{{$empleado->Direccion}}">
                    <label for="text">Direccion</label>
                    @error('Direccion')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Usuario" class="form-control form-floating mb-3" placeholder="Usuario" value="{{$empleado->Usuario}}">
                    <label for="text">Usuario</label>
                    @error('Usuario')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Pass" class="form-control form-floating mb-3" placeholder="Pass" value="{{$empleado->Pass}}">
                    <label for="text">Pass</label>
                    @error('Pass')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                
                <center><button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                    <a href="{{route('empleados.index')}}" class="btn btn-info mt-3">Regresar</a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>