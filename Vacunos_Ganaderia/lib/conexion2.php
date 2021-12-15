<?php

$dbname= "gmrle9htskupfott";
$port= "3306";
$user = "h66vns8stpfzqkir";
$password = "vc648khclp6p1v1q";

try {
    $dsn = "mysql://uzb4o9e2oe257glt.cbetxonaws.com:dbname=$dbname";
    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e){
    echo $e->getMessage();
}

?>