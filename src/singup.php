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
    //$enc_pass = md5($p_sswd);
     $enc_pass = password_hash($p_sswd, PASSWORD_BCRYPT);
    

    //query to insert into SQL
    $sql = "INSERT INTO users (firstname, lastname, email,mobile_phone, password ) 
    VALUES ('$f_name', '$l_name', '$email', '$m_phone', '$enc_pass')";


    $check_email = "SELECT email FROM users WHERE email = '$email'";
    $res_email = pg_query($local_conn, $check_email);

    if (pg_num_rows($res_email) > 0) {
        echo "Error: El correo electrónico '$email' ya está registrado. Por favor, use uno diferente.\n";
        exit();
    }
    

   
    $check_phone = "SELECT mobile_phone FROM users WHERE mobile_phone = '$m_phone'";
    $res_phone = pg_query($local_conn, $check_phone);

    if (pg_num_rows($res_phone) > 0) {  
        echo "Error: El número de celular '$m_phone' ya está registrado en la base de datos.\n"; 
        exit();
    }
    
    $res_local = pg_query($local_conn, $sql);


  
    if ($res_local) {
    $res_supa = pg_query($supa_conn, $sql);
    
  
    if ($res_supa) {
        //echo "Usuario registrado.\n";
        echo "<script>alert('Usuario registrado.')</script>";
        header('refresh:0;url=signin.html');
    } else {
        echo "Error: Se guardó en local pero no en la nube...\n";
    }   
        } else {
        echo "Error: No se pudo guardar...\n";
    }
    
    

    




    
    //execute query
    //pg_query($sql);



?>