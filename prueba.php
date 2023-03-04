<?php

//script crear_sesion.php

// Iniciamos la sesión o recuperamos la anterior sesión existente

session_start();

// Comprobamos si la variable ya existe

if (isset($_SESSION['color']))

echo $_SESSION['color'];

else

$_SESSION['color'] = "blanco";


//Si quisiéramos almacenar un listado de colores, la sesión debería ser un array:

if (isset($_SESSION['color'])){

$_SESSION['colores'][] = "naranja";

var_dump($_SESSION['colores']);

}else

$_SESSION['colores'][] = "blanco";

?>


<?php

//script cerrar_sesion.php

// Iniciamos la sesión o recuperamos la anterior sesión existente


    // Recuperamos la información de la sesión


    // Y la eliminamos

    session_unset();

session_destroy();

?>