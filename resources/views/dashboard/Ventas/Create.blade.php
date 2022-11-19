<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Ventas</title>
</head>
<body>
   

    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        <center><h1 class="mb-5">Ingreso de Ventas</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('ventas.store')}}" method="post"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">     
                        <div class="form-floating mb-3">
                            <input type="date" name="Fecha" class="form-control form-floating mb-3" placeholder="Fecha" >
                            <label for="text">Fecha</label>
                            @error('Fecha')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Total" class="form-control form-floating mb-3" placeholder="Total" >
                            <label for="text">Total</label>
                            @error('Total')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Envio" class="form-control form-floating mb-3" placeholder="Envio" >
                            <label for="text">Envio</label>
                            @error('Envio')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <option selected disabled>Estado</option>
                            <select name="Estado" class="form-control form-floating mb-3" placeholder="Estado">
                                <option value="1" id="1">En Camino</option>
                                <option value="2" id="2">Entregado</option>
                                <option value="3" id="3">Cancelado</option>
                            </select>

                            
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Direccion" class="form-control form-floating mb-3" placeholder="Direccion" >
                            <label for="text">Direccion</label>
                            @error('Direccion')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="IDCliente" id="IDCliente" class="form-control form-floating mb-3" placeholder="Nombre">
                                <option selected disabled>Cliente</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{$cliente->id}}" id="{{$cliente->id}}">{{$cliente->Nombre}}</option>
                                @endforeach
                            </select>
                            @error('IDCliente')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="IDSucursal" id="IDSucursal" class="form-control form-floating mb-3" placeholder="Direccion">
                                <option selected disabled>Sucursal</option>
                                @foreach ($sucursals as $sucursal)
                                    <option value="{{$sucursal->id}}" id="{{$sucursal->id}}">{{$sucursal->Direccion}}</option>
                                @endforeach
                            </select>
                            @error('IDSucursal')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="IDDepartamento" id="IDDepartamento" class="form-control form-floating mb-3" placeholder="Departamento">
                                <option selected disabled>Departamento</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{$departamento->id}}">{{$departamento->Depto}}</option>
                                @endforeach
                            </select>
                            @error('IDDepartamento')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
                        
        
                        <center>
                            <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('ventas.index')}}" class="btn btn-outline-primary mt-3">Regresar</a>
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