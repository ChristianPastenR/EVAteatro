<?php
    //require_once('../conexion.php');
    $id = $_GET['artistaFK'];
    try{  
        $stmt = $conn->prepare("SELECT * FROM artista WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $artista =$stmt->fetchAll();
        //var_dump($resultados);
        
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>