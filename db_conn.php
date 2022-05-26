<?php

$sname= "feenix-mariadb.swin.edu.au";

$unmae= "s103983670";

$password = "040603";

$db_name = "s103983670_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}