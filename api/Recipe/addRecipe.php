<?php
header("Access-Control-Allow-Origin");
header("Content_Type:application/json; charset=UTF-8");
include "../../library/function.php";
if(
isset($_POST["nameRecipe"])
&&isset($_POST["assessmentRecipe"])
&&isset($_POST["uriImage"])
){
$nameRecipe=$_POST["nameRecipe"];
$assessmentRecipe=$_POST["assessmentRecipe"];
$uriImage=$_POST["uriImage"];

$text=$_POST["text"];
$sql="INSERT INTO recipe(nameRecipe , assessmentRecipe,uriImage,text) VALUES (?,?,?,?)";
$userarray=array();
array_push($userarray,htmlspecialchars_decode($nameRecipe));
array_push($userarray,htmlspecialchars_decode($assessmentRecipe));
array_push($userarray,htmlspecialchars_decode($uriImage));
array_push($userarray,htmlspecialchars_decode($text));
$res=dbexct($sql,$userarray);
$resjson=array("rest"=>"seccuss");
echo json_encode($resjson);
}
else
{
    echo "enter field";
}
?>