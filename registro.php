<?php

    $realname  = $_POST['realname'];
    $username  = $_POST['username'];
    $correo    = $_POST['mail'];
    $password  = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    $reqlen    = strlen($realname) * strlen($username) * strlen($correo) * strlen($password) * strlen($rpasssword);

    if ($reqlen > 0) {
        if ($password === $rpasssword) {
            require("connect_db.php");
            $password = md5($password);

            mysql_query("INSERT INTO usuarios VALUES (null,'$realname','$username','$correo','$password')");
            mysql_close($link);
            
            echo 'se ha registrado correctamente';

         } else {
             echo 'por favor, introduzca dos contraseñas idénticas'
         } else {
            echo 'rellene los espacios vacíos'
         }

         ?>