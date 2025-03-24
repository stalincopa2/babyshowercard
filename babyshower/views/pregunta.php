<?php 
$contenido = " 
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>¿Baby Shower Invitación?</title>
    <script src='https://kit.fontawesome.com/d30d758eef.js' crossorigin='anonymous'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/main.css'>
   
</head>
<body>
    <div class='container'>
        <h1>¿CREES QUE NUESTRO FUTURO BEBÉ ES NIÑO O NIÑA?</h1>
        <form method='POST' name='frm_respuesta'>
            <input id='opcion' name='opcion' value='1' type='hidden'>
            <div id='buttons'>
                <button type='button' id='maleButton'><i class='fa-solid fa-person'></i> NIÑO</button>
                <button type='submit' id='femaleButton'> <i class='fa-solid fa-person-dress'></i> NIÑA</button>
            </div>
        </form>
    </div>
    
    <div class='modal fade' id='mdl_fallaste' tabindex='-1' aria-labelledby='mdl_fallaste' aria-hidden='true' style='overflow-x: hidden;'>
        <div class='modal-dialog'>
            <div class='modal-content  custom_modal'>
                    <div class='modal-body'>
                        <p>SIGUE INTENTANDO</p>
                        <img src='https://cdn.pixabay.com/animation/2023/10/16/00/18/00-18-10-985_512.gif' data-bs-dismiss='modal' aria-label='Close' width='125'>
                    </div>
            </div>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
</body>
<script> 
    let noCount = 0;
    let maleButton = document.getElementById('maleButton');

    maleButton.addEventListener('click', function(){
        $('#mdl_fallaste').modal('show'); // Muestra el modal automáticamente
    })
</script>
</html>  ";
?>



