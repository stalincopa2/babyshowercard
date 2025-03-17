<?php 
include_once('src/model/tarjeta.php');
include_once('src/model/item_agenda.php');

/*ESTA SERIA LA CAPA DAL, SE LE PODRIA PONER EN OTRO ARCHIVO SI ESQUE SE QUISIERA  */
function cabecera_tarjeta(){
    $tarjetaXML  = simplexml_load_file("src/data/tarjeta.xml");
    $items = simplexml_load_file("src/data/agenda.xml");  
    $tarjeta = new tarjeta();
    $tarjeta->titulo = $tarjetaXML->titulo ;
    $tarjeta->subtitulo = $tarjetaXML->subtitulo ;
    $tarjeta->nombre_persona = $tarjetaXML->nombre_persona ;
    $tarjeta->texto_fecha = $tarjetaXML->texto_fecha ;
    $tarjeta->ciudad = $tarjetaXML->ciudad ;
    $tarjeta->calles =$tarjetaXML->calles ;

return $tarjeta;
}

function agenta_items(){
    $tarjetaXML  = simplexml_load_file("src/data/tarjeta.xml");
    $items = simplexml_load_file("src/data/agenda.xml");  

    $items_agenda = [];
    foreach ($items as $item )
    {
        $item_agenda = new item_agenda();
        $item_agenda->titulo = $item->titulo;
        $item_agenda->hora=$item ->hora;
        $item_agenda->descripcion = $item->descripcion;
        $item_agenda->url_imagen = $item->urlimagen;
        array_push($items_agenda,$item_agenda);
     }
    return $items_agenda;
}

function insertar_participantes($nombre_participante){
    $xml = new DOMDocument("1.0", "UTF-8");
    $xml->preserveWhiteSpace=false;
    $xml->formatOutput=true;
    $xml->load('src/data/participantes.xml');
   

    $participantesTag = $xml->getElementsByTagName('participantes')->item(0);
    $participanteTag = $xml->createElement('participante');
   // date_default_timezone_set("America/Guayaquil"); // Estableciendo Zona horaria para no tomar por defecto la del Servidor

    $nameTag = $xml->createElement('nombre',$nombre_participante);
    $fechaTag = $xml->createElement('fecha',date('m-d-Y h:i:s a', time())); // contiene la fecha y hora actual
    
    
    $participanteTag->appendChild($nameTag);
    $participanteTag->appendChild($fechaTag);
    $participantesTag->appendChild($participanteTag);
    
    $xml->save('src/data/participantes.xml');     
}

/*ESTA SERIA LA CAPA DAL, SE LE PODRIA PONER EN OTRO ARCHIVO SI ESQUE SE QUISIERA  */

function invitacionPOST($opcion,$nombre_participante=''){
    $tarjeta = cabecera_tarjeta();
    $items_agenda = agenta_items();

    if ($opcion==1){
        $mdl_mensaje_titulo = "¡ADIVINIASTE!";
        $mdl_mensaje_cuerpo= "VAMOS A TENER UNA HERMOSA NIÑA";
     }
     else if ($opcion==2)
     {
         insertar_participantes($nombre_participante);
         $mdl_mensaje_titulo = "REGISTRO EXITOSO";
         $mdl_mensaje_cuerpo= "TU NOMBRE SE HA REGISTRADO CON EXITO";
     }
    require_once('views/invitacion.php');

    return $contenido;
}






?>