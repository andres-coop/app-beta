<?php
require("../config/database.php");
$sql_users="SELECT u.firstmane ||''|| u.lastname as fullname";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <title>LIST USERS</title>
</head>
<body>
    
    <table border= "4px" align= "center" bordercolor="brown">
    <tr>
        <th>Fullname</th>
        <th>Email</th>
        <th>Number phone</th>
        <th>Status</th>
        <th>Photo</th>
        <th>Options</th>

    </tr>
    <tr>
        <td>Juan Cuaspa</td>
        <td>juan@gmail.com</td>
        <td align="center">31256776754</td>
        <td>Active</td>
        <td align="center"><img src="profile_photos\user_default.png" width="25" alt="User photo" align="center"></td>
        <td>
        <a href="#"> <img src="icons\lapiz.png" width="25" alt="Edit user"></a>
        &nbsp;&nbsp;
        <a href="#"> <img src="icons\trash.png" width="25" alt="Delete user"></a>
        </td>
    </tr>    
    </table>

</body>
</html>