<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <title>Editar Producto</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        <center><h1 class="mb-5">Actualizar Producto</h1></center>
    </header>
    
    <form action="{{route('productos.update',$producto->id)}}" method="post" enctype="multipart/form-data"> 
        @method('PUT')
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control form-floating mb-3" placeholder="name" value="{{$producto->name}}">
                    <label for="text">Nombre</label>
                    @error('name')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="slug" class="form-control form-floating mb-3" placeholder="slug" value="{{$producto->slug}}">
                    <label for="text">Codigo</label>
                    @error('slug')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="details" class="form-control form-floating mb-3" placeholder="details" value="{{$producto->details}}">
                    <label for="text">Detalles</label>
                    @error('details')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="number" step="0.25" name="price" class="form-control form-floating mb-3" placeholder="price" value="{{$producto->price}}">
                    <label for="text">Precio</label>
                    @error('price')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="number" step="0.25" name="shipping_cost" class="form-control form-floating mb-3" placeholder="shipping_cost" value="{{$producto->shipping_cost}}">
                    <label for="text">Envio</label>
                    @error('shipping_cost')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="description" class="form-control form-floating mb-3" placeholder="description" value="{{$producto->description}}">
                    <label for="text">Descripcion</label>
                    @error('description')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input class="form-control mb-3" id="image_path"  name="image_path" type="file" placeholder="image_path">
                    <img src="{{asset($producto->image_path)}}" width="300px">
                </div>
                <div class="form-floating mb-3">
                    <select name="brand_id" id="brand_id" class="form-control">
                        <option value="" disabled>Marca</option>
                        @foreach ($marcas as $marca)
                            @if($producto->brand_id==$marca->id)
                                <option selected value="{{$marca->id}}" id="{{$marca->id}}">{{$marca->NMarca}}</option>
                            @else
                                <option value="{{$marca->id}}" id="{{$marca->id}}">{{$marca->NMarca}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>

                <div class="form-floating mb-3">
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="" disabled>Marca</option>
                        @foreach ($sucursals as $sucursal)
                            @if($producto->category_id==$sucursal->id)
                                <option selected value="{{$sucursal->id}}" id="{{$sucursal->id}}">{{$sucursal->Direccion}}</option>
                            @else
                                <option value="{{$sucursal->id}}" id="{{$sucursal->id}}">{{$sucursal->Direccion}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                
                
                <center><button type="submit" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                    <a href="{{route('productos.index')}}" class="btn btn-info mt-3">Regresar</a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>