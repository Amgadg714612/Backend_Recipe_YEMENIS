<?php
include "database.php";
function dbexct($sql,$par)
{
    $da  = new Database();
    $da->getconection();
    $mycon=$da->con;
    $stat=$mycon->prepare($sql);
    $stat->execute($par);
    return $stat;

}

?>