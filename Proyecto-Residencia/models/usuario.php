<?php

class Usuario {

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $db;
    private $asignacion;

    public function __construct() {
        $this->db = Database::connect();
    }
    function getAsignacion() {
        return $this->asignacion;
    }

    function setAsignacion($asignacion) {
        $this->asginacion = $asignacion;
    }

            function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function getRol() {
        return $this->rol;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos) {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }
    //Guardamos al usuario que esta registrandose
    public function save() {
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user');";
        $save = $this->db->query($sql);  
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    //Comprobamos usuario que sus datos sean validos
    public function login() {
        $result = false;
        $email = $this->email;
        $password = $this->password;
        // Comprobar si existe el usuario
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);
        if ($login && $login->num_rows == 1) {
            $usuario = $login->fetch_object();
            // Verificar la contraseña
            $verify = password_verify($password, $usuario->password);
            if ($verify) {
                $result = $usuario;     
            }
        }
        return $result;      
    }
    //Guardar ingeniero que se esta registrando.
    public function saveIngeniero() {
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'admin');";
        $save = $this->db->query($sql);      
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    //Obtener Ingenieros para Utils Y mostrarlo en una vista
     public function getIngenieros(){
         $sql = "SELECT * FROM usuarios WHERE rol = 'admin';";
     $ingenieros = $this->db->query($sql);
        return $ingenieros; 
    } 
   /* public function setIngeniero($ingeniero,$id){   
       $sql = "UPDATE tickets SET estado = 'asignado', usuario_admin = '$ingeniero' WHERE id_ticket = $id;";
       $save = $this->db->query($sql);

       $result =false;
       if($save){
           $result=true;
       }
       return $result;
    }*/

}
