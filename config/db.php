<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "std_db",
    3307
);

if(!$conn)
{
    die("Connection Failed");
}

?>