<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Laboratorio</title>
</head>
<body>
    
    <main>
           <div class="container mt-5">

        <!-- Título -->
        <div class="text-center">
            <h1>Grupo 6</h1>
            <h3>Integrantes</h3>
            <p>Ariel Jiménez-Luis Mendez-Jeikon Aguilar-Sebastian Rivera-Alejandra Jiménez-Samir Sandoval</p>
        </div>

        <!-- Formulario -->
        <div class="card mt-4 p-4">

            <form action="subir.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="archivo" class="form-label">
                        Archivo
                    </label>

                    <input 
                        type="file" 
                        class="form-control" 
                        id="archivo"
                        name="archivo"
                    >
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        Subir archivo
                    </button>
                </div>

            </form>

    </div>
    </main>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
</body>
</html>
