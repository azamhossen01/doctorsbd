<?php
 define('HOST','localhost');         //hostname
 define('USER','root'); //username
 define('PASS','');        //user password
 define('DB','doctorsbd');  //database name
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

?>