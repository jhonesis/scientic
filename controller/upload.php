<?php

if(isset($_FILES['archivo'])) {
    $rutaArchivo = $_FILES['archivo']['tmp_name'];
    // Validar el tipo de archivo
    $tipoArchivoValido = exif_imagetype($rutaArchivo);

    if($tipoArchivoValido !== false) {
        $tamanoArchivo = $_FILES['archivo']['size'];
        if ($tamanoArchivo < 2097152) {
            $nombreArchivo = $_FILES['archivo']['name'];
            $tipoArchivo = $_FILES['archivo']['type'];

            $carpetaDestino = '../assets/';
            $rutaDestino = $carpetaDestino . $nombreArchivo;
        
            if(move_uploaded_file($rutaArchivo, $rutaDestino)) {
                echo $rutaDestino;
            } else {
                echo "Ha ocurrido un error al subir el archivo.";
            }
        } else {
            echo "El archivo tiene un tamano superior a 2Mb.";
        }
    } else {
        echo "El archivo seleccionado no es una imagen válida.";
    }
} else {
    echo "Seleccione una imagen (max - 2Mb).";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>
            <input type="file" name="archivo" id="archivo" accept="image/jpeg, image/png, image/gif, image/jpg" required>
        </p>
        <p>
            <input type="submit" value="subir">
        </p>
    </form>
</body>
</html>