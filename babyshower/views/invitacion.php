<?php 
$contenido = "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Baby Shower</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='css/invitacion.css'>
    <link rel='stylesheet' href='css/hero.css'>
    <link rel='stylesheet' href='css/cloud.css'>
    <link rel='stylesheet' href='css/agenda.css'>
    <link rel='stylesheet' href='css/mediaQuery.css'> 
</head>
<body>
    <nav class='navbar bg-light fixed-top'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='#'>Baby Shower</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasNavbar' aria-controls='offcanvasNavbar'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='offcanvas offcanvas-end' tabindex='-1' id='offcanvasNavbar' aria-labelledby='offcanvasNavbarLabel' >
            <div class='offcanvas-header'>
              <h5 class='offcanvas-title' id='offcanvasNavbarLabel'>Baby Shower</h5>
              <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
            </div>
            <div class='offcanvas-body'>
              <ul class='navbar-nav justify-content-end flex-grow-1 pe-3'>
                <li class='nav-item'>
                  <a class='nav-link active' aria-current='page' href='#'>TARJETA DE INVITACION</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#agenda'>AGENDA</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </nav>    
    <div class='container-fluid hero'  >
        <div class='row align-items-center'>
            <div class='col-md-5' style='z-index: 1000;'>
                <h1>$tarjeta->titulo</h1>
                <p>$tarjeta->subtitulo </p>
                <h2 >$tarjeta->nombre_persona</h2>
                <br>
                <p>$tarjeta->texto_fecha</p>
                <p>$tarjeta->calles</p>
                <p>$tarjeta->ciudad</p>
                <button  type='button' class='btn btn-primary confirma_asistencia' data-bs-toggle='modal' data-bs-target='#mdl_confirma_asistencia'>CONFIRMA TU ASISTENCIA</button>
            </div>
            <div class='col-md-7 floating-elements' >
            
            </div>
        </div>
        <!--START CLODUDS-->
        <div class='cloud_container'>
            <div class='cloud cloud1'>

            </div>
            <div class='cloud cloud2'>

            </div>
            <div class='cloud cloud3'>

            </div>
            <div class='cloud cloud4'>

            </div>
            <div class='cloud cloud5'>

            </div>
    
            <div class='cloud cloud6'>

            </div>
        </div>
         <!--END  CLODUDS-->
    </div>
    <!--START SCHEDULE-->  
    <div class='container-fluid  agenda' id='agenda'>
        <div class='text-center transparent agenda_tittle'>  
                <h1>AGENDA</h1>
        </div>
        <br><br>
        <div class='row'> 
                <div class='col-md-4 offset-md-4'>";
                    foreach($items_agenda as $item)
                    {
                        $contenido.= "
                        <div class='agenda-item'>
                            <p class='time'>$item->hora</p>
                            <h3>$item->titulo</h3>
                            <img src='$item->url_imagen' alt='Ariane Sove'>
                            <p>$item->descripcion</p>    
                        </div>";
                    }
$contenido.= "  </div>
        </div>
    </div>
     <!--END SCHEDULE-->   
    <div class='modal fade' id='mdl_confirma_asistencia' tabindex='-1' aria-labelledby='lbl_mdl_confirma_asistencia' aria-hidden='true' >
        <div class='modal-dialog' style='display:hidden ;'>
            <div class='modal-content'>
                <div class='modal-header'>
                <form method = 'POST' name= 'frm_confirmar_asistencia'>
                    <h5 class='modal-title' id='lbl_mdl_confirma_asistencia'>FORMULARIO</h5>
                    </div>
                    <input type='hidden' name='opcion' value='2' >
                    <div class='modal-body'>
                            <div class='mb-3'>
                                <input required type='text' name ='nombre_participante' class='form-control' id='nombre_participante' placeholder='INGRESA TU NOMBRE'>
                            </div>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>HACERLO MAS TARDE</button>
                        <button type='submit' class='btn btn-primary'>ENVIAR AHORA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class='modal fade' id='mdl_adivinaste' tabindex='-1' aria-labelledby='lbl_mdl_adivinaste' aria-hidden='true' >
        <div class='modal-dialog'>
            <div class='modal-content custom_modal'>
                <div class='modal-body'>
                    <img src='https://cdn.pixabay.com/animation/2024/07/16/16/50/16-50-52-689_512.gif' data-bs-dismiss='modal' aria-label='Close' width='125'>
                    <p> !FELICIDADES ADIVINASTE ¡  </p>
                    <p>$mdl_mensaje_cuerpo</p>
                    <button type='button' class='btn btn-secondary confirma_asistencia' data-bs-dismiss='modal'>VER TARJETA DE INVITACIÓN</button>
                </div>
            </div>
        </div>
    </div>

    <canvas id='confetti-canvas'></canvas>

    <footer class='mt-4 text-right'>   
            <p>&copy; 2025 realizado por Stalin Copa</p>
    </footer>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js'></script>
    <script src='js/invitation.js'> </script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>";

?>
