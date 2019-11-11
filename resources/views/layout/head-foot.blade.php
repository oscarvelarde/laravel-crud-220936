<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/088a76f4ba.js" crossorigin="anonymous"></script>
    <style>
    .navbar-brand > img 
    {
        max-width: 40%;
    }
    body 
    {
        background-image:url('storage/image/fondo.jpg');
    }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
        <a href="/" class="navbar-brand"><img src="storage/image/logo.png"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#my-navbar-collapse">
            <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="my-navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item">
                    <a href="#" class="nav-link" data-target="#my-login" data-toggle="modal">Iniciar Sesion</a>
                </li>
                <li class="navbar-item">
                    <a href="#" class="nav-link"  data-target="#my-register" data-toggle="modal">Registro</a>
                </li>
                <li class="navbar-item dropdown">
                    <a href="/eventos" class="nav-link">Eventos</a>
                    <!--data-toggle="dropdown"
                        <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Damas</a>
                        <a href="#" class="dropdown-item">Varones</a>
                        <a href="#" class="dropdown-item">Jovenes</a>
                        <a href="#" class="dropdown-item">Ninos</a>
                    </div>-->
                </li>
                <li class="navbar-item">
                    <a href="contactanos.html" class="nav-link">Contactanos</a>
                </li>
                <li class="navbar-item">
                    <a href="usuarios.html" class="nav-link">Usuarios</a>
                </li>
                <li class="navbar-item">
                    <a href="publicar.html" class="nav-link">Publicar evento</a>
                </li>
                <li class="navbar-item">
                    <a href="aprobar.html" class="nav-link">Aprobar evento</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="modal" id="my-login"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h5>Iniciar Sesion</h5>
                    </div>
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Contraseña</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-success" id="modal-accept">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="my-register"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h5>Registrar</h5>
                    </div>
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Contraseña</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-success" id="modal-accept">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
    </div>
    <div class="navbar navbar-dark bg-dark navbar-expand-md fixed-bottom"><!--Social--> 
        <div class="col-10 text-muted">© 2019 por EL CAMINO COMUNIDAD CRISTIANA</div>
        <div class="col-2 text-center">
            <a href="https://www.facebook.com/caminocomunidadcristiana/"><i class="fab fa-facebook-f ml-4 btn btn-outline-light"></i></a>
            <a href="https://www.youtube.com/channel/UCGAhCvc7zDF5X0Hz4TnWAcg/featured"><i class="fab fa-youtube ml-4 btn btn-outline-light"></i></a>
            <a href="https://www.instagram.com/elcaminocomunidad/"><i class="fab fa-instagram ml-4 btn btn-outline-light"></i></a>
        </div>
    </div><!--Social-->
    <script src="bootstrap.js">
        $('#modal-accept').on('click',function()
        {
            $('#my-login').modal('hide');
            console.log('Modal accepted!');
            console.log('Username: '+ $('#username').val());
        })
    </script>
</body>
</html>
