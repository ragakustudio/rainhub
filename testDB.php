<?php
$con = new mysqli("localhost","radstori_rainhub","Rags99Rkun1112Nyad","radstori_rainhub");

if ($con->connect_errno) {
    die("ERROR: ".$con->connect_error);
}

echo "CONNECTED!";
