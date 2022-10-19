<?php

    $con = mysqli_connect("localhost","root","","painel_crud");

    if(!$con){
        die('connection Failed'. mysqli_connect_error());
    }

?>