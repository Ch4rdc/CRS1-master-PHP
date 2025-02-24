<?php
require_once 'models/ticket.php';
class ticketcontroller{
    //Mostrar una vista de registro para generar un ticket.
    public function generar(){
        require_once 'views/usuario/generarticket.php';
    }
    //Guardar ticket en nuestra base de datos.
    public function save(){      
        if (isset($_POST)) {
            $usuario_ip = $_SERVER['REMOTE_ADDR']; 
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $hotel = isset($_POST['hotel']) ? $_POST['hotel'] : false;
            $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : false;
            if ($nombre && $descripcion && $hotel && $departamento) {
              $id = $_GET['id'];
                $ticket = new ticket();
                $ticket->setId($id);
                $ticket->setNombre($nombre);
                $ticket->setDescripcion_problema($descripcion);
                $ticket->setHotel($hotel);
                $ticket->setDepartamento($departamento); 
                $ticket->setIp($usuario_ip);
                $save = $ticket->save($id); 
                if ($save){  
                    $_SESSION['ticket']['complete'] = "complete";
                    $ticket = new ticket();
                    $tickets = $ticket->getAllArray();
                    $_SESSION['ticket_data'] = $tickets;
                    $tic = $_SESSION['ticket_data'];
                    $no_ticket = $tic->id_ticket;
                    require_once 'views/usuario/generarticket.php';
                                  
                } else {
                    $_SESSION['ticket'] = "failed";
                }
            } else {
                $_SESSION['ticket'] = "failed";
            }
        } else {
            $_SESSION['ticket'] = "failed";
        }     
    }
    //Ver Ticket generados por el usaurios
    public function verTicket(){
        $data = $_SESSION['identity'];
        $id = $data->id_nombre;
        $ticket = new ticket();
        $tickets = $ticket->getUser($id);
        require_once 'views/usuario/mistickets.php';
    }

    //Obtener tickets y mostarlo al super usuario.
    public function gestionTicket(){
        Utils::issuperAdmin();
        $ticket = new ticket();
        $tickets = $ticket->getAll(); 
        require_once 'views/super_admin/administar_ticket.php';
    }
    //Asignar ingeniero que dará soporte al ticket.
    public function gestion(){
         if(isset($_POST)){
           $ingeniero = isset($_POST['ingeniero']) ? $_POST['ingeniero'] : false;
          if($ingeniero){     
             $asignar = new ticket();  
             $id = $_GET['id'];
             $save = $asignar->setIngeniero($ingeniero,$id);      
                if($save){
                    $_SESSION ['usuario'] = "complete";
                    header("Location:". base_url."ticket/gestionTicket" );
                }else{
                    $_SESSION ['usuario'] = "failed";
                }
          }else{
             $_SESSION['usuario'] = "failed";
          }
        }else{
           $_SESSION['usuario'] ="failed";
        }
    }
    //Obtener tickets del ingeniero en la session y Mostrarlo.
    public function solucionarTicket(){
        Utils::isAdmin();
        $admins = $_SESSION['identity'];
        $admin = $admins->id_nombre;
        $ticket = new ticket();
        $tickets = $ticket->getOne($admin);   
        require_once 'views/admin/solucionar_ticket.php';
    }
    //Guargar campo descripcion y Cerrar el Ticket.
    public function solucionar(){
         if(isset($_POST)){
           $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
          if($descripcion){  
             $asignar = new ticket();  
             $id = $_GET['id'];
             $asignar->setDescripcion_problema($descripcion);
             $save = $asignar->setDescription($id);      
                if($save){
                    $_SESSION ['usuario'] = "complete";
                  
                    header("Location:". base_url."ticket/solucionarTicket" );
                }else{  
                    $_SESSION ['usuario'] = "failed";
                }
          }else{             
             $_SESSION['usuario'] = "failed";
          }
        }else{
           $_SESSION['usuario'] ="failed";
        }
    }
    //Mostar vista Reporte Hoteles sin filtro
    public function reporteHotel(){
         $ticket = new ticket();
         $tickets = $ticket->getAll();
         require_once 'views/super_admin/dash_hotel.php';         
    }
    //Mostar vista Reporte Hoteles con filtro
    public function showHotel(){
        if(isset($_POST['hotel'])){
            $select_hotel = isset($_POST['hotel']) ? $_POST['hotel'] : false;
            if($select_hotel){
                $hotel = new ticket();
                $hote = $hotel->oneHotel($select_hotel);                
                 if($hote){
                     $_SESSION['ReporteHotel'] = "complete";
                     require_once 'views/super_admin/inter_hotel.php';
                 }
                 else{
                     $_SESSION['reportehotel'] = "failed";
                 }
            }else{
             $_SESSION['reportehotel'] = "failed";   
            }
        }else{
          $_SESSION['reportehotel'] = "failed";   
        }
    }
     //Mostar vista Reporte Fecha sin filtro
    public function reporteFecha(){
        $ticket = new ticket();
        $tickets = $ticket->getAll();
        require_once 'views/super_admin/dash_fecha.php';   
    }
    //Mostrar Vistra reporte Fecha con filtro
    public function showFecha(){
        if(isset($_POST['fecha'])){
            $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
             if($fecha){
                 $ticket = new ticket();
                 $tickets = $ticket->oneFecha($fecha); 
                 if($tickets){
                     $_SESSION['reportefecha'] = "complete";
                     require_once 'views/super_admin/inter_fecha.php';
                     
                 }else{
                     $SESSION['reportefecha'] = "failed";
                 }
             }else{
                 $_SESSION['reportefecha'] = "failed";
             }
        }else{
            $_SESSION['reportefecha'] = "failed";
        }
    }
     //Mostar vista Reporte Departamento sin filtro
    public function reporteDepartamento(){
        $ticket = new ticket();
        $tickets = $ticket->getAll();
        require_once 'views/super_admin/dash_departamento.php';   
    }
    //Mostar vista Reporte Departamento con filtro
    public function showDepartamento(){
        if(isset($_POST)){
            $select_departamento = isset($_POST['departamento']) ? $_POST['departamento'] : false; 
            if($select_departamento){
                 
                $departamento = new ticket(); 
                
                $depa = $departamento->oneDepartamento($select_departamento);
                if($depa){
                   $_SESSION['ReporteIngeinero'] = "complete";
                    require_once "views/super_admin/inter_departamento.php";
                }else{
                     $_SESSION['reportedepartamento'] = "failed";
                }
            }else{
               $_SESSION['reportedepartamento'] = "failed";
            }
        }else{
            $_SESSION['reportedeparatemnto'] = "failed";
        }
    }
     //Mostar vista Reporte Ingeniero sin filtro
    public function reporteIngeniero(){
        $ticket = new ticket();
        $tickets = $ticket->getAllRep();
        require_once 'views/super_admin/dash_ingeniero.php';   
    }
    //Mostrar vista Reporte Ingeniero con filtro
    public function showIngeniero(){
       if(isset($_POST)){
           $select_ingeniero = isset($_POST['ingeniero']) ? $_POST['ingeniero'] : false;
           if($select_ingeniero){
               $ingeniero = new ticket();
               $inge = $ingeniero->oneIngeniero($select_ingeniero);
               if($inge){
                   $_SESSION['reporteingeniero'] = "completed";
                   require_once "views/super_admin/inter_ingeniero.php";
               }else{
                   $_SESSION['reporteingeniero'] = "failed";
               }
           }else{
               $_SESSION['reporteingeniero'] = "failed";
           }
       }else{
           $_SESSION['reporteingeniero'] = "failed";
       }
    }   
 }
