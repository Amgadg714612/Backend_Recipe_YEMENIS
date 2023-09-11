<?php
header("Access-Control-Allow-Origin");
header("Content_Type:application/json; charset=UTF-8");
include "../../library/function.php";
function  addingred($id_recipe)
{
if(
isset($_POST["name_ingred"])
&&isset($_POST["musur_ingred"])
){
$nname_ingred=$_POST["name_ingred"];
$musur_ingred=$_POST["musur_ingred"];
$sql="INSERT INTO recipe(name_ingred, musur_ingred,id_recipe) VALUES (?,?,?)";
$userarray=array();
array_push($userarray,htmlspecialchars_decode($name_ingred));
array_push($userarray,htmlspecialchars_decode($musur_ingred));
array_push($userarray,htmlspecialchars_decode($id_recipe));

$res=dbexct($sql,$userarray);
$resjson=array("rest"=>"seccuss of ingred");
echo json_encode($resjson);
}
else
{
    echo "enter field";
}
}
?>