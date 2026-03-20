<?php
    require('../config/database.php');

    //get data
    //variables       -alias
    $f_name  = $_POST['fname'];
    $l_name  = $_POST['lname'];
    $email   = $_POST['email'];
    $m_phone = $_POST['mphone'];
    $p_sswd  = $_POST['passwd'];

    //query to insert into SQL
    $sql = "INSERT INTO users (firstname, lastname, email, mobil_phone, password) VALUES ('$f_name', '$l_name', '$email', '$m_phone', '$p_sswd')";
    
    //execute query
    pg_query($sql);



?>