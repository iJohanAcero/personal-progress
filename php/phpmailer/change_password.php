<?php
require_once 'config/config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>inicio sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Recuperacion de contraseña </h2>
                <div class="text-center mb-5 text-dark">Pagina prueba</div>
                <div class="card my-5">

                    <form class="card-body cardbody-color p-lg-5" action="config/change_password.php" method="POST">

                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                                width="200px" alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="new_password" 
                                placeholder="Nueva contraseña" name="new_password" required>
                        </div>

                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="id" 
                                placeholder="id" name="id" value="<?php echo $_GET['id']; ?>" required>
                        </div>


                        <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100 ">Iniciar sesion</button></div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Olvidaste tu contraseñaP? <a href="recovery.php" class="text-dark fw-bold"> recuperar contraseña</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>