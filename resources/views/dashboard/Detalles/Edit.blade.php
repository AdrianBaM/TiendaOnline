<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <title>Editar Detalle</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        <center><h1 class="mb-5">Actualizar Detalle</h1></center>
    </header>
    
    <form action="{{route('detalles.update',$detalle->id)}}" method="post"> 
        @method('PUT')
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="number" step="0.25" name="Subtotal" class="form-control form-floating mb-3" placeholder="Subtotal" value="{{$detalle->Subtotal}}">
                    <label for="text">Subtotal</label>
                    @error('Subtotal')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="Cantidad" class="form-control form-floating mb-3" placeholder="Cantidad" value="{{$detalle->Cantidad}}">
                    <label for="text">Cantidad</label>
                    @error('Cantidad')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="form-floating mb-3">
                    <select name="IDVenta" id="IDVenta" class="form-control">
                        <option value="" disabled>Venta</option>
                        @foreach ($ventas as $venta)
                            @if($venta->IDVenta==$venta->id)
                                <option selected value="{{$venta->id}}" id="{{$venta->id}}">{{$venta->Fecha}}</option>
                            @else
                                <option value="{{$venta->id}}" id="{{$venta->id}}">{{$venta->Fecha}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                
                
                <center><button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                    <a href="{{route('detalles.index')}}" class="btn btn-info mt-3">Regresar</a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>