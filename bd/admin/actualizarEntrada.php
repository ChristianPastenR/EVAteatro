<?php
    require_once('../conexion.php');
    
    if(isset($_POST['validador'])){
        $id = $_POST['id'];
        $valor = $_POST['ivalor'];
        
        //var_dump($id);
        try{
            $stmt = $conn->prepare("UPDATE funcion SET valorentrada=:valor WHERE idfuncion=:id");
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":valor",$valor);
            
            $stmt->execute();
            echo "¡Modificación exitosa!"; //1 es insercion exitosa
        }catch(PDOException $e){
            echo "Conexion fallida: ". $e->getMessage();
        }

    }


?>