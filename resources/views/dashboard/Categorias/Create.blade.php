<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Categorias</title>
</head>
<body>
   

    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        <center><h1 class="mb-5">Ingreso de Categorias</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('categorias.store')}}" method="post"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">     
                        <div class="form-floating mb-3">
                            <input type="text" name="NCategoria" class="form-control form-floating mb-3" placeholder="NCategoria" >
                            <label for="text">Nombre </label>
                            @error('NCategoria')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
        
                        <center>
                            <button type="" class="btn btn-success btn-lg">Guardar</button>
                            <a href="{{route('categorias.index')}}" class="btn btn-primary btn-lg">Regresar</a>
                        </center>
        
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                
                </section>
        
                                            
            </form>

        </div>
        
    </main>

    <footer>

    </footer>
    
</body>
</html>