<?php
session_start();
if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    // Nombre del archivo
    $fileName = $file['name'];

    // Ruta temporal del archivo
    $fileTmpName = $file['tmp_name'];

    // Tamaño del archivo
    $fileSize = $file['size'];

    // Tipo de archivo
    $fileType = $file['type'];

    // Extensión del archivo
    $fileExt = strtolower(end(explode('.', $fileName)));

    // Extensiones permitidas
    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    // Verifica si la extensión del archivo está permitida
    if(in_array($fileExt, $allowed)){
        // Verifica si hubo algún error al subir el archivo
        if($file['error'] === 0){
            // Ruta donde se almacenará el archivo
            $uploadPath = '../public/images/profile/' . $_SESSION['user_id'].".".$fileExt;

            // Mueve el archivo desde la ruta temporal a la ruta definitiva
            if(move_uploaded_file($fileTmpName, $uploadPath)){
                echo "El archivo se subió correctamente.";
                echo $fileTmpName;
            }
            else{
                echo "Hubo un error al subir el archivo.";
            }
        }
        else{
            echo "Hubo un error al subir el archivo.";
        }
    }
    else{
        echo "No se permiten archivos de este tipo.";
    }
}
?>
