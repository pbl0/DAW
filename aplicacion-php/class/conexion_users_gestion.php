<?php
class Conexion_users_gestion extends Conexion {

    public function crear(User $usuario){
        try {
            $name = $usuario->getName();
            $email = $usuario->getEmail();
            $password = $usuario->getPassword();
            $password_encriptado = password_hash($password, CRYPT_BLOWFISH);

            $sql = "INSERT INTO users VALUES (
                null,
                :name,
                :email,
                :password,
                default,
                default
            )";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':name', $name , PDO::PARAM_STR, 50);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR, 50);
            $stmt->bindParam(':password', $password_encriptado, PDO::PARAM_STR, 60);


            
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

    public function actualizar(User $usuario){
        try {
            $id = $usuario->getId();
            $name = $usuario->getName();
            $email = $usuario->getEmail();
            $password = $usuario->getPassword();
            # $password_encriptado = password_hash($password, CRYPT_BLOWFISH);
            
            $sql = "UPDATE users SET
                name = :name,
                email = :email,
                password = :password,
                update_at = default
                WHERE id = :id LIMIT 1";

                $stmt = $this->pdo->prepare($sql);

                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':name', $name, PDO::PARAM_STR, 50);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR, 50);
                $stmt->bindParam(':password', $password, PDO::PARAM_STR, 60);

                
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

    public function actualizarPassword(User $usuario){
        try {
            $id = $usuario->getId();
            $password = $usuario->getPassword();
            $password_encriptado = password_hash($password, CRYPT_BLOWFISH);
            
            $sql = "UPDATE users SET
                password = :password,
                update_at = default
                WHERE id = :id LIMIT 1";

                $stmt = $this->pdo->prepare($sql);

                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':password', $password_encriptado, PDO::PARAM_STR, 60);

                
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
        try {
            $sql = "DELETE FROM users WHERE $id:id LIMIT 1";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

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

    public function getUsuarios(){
        try {

            $sql = "SELECT * FROM users";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
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

    public function getUsuario($id){
        try {

            $sql = "SELECT * FROM users WHERE id = :id LIMIT 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
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

    public function getUsuario_email($email){
        try {
            
            $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
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

    public function validarUser(User $usuario, $pass2){
        $errores = [];

        # Validar Nombre
        $errores['name'] = $this->validarName($usuario->getName());

        # Validar Email
        $errores['email'] = $this->validarEmail($usuario->getEmail());

        # Validar Password
        $errores['password'] = $this->validarPassword($usuario->getPassword(), $pass2);

        return $errores;
    }

    public function validarName($name){
        if (!(strlen($name) >= 5 && strlen($name) <= 50)){
            return "El nombre debe ser entre 5 y 50 caracteres.";
        }
    }

    public function validarEmail($email){
        $usuario_email = $this->getUsuario_email($email);

        if ($usuario_email != false){
            return "Esa dirección de correo electronico ya está registrada";
        }
    }

    public function validarPassword($password, $pass2){
        if (!(strlen($password) >= 5 && strlen($password) <= 50)){
            return "La contraseña debe estar entre 5 y 50 caracteres.";
        }
        if (strcmp($password, $pass2) !== 0){
            return "Las contraseñas no coinciden.";
        }
    }

    public function acceso($email, $password){

        $errores = [];

        $usuario = $this->getUsuario_email($email);
        // var_dump($usuario);
        if (!empty($usuario)){
            $coincide = password_verify($password, $usuario->getPassword());
            if(!$coincide){
                $errores['password'] = "La contraseña está incorrecta.";
            }
            

        } else{
            $errores['email'] =  "El email no está registrado.";
        }

        return $errores;


    }

    public function validarEditar(User $usuario, $name, $email){
        $errores = [];

        # Validar Nombre
        $errores['name'] = $this->validarName($name);

        # Validar Email
        $errores['email'] = $this->validarEmailEditar($usuario, $email);


        return $errores;
    }

    public function validarEmailEditar(User $usuario, $email){
        $email_existe = $this->getUsuario_email($email);
        //var_dump($usuario);
        if ($email_existe == false){ 
            return;
        } elseif ($usuario->getEmail() != $email){
            return "Esa dirección de correo electronico ya está registrada";
        } 

    }

    public function validarEditarPass($usuario, $pass_antigua, $pass, $pass1){
        $errores = [];

        $coincide = password_verify($pass_antigua, $usuario->getPassword());
        if(!$coincide){
            $errores['password_antigua'] = "La contraseña antigua es incorrecta.";
        } else{
            $errores['password'] = $this->validarPassword($pass, $pass1);
        }

        return $errores;
            
    }

    public function getUserRole($user_id){
        try {
            
            $sql = "SELECT role_id FROM roles_users WHERE user_id = :user_id LIMIT 1";
            $stmt = $this->pdo->prepare($sql);
            // $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
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

    

}