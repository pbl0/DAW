<?php

class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $created_at;
    private $update_at;

    public function __construct (
        $id = null,
        $name = null,
        $email = null,
        $password = null
        //$created_at = null,
        //$update_at = null
    ){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        //$this->created_at = $created_at;
        //$this->update_at = $update_at;

    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $password_encriptado = password_hash($password, CRYPT_BLOWFISH);
        $this->password = $password_encriptado;

        return $this;
    }

    // /**
    //  * Get the value of created_at
    //  */ 
    // public function getCreated_at()
    // {
    //     return $this->created_at;
    // }

    // /**
    //  * Set the value of created_at
    //  *
    //  * @return  self
    //  */ 
    // public function setCreated_at($created_at)
    // {
    //     $this->created_at = $created_at;

    //     return $this;
    // }

    // /**
    //  * Get the value of update_at
    //  */ 
    // public function getUpdate_at()
    // {
    //     return $this->update_at;
    // }

    // /**
    //  * Set the value of update_at
    //  *
    //  * @return  self
    //  */ 
    // public function setUpdate_at($update_at)
    // {
    //     $this->update_at = $update_at;

    //     return $this;
    // }
}

?>