<?php

    //change them
    $server = 'localhost';
    $name = 'root';
    $passcode = '';
    $database = 'users';

    $db_connect = mysqli_connect($server,$name,$passcode,$database);

    if(!$db_connect){
        die('Error'.mysqli_connect_error());
}


?>
