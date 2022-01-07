<?php
    
    //require_once('../conexion.php');
    
    try{  
        $stmt = $conn->prepare("SELECT * FROM funcion WHERE idfuncion=:id");
        $stmt->bindParam(":id",$funcion);
        $stmt->execute();
    
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resultados =$stmt->fetchAll();
        //var_dump($resultados);
        
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    

    
    function getArtista($id,$conn)

    {   
        try{  
            $stmt1 = $conn->prepare("SELECT * FROM artista WHERE idartista=:id");
            $stmt1->bindParam(":id",$id);
            $stmt1->execute();
        
            // set the resulting array to associative
            $artista = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
            $artistas =$stmt1->fetchAll();
            //var_dump($artistas);
            return $artistas;
        } catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
    }
    




?>

