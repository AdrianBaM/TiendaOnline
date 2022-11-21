<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <title>Checkout</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-client')
        <br>
        <center><h1 class="mb-5">Ingrese la tajeta</h1></center>
    </header>
    
    <form>

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="number" class="form-control form-floating mb-3" placeholder="name">
                    <label for="text">Numero de tarjeta</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-floating mb-3" placeholder="slug" >
                    <label for="text">Expiracion</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control form-floating mb-3" placeholder="details" >
                    <label for="text">CVV</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-floating mb-3" placeholder="price" >
                    <label for="text">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-floating mb-3" placeholder="price" >
                    <label for="text">Apellido</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-floating mb-3" placeholder="price" >
                    <label for="text">Pais</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-floating mb-3" placeholder="price" >
                    <label for="text">Ciudad</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-floating mb-3" placeholder="price" >
                    <label for="text">Direccion</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-floating mb-3" placeholder="price" >
                    <label for="text">Codigo Postal</label>
                </div>
                
                <center>
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <a href="/shop" class="btn btn-success">Comprar</a>
                    </form>
                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>