<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/estilos.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <!-- <div class="card-img-left d-none d-md-flex">
                    
                    </div> -->
                    <div class="card-body p-2 p-sm-3">
                        <h5 class="card-title text-center mb-4 fw-bold fs-5">Regístrate</h5>

                        <form action="./scripts/registro.php" method="POST">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="documento" name="documento" required autofocus>
                                <label for="documento">Documento ID</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="nombre" required>
                                <label for="username">Nombre</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                                <label for="apellido">Apellido</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                                <label for="direccion">Dirección</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                                <label for="fecha">Fecha Nacimiento</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email">
                                <label for="email">Correo</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                                <label for="telefono">Teléfono</label>
                            </div>

                            <hr>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password">
                                <label for="password">Contraseña</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="persona" name="tipoUsuario" value="0">
                            </div>

                            <!-- <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password2" name="password2" required>
                                <label for="password2">Confirma Contraseña</label>
                            </div> -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="servicioCliente" name="servicioCliente">
                                <label class="form-check-label" for="servicioCliente">¿Permites que te enviemos noticias y promociones de nuestros productos?</label>
                            </div>
                            <div class="d-grid mb-2">
                                <input type="submit" class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="btnRegistro" value="Registrarse">
                            </div>

                            <a class="d-block text-center mt-2 small" href="../index.php">Ya tienes una cuenta? Ingresa Aca</a>

                            <!-- <hr class="my-4"> -->

                            <!-- <div class="d-grid mb-2">
                                <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                                    <i class="fab fa-google me-2"></i> Sign up with Google
                                </button>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                                </button>
                            </div> -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>