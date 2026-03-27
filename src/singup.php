<?php
    require('../config/database.php');

    //get data
    //variables       -alias
    $f_name  = $_POST['fname'];
    $l_name  = $_POST['lname'];
    $email   = $_POST['email'];
    $m_phone = $_POST['mphone'];
    $p_sswd  = $_POST['passwd'];


    //enciptar
    $enc_pass = md5($p_sswd);

    //query to insert into SQL
    $sql = "INSERT INTO users (firstname, lastname, email,mobile_phone, password ) 
    VALUES ('$f_name', '$l_name', '$email', '$m_phone', '$enc_pass')";

    //email RAMA 1 
    $check_email = "SELECT email FROM users WHERE email = '$email'";
    $res_email = pg_query($local_conn, $check_email);

    if (pg_num_rows($res_email) > 0) {
        echo "Error: El correo electrónico '$email' ya está registrado. Por favor, use uno diferente.\n";
        exit();
    }
    
    


    //number RAMA 2
    $check_phone = "SELECT mobile_phone FROM users WHERE mobile_phone = '$mphone'";
    $res_phone = pg_query($local_conn, $check_phone);

    if (pg_num_rows($res_phone) > 0) {
        echo "Error: El número de celular '$mphone' ya está registrado."; 
        exit();
    }

    if ($res_local) {
    $res_supa = pg_query($supa_conn, $sql);

    if ($res_supa) {
        echo "Guardado en ambos lados.";
    } else {
        echo "Error: Se guardó en local pero no en la nube.";
    }   
        } else {
        echo "Error: No se pudo guardar ni en local.";
    }
    
    $res_local = pg_query($local_conn, $sql);





    
    //execute query
    //pg_query($sql);



?>