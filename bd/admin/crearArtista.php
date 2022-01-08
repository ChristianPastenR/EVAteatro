<?php
    require_once('../conexion.php');
    
    if(isset($_POST['validador'])){
        $nombre = $_POST['iNombre'];
        $nacionalidad = $_POST['iNacionalidad'];
        $tipo = $_POST['iTipo'];

        try{
            $stmt = $conn->prepare("INSERT INTO artista (nombre,nacionalidad,tipo) VALUES (:nombre,:nacionalidad,:tipo)");
            $stmt->bindParam(":nombre",$nombre);
            $stmt->bindParam(":nacionalidad",$nacionalidad);
            $stmt->bindParam(":tipo",$tipo);
            $stmt->execute();
            echo "¡Registro exitoso!"; //1 es insercion exitosa
        }catch(PDOException $e){
            echo "Conexion fallida: ". $e->getMessage();
        }

    }


?>