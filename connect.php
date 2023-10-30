<?php

$con = mysqli_connect("localhost","id20803573_krushna","Krushna@2002");

if(!con)
{
    die("could not connect :" .mysqli_error());
}

mysqli_select_db($con,"id20803573_photography");

?>