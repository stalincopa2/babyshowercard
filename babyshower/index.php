<?php 
include_once('views/pregunta.php');
include_once('src/controller/tarjetaController.php');

if (isset($_POST['opcion']))
{
    $opcion= $_POST['opcion'];
    if($opcion == 1)
    {
        $contenido = invitacionPOST($opcion);
    }   
    else if ($opcion == 2 && isset($_POST['nombre_participante']))
    {
        $nombre_participante = $_POST['nombre_participante'];
        $contenido = invitacionPOST($opcion, $nombre_participante); 
    }
}
print $contenido;    

?>