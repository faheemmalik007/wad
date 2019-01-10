<?php
/**
 * Created by PhpStorm.
 * User: l1f16bscs0017
 * Date: 1/10/2019
 * Time: 5:26 PM
 */


$con = mysqli_connect("localhost","root","","Tech_Box");
if(!$conn)
{
    die("Connection Failed!");
}
else
{
    echo "Connection Successful";
}
?>