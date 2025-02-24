<?php

require_once 'models/producto.php';

class ProductoController {

    public function index() {
        //Renderizar vista
        require_once 'views/producto/destacados.php';  
    }

    public function gestion() {
        Utils::isAdmin();
        $producto = new producto();
        $productos = $producto->getAll();

        require_once 'views/producto/gestion.php';
    }

    public function crear() {
        Utils::isAdmin();

        require_once "views/producto/crear.php";
    }

    public function save() {
        Utils::isAdmin();
        if ($_POST) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            //$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;      
            if ($nombre && $descripcion && $precio && $stock && $categoria) {
                $producto = new producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoria_id($categoria);
                // Guardar la imagen


                $file = $_FILES['imagen'];
                $filename = $_FILES['imagen']['name'];
                $mimetype = $_FILES['imagen']['type'];

                if ($mimetype == "imagen/jpg" || $mimetype == 'imagen/jpeg' || $mimetype == 'imagen/png' || $mimetype == 'imagen/gift') {
                    die('hooaa');
                    if (!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                    }

                    $producto->setImagen($filename);
                    move_uploaded_file($file['tmp_name'], 'uploads/images/' . $filename);
                }

                //guardat datos
                $save = $producto->save();
                if ($save) {

                    $_SESSION['producto'] = "complete";
                } else {
                    $_SESSION['producto'] = "failed";
                }
            } else {
                $_SESSION['producto'] = "failed";
            }
        } else {
            $_SESSION['producto'] = "failed";
        }
        header("Location:" . base_url . "producto/gestion");
    }

    public function editar() {
        
    }

    public function eliminar() {
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $producto = new producto();
            $producto->setid($id);
          
            $delete = $producto->delete();
            if($delete){
                $_SESSION['delete'] = 'complete';
            } else {
                $_SESSION['delete'] = "failed";
            }
        }
        header('Location:'.base_url.'producto/gestion');
    }

}
