<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Detalles</title>
</head>
<body>
   

    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        <center><h1 class="mb-5">Ingreso de Detalles</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('detalles.store')}}" method="post"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">     
                        <div class="form-floating mb-3">
                            <input type="number" step="0.25" name="Subtotal" class="form-control form-floating mb-3" placeholder="Subtotal" >
                            <label for="text">Subtotal</label>
                            @error('Subtotal')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" name="Cantidad" class="form-control form-floating mb-3" placeholder="Cantidad" >
                            <label for="text">Cantidad</label>
                            @error('Cantidad')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="IDVenta" id="IDVenta" class="form-control form-floating mb-3" placeholder="Venta">
                                <option selected disabled>Venta</option>
                                @foreach ($ventas as $venta)
                                    <option value="{{$venta->id}}">{{$venta->Fecha}}</option>
                                @endforeach
                            </select>
                            @error('IDVenta')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
                        
        
                        <center>
                            <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('detalles.index')}}" class="btn btn-outline-primary mt-3">Regresar</a>
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