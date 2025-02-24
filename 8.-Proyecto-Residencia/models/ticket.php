<?php
class ticket{
    private $id;
    private $nombre;
    private $descripcion_problema;
    private $hotel;
    private $departamento;
    private $fecha;
    private $ip;
    private $descripcion_solucion;
    private $usuario_admin;   
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion_problema() {
        return $this->descripcion_problema;
    }

    function getHotel() {
        return $this->hotel;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getIp() {
        return $this->ip;
    }
    
    function getDescripcion_solucion() {
        return $this->descripcion_solucion;
    }

    function getUsuario_admin() {
        return $this->usuario_admin;
    }

    function setId($id) {
        $this->id = $this->db->real_escape_string($id);
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setDescripcion_problema($descripcion_problema) {
        $this->descripcion_problema = $this->db->real_escape_string($descripcion_problema);
    }

    function setHotel($hotel) {
        $this->hotel = $this->db->real_escape_string($hotel);
    }

    function setDepartamento($departamento) {
        $this->departamento = $this->db->real_escape_string($departamento);
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setIp($ip) {
        $this->ip = $ip;
    }

    function setDescripcion_solucion($descripcion_solucion) {
        $this->descripcion_solucion = $descripcion_solucion;
    }

    function setUsuario_admin($usuario_admin) {
        $this->usuario_admin = $usuario_admin;
    }
   //almacenar ticket del colaborador
    public function save(){
        $nombre = $this->getNombre();
        $id = $this->getId();      
        $desc = $this->getDescripcion_problema();
        $sql = "INSERT INTO tickets VALUES(NULL, '$nombre', '$desc', '{$this->getHotel()}', '{$this->getDepartamento()}', CURDATE(),'{$this->getIp()}', 'activo' ,NULL, NULL,'{$this->getId()}');";
        $save = $this->db->query($sql);
         $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    //obtener todos los tickets disponibles para mostralo al SuperUsuario
    public function getAll(){
       # $tickets = $this->db->query("SELECT * FROM tickets ORDER BY id_ticket DESC;");
       $sql = "SELECT t.id_ticket, t.nombre, t.descripcion_problema, h.nombre AS 'hotel', d.nombre AS 'departamento',t.fecha, t.ip_usuario,t.estado,t.descripcion_solucion
                                      FROM tickets t
                                      INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
                                      INNER JOIN departamentos d ON  t.departamento_id = d.id_departamento ORDER BY t.id_ticket DESC;"; 
       $tickets = $this->db->query($sql); 
       return $tickets;
    }
    //Obtener el ultimo ticket generado 
    public function getAllArray(){
         # $tickets = $this->db->query("SELECT * FROM tickets ORDER BY id_ticket DESC;");
       $sql = "SELECT MAX(id_ticket) AS id_ticket FROM tickets;";
       $tic = $this->db->query($sql); 
       $tickets = $tic->fetch_object();
        return $tickets;
    }
    //obtener ticket para mostrarlo a los usuarios
    public function getUser($id){
       $sql =  "SELECT t.nombre, t.descripcion_problema,t.fecha, h.nombre AS 'hotel', d.nombre AS 'departamento', t.estado
                                      FROM tickets t
                                      INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
                                      INNER JOIN departamentos d ON  t.departamento_id = d.id_departamento where usuario_tickets = $id;";
       $ticket = $this->db->query($sql);
       return $ticket;
    }
    //Obtener todos los tickets disponibles para mostrarlo al Reporte de ingenieros
    public function getAllRep(){
       $sql = "SELECT t.id_ticket, t.nombre, t.descripcion_problema, h.nombre AS 'hotel', d.nombre AS 'departamento',t.fecha, t.ip_usuario,t.estado,t.descripcion_solucion,u.nombre AS 'ingeniero'
                                      FROM tickets t
                                      INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
                                      INNER JOIN departamentos d ON  t.departamento_id = d.id_departamento 
                                      INNER JOIN usuarios u ON t.usuario_id = u.id_nombre ORDER BY t.id_ticket DESC;";
       $tickets = $this->db->query($sql);
       return $tickets;
    }
    //asignar ingeniero a nuestra tabla ticket
     public function setIngeniero($ingeniero,$id){   
       $sql = "UPDATE tickets SET estado = 'asignado', usuario_id = '$ingeniero' WHERE id_ticket = $id;";
       $save = $this->db->query($sql);
       $result =false;
       if($save){
           $result=true;
       }
       return $result;
    }
    //obtener ticket segun el asignado a un administrador 
    public function getOne($admin){        
         $sql = "SELECT t.id_ticket, t.nombre, t.descripcion_problema, h.nombre AS 'hotel', d.nombre AS 'departamento',t.fecha, t.ip_usuario,t.estado,t.descripcion_solucion,t.usuario_id
                                      FROM tickets t
                                      INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
                                      INNER JOIN departamentos d ON  t.departamento_id = d.id_departamento WHERE usuario_id = $admin;";
         $tickets = $this->db->query($sql); 
         return $tickets;
    }
    //Cerrar el ticket y agregarle la descrpción de la solución.
    public function setDescription($id){   
       $sql = "UPDATE tickets SET estado = 'inactivo', descripcion_solucion = '{$this->getDescripcion_problema()}' WHERE id_ticket = $id;";
       $save = $this->db->query($sql);
       $result =false;
       if($save){
           $result=true;
       }
       return $result;
    }
    //Sacar de la base de datos todos los registros de un solo Hotel;
    public function oneHotel($select_hotel){
        $hotel = $select_hotel;
        $sql = "SELECT t.id_ticket, t.nombre, t.descripcion_problema, h.nombre AS 'hotel', d.nombre AS 'departamento',t.fecha, t.ip_usuario,t.estado,t.descripcion_solucion,t.usuario_id
                                      FROM tickets t
                                      INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
                                      INNER JOIN departamentos d ON  t.departamento_id = d.id_departamento WHERE hotel_id = '$hotel' ORDER BY t.id_ticket DESC;";
        $hote = $this->db->query($sql);        
        return $hote;    
    }
    //Sacar de la base de datos todos los registros de una sola fecha
    public function oneFecha($date){
        $fecha = $date;
        $sql = "SELECT t.id_ticket, t.nombre, t.descripcion_problema, h.nombre AS 'hotel', d.nombre AS 'departamento',t.fecha, t.ip_usuario,t.estado,t.descripcion_solucion,t.usuario_id
                                      FROM tickets t
                                      INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
                                      INNER JOIN departamentos d ON  t.departamento_id = d.id_departamento WHERE t.fecha = '$fecha' ORDER BY t.id_ticket DESC;";
        $dat = $this->db->query($sql);
        return $dat;
    }

    //Sacar de la base de datos todos los registros de un solo Ingeniero
    public function oneIngeniero($select_ingeniero){
        $ingeniero = $select_ingeniero;
        $sql = "SELECT t.id_ticket, t.nombre, t.descripcion_problema, h.nombre AS 'hotel', d.nombre AS 'departamento',t.fecha, t.ip_usuario,t.estado,t.descripcion_solucion,u.nombre AS 'ingeniero'
                                      FROM tickets t
                                      INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
                                      INNER JOIN departamentos d ON  t.departamento_id = d.id_departamento 
                                      INNER JOIN usuarios u ON t.usuario_id = u.id_nombre
                                      WHERE usuario_id = $ingeniero ORDER BY t.id_ticket DESC;";
        $inge = $this->db->query($sql);
        return $inge;
    }
    //sacar de la base de datos todos los registros de un solo departamento
    public function oneDepartamento($select_departamento){
        $departamento = $select_departamento;
        $sql = "SELECT t.id_ticket, t.nombre, t.descripcion_problema, h.nombre AS 'hotel', d.nombre AS 'departamento',t.fecha, t.ip_usuario,t.estado,t.descripcion_solucion,t.usuario_id
                                      FROM tickets t
                                      INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
                                      INNER JOIN departamentos d ON  t.departamento_id = d.id_departamento WHERE departamento_id = '$departamento' ORDER BY t.id_ticket DESC;";
        $depa = $this->db->query($sql);
        return $depa;
    }            
}