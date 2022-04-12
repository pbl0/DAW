<?php
class Conexion_club extends Conexion {

    public function getClubs(){
        try {
            $sql = "SELECT * FROM maratoon.clubs";

            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            return $stmt;

        } catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
            echo "Mensaje Error ".$e->getMessage();
            echo "<br>";
            echo "Código de Error".$e->getCode();
            echo "<br>";
            echo "Fichero ".$e->getFile();
            echo "<br>";
            echo "Línea ".$e->getLine();
        }
    }
    public function getClub($id){

        try {
            $sql = "SELECT * FROM maratoon.clubs WHERE id = :id LIMIT 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Club');
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
            echo "Mensaje Error ".$e->getMessage();
            echo "<br>";
            echo "Código de Error".$e->getCode();
            echo "<br>";
            echo "Fichero ".$e->getFile();
            echo "<br>";
            echo "Línea ".$e->getLine();
        }

    }
    public function crear(Club $club){
        try {
            //$id = $club->getId();
            $nombreCorto= $club->getNombreCorto();
            $nombre = $club->getNombre();
            $ciudad = $club->getCiudad();
            $fecFundacion = $club->getFecFundacion();
            $numSocios = $club->getNumSocios();
    
            $insertarsql = "INSERT INTO maratoon.Clubs VALUES (
                null,
                :nombreCorto,
                :nombre,
                :ciudad,
                :fecFundacion,
                :numSocios)";
                
            $stmt = $this->pdo->prepare($insertarsql);
            $stmt->bindParam(':nombreCorto', $nombreCorto, PDO::PARAM_STR, 3);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR, 30);
            $stmt->bindParam(':ciudad', $ciudad, PDO::PARAM_STR, 20);
            $stmt->bindParam(':fecFundacion', $fecFundacion);
            $stmt->bindParam(':numSocios', $numSocios, PDO::PARAM_INT, 10);
    
            $stmt->execute();
        } catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
            echo "Mensaje Error ".$e->getMessage();
            echo "<br>";
            echo "Código de Error".$e->getCode();
            echo "<br>";
            echo "Fichero ".$e->getFile();
            echo "<br>";
            echo "Línea ".$e->getLine();
        }



    }
    public function actualizar(Club $club){
        try {
            $id = $club->getId();
            $nombreCorto= $club->getNombreCorto();
            $nombre = $club->getNombre();
            $ciudad = $club->getCiudad();
            $fecFundacion = $club->getFecFundacion();
            $numSocios = $club->getNumSocios();
    
            $insertarsql = "UPDATE maratoon.Clubs SET 
                nombreCorto = :nombreCorto,
                nombre = :nombre,
                ciudad = :ciudad,
                fecFundacion = :fecFundacion,
                numSocios = :numSocios
                WHERE id = :id LIMIT 1";

            $stmt = $this->pdo->prepare($insertarsql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':nombreCorto', $nombreCorto, PDO::PARAM_STR, 3);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR, 30);
            $stmt->bindParam(':ciudad', $ciudad, PDO::PARAM_STR, 20);
            $stmt->bindParam(':fecFundacion', $fecFundacion);
            $stmt->bindParam(':numSocios', $numSocios, PDO::PARAM_INT);
    
            $stmt->execute();
        } catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
            echo "Mensaje Error ".$e->getMessage();
            echo "<br>";
            echo "Código de Error".$e->getCode();
            echo "<br>";
            echo "Fichero ".$e->getFile();
            echo "<br>";
            echo "Línea ".$e->getLine();
        }
    }
    public function eliminar($id){
        $deletesql = "DELETE FROM Clubs WHERE id = :id LIMIT 1";
        $stmt = $this->pdo->prepare($deletesql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function ordenar($criterio){
        $sql = "SELECT * FROM maratoon.Clubs
        ORDER BY $criterio ASC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();

        return $stmt;
        
    }
    public function buscar($expresion){
        $buscarsql = "SELECT * FROM maratoon.Clubs
        WHERE
        id LIKE '%".$expresion."%' OR
        nombre LIKE '%".$expresion."%' OR
        nombreCorto LIKE '%".$expresion."%' OR
        ciudad LIKE '%".$expresion."%' OR
        fecFundacion LIKE '%".$expresion."%' OR
        numSocios LIKE '%".$expresion."%'";
        $stmt = $this->pdo->prepare($buscarsql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();

        return $stmt;
        
    }

    public function mostrarCorredores($idClub){
        // $sql = "SELECT * FROM maratoon.Corredores
        // WHERE id_club = :idClub";

        $sql = "SELECT 
            corredores.id,
            corredores.nombre,
            corredores.apellidos,
            corredores.ciudad,
            corredores.email,
            corredores.edad,
            categorias.nombreCorto as categoria,
            clubs.nombre as club
            FROM Corredores
            INNER JOIN categorias ON corredores.id_categoria = categorias.id
            INNER JOIN clubs ON corredores.id_club = clubs.id
            WHERE corredores.id_club = :idClub
            ORDER BY id ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':idClub', $idClub, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        return $stmt;
        
    }

}
