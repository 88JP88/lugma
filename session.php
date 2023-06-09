<?php
//session_start();
$url=$_SERVER['REQUEST_URI'];
//$url="index.php";
//header("Refresh: 60; URL=$url");

require_once 'env/domain.php';


   $sub_domaincon = new model_dom();
   $sub_domain = $sub_domaincon->dom();
   $_SESSION['domain']=$sub_domain;

require_once 'view/view_session.php';
echo '<script>

const user_rol = "' . $_SESSION["user_rol"] . '";
  sessionStorage.setItem("rol", user_rol);

  const user_id = "' . $_SESSION["user_id"] . '";
  sessionStorage.setItem("user_id", user_id);

  const profile_id = "' . $_SESSION["profile_id"] . '";
  sessionStorage.setItem("profile", profile_id);

  const domain = "' . $_SESSION["domain"] . '";
  sessionStorage.setItem("domain", domain);

</script>';



// Define la clase de cola
/*
class Queue {
    private $queue;

    public function __construct() {
        $this->queue = array();
    }

    public function enqueue($function) {
        array_push($this->queue, $function);
    }

    public function process() {
        foreach ($this->queue as $function) {
            $function();
        }
    }
}

// Define una función personalizada
function imprimirMensaje($mensaje) {
    echo "<script>console.log('"; echo $mensaje; echo "');</script>";

}

// Crea una nueva instancia de la cola
$queue = new Queue();

// Agrega algunas funciones a la cola
$queue->enqueue(function() {
   // echo "<script>console.log('"; echo $_SESSION['userinfo']; echo "');</script>";

});

$queue->enqueue(function() {
    imprimirMensaje("Función 2 ejecutada");
   // echo "<script>console.log('"; echo $_SESSION['schedule']; echo "');</script>";

});

$queue->enqueue(function() {
    imprimirMensaje("Función 3 ejecutada");
});

// Ejecuta todas las funciones en la cola
$queue->process();
*/
?>




