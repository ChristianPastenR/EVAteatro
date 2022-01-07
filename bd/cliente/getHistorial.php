<?php
    //require_once('../conexion.php');
    $rut=$_SESSION['usuario'][0]['rut']; 
    
    try{  
        $stmt = $conn->prepare("SELECT * FROM boleto WHERE clienteFK=:rut");
        $stmt->bindParam(":rut",$rut);
        $stmt->execute();
    
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resultados =$stmt->fetchAll();
        //var_dump($resultados);
        
        
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>