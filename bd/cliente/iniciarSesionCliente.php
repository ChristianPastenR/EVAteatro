<?php
    require_once('../conexion.php');

    if(isset($_POST['validador'])){
        $iUsuario = $_POST['iUsuario'];
        $iContrasenia = $_POST['iContrasenia'];

        try{
            $stmt = $conn->prepare("SELECT * FROM cliente WHERE rut=:rut AND clave=:clave");
            $stmt->bindParam(":rut",$iUsuario);
            $stmt->bindParam(":clave",$iContrasenia);
            $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resultados =$stmt->fetchAll();
        
        if ($resultados[0]['rut']!=null) {
            session_start();
            $_SESSION["usuario"] = $resultados[0]['nombre'];
            echo true;
        }else{
            echo false;
        }
        
        
           
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

    ?>