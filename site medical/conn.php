<?php

$db = mysqli_connect("localhost","root","","site_medicale");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>