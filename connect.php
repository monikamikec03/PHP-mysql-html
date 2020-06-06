<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $basename = "projekt";

    $dbc = mysqli_connect($servername, $username, $password, $basename) or die("Error connecting to database" . mysqli_error());
    mysqli_set_charset($dbc, "utf8");
?>