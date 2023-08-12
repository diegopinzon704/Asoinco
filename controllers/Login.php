<?php
    class Login{
        public function __construct(){}
        public function index(){            
            $mensaje = '';
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/business/header.php";
                require_once "views/business/iniciar_sesion.view.php";
                require_once "views/business/links.php";
                require_once "views/roles/business/footer.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = $_POST['usuarioiniciar'];
                $pass = $_POST['contrainiciar'];                
                if ($user == "emily" && $pass == "12345") {
                    header("Location: ?c=Dashboard");
                } else {                    
                    $mensaje = '<h3>Usuario Incorrecto</h3>';
                    require_once "views/roles/business/header.php";
                    echo $mensaje;
                    require_once "views/business/iniciar_sesion.view.php";
                    require_once "views/business/links.php";
                    require_once "views/roles/business/footer.php";
                    // echo "<script>alert('Usuario Incorrecto')</script>";
                    
                }
            }
        }
    }
?>
