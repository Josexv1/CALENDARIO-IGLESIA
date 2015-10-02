<?php
print "<script>alert('No esta permitida la eliminacion de eventos. Por favor contacte con un administrador, vea en la seccion de contactos');</script>";
//$user = EventData::getById($_GET["id"]);
//$user->del();
print "<script>window.location='index.php?view=reservations';</script>";  
?>