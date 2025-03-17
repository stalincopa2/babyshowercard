<?php 
header("Content-Type:application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename= ListaParticipantes.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
    <table>
         <thead>
            <tr>
                <th>NRO </th>
                <th>NOMBRE</th>
                <th>HORA<th>
            </tr>
        </thead>
        <tbody>
  <?php    

   $participantes = simplexml_load_file('src/data/participantes.xml');
   $i=1;
   foreach ($participantes as $participante ){
     ?>
             <tr>
                <td><?php  echo $i ?></td>
                <td><?php  echo utf8_decode($participante->nombre) ?></td>
                <td><?php  echo $participante->fecha ?> </td>  
            </tr>
        <?php  $i++; }?>
        </tbody>
   </table>
