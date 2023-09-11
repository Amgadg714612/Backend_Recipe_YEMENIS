<?php
include "../../library/function.php";
if(
isset($_POST["name"])
&&isset($_POST["pass"])
){
 $name=$_POST["name"];
$pass=$_POST["pass"];
$sql="SELECT * FROM user WHERE name=? and pass=?";
$userarray=array();
array_push($userarray,htmlspecialchars_decode($name));
array_push($userarray,htmlspecialchars_decode($pass));
$res=dbexct($sql,$userarray);
if($res->rowCount()>0)
{
    $resjson=$res->fetch();
    $resjson=array("result"=>"TRUEE");
    echo json_encode($resjson,JSON_UNESCAPED_UNICODE);

}
else {
    $resjson=array("result"=>"EMPTY");
    echo json_encode($resjson,JSON_UNESCAPED_UNICODE);


}

}
else
{
    echo "enter field";
}


?>