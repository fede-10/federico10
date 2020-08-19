<?php
    $link = mysqli_connect ("localhost","root","","bbva");
    
    if (!$link) {
        die("No hay conexión: ".mysqli_connect_error());
    }
?>