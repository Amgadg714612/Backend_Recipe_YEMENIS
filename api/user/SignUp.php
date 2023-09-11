<?php
header("Access-Control-Allow-Origin");
header("Content_Type:application/json; charset=UTF-8");
include "../../library/function.php";
if(
isset($_POST["name"])
&&isset($_POST["pass"])
){
$name=$_POST["name"];
$pass=$_POST["pass"];
$sql="INSERT INTO user( name, pass) VALUES (?,?)";
$userarray=array();
array_push($userarray,htmlspecialchars_decode($name));
array_push($userarray,htmlspecialchars_decode($pass));
$res=dbexct($sql,$userarray);
$resjson=array("rest"=>"seccuss");
echo json_encode($resjson);
}
else
{
    echo "enter field";
}
?>