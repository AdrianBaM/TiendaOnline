<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <title>Editar Cliente</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        <center><h1 class="mb-5">Actualizar Cliente</h1></center>
    </header>
    
    <form action="{{route('clientes.update',$cliente->id)}}" method="post"> 
        @method('PUT')
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="Nombre" class="form-control form-floating mb-3" placeholder="Nombre" value="{{$cliente->Nombre}}">
                    <label for="text">Nombre</label>
                    @error('Nombre')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Telefono" class="form-control form-floating mb-3" placeholder="Telefono" value="{{$cliente->Telefono}}">
                    <label for="text">Telefono</label>
                    @error('Telefono')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Correo" class="form-control form-floating mb-3" placeholder="Correo" value="{{$cliente->Correo}}">
                    <label for="text">Correo</label>
                    @error('Correo')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Nit" class="form-control form-floating mb-3" placeholder="Nit" value="{{$cliente->Nit}}">
                    <label for="text">NIT</label>
                    @error('Nit')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Direccion1" class="form-control form-floating mb-3" placeholder="Direccion1" value="{{$cliente->Direccion1}}">
                    <label for="text">Direccion1</label>
                    @error('Direccion1')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Direccion2" class="form-control form-floating mb-3" placeholder="Direccion2" value="{{$cliente->Direccion2}}">
                    <label for="text">Direccion2</label>
                    @error('Direccion2')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Direccion3" class="form-control form-floating mb-3" placeholder="Direccion3" value="{{$cliente->Direccion3}}">
                    <label for="text">Direccion3</label>
                    @error('Direccion3')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                
                <center><button type="" class="btn btn-success btn-lg">Guardar</button>
                    <a href="{{route('clientes.index')}}" class="btn btn-primary btn-lg">Regresar</a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>