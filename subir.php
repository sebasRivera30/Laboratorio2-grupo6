<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Subir Archivo</title>
</head>
<body>
    <main>
        <div class="container mt-5">
            <div class="text-center">
                <h1>Grupo 6</h1>
            </div>

            <div class="card mt-4 p-4 text-center">
                <?php
                if (isset($_FILES['archivo'])) {
                    $nombre = $_FILES['archivo']['name'];
                    $temporal = $_FILES['archivo']['tmp_name'];
                    $carpeta = "uploads/";

                    $destino = $carpeta . $nombre;

                    if (move_uploaded_file($temporal, $destino)) {
                        echo "<p class='text-success fw-bold'>El archivo se guardo correctamente.</p>";
                    } else {
                        echo "<p class='text-danger fw-bold'>Error: No se pudo guardar el archivo.</p>";
                    }
                } else {
                    echo "<p class='text-warning fw-bold'>No se selecciono ningun archivo.</p>";
                }
                ?>

                <div class="mt-3">
                    <a href="index.php" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
</body>
</html>