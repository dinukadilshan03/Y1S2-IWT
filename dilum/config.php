<?php

    $connection = new mysqli("localhost","root","","smartdoc");

    if($connection -> connect_error){
        die("Connetion falied".$connection -> connect_error);
    }
?>