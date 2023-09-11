<?php
include "../../../library/function.php";
if ( isset($_GET["id_recipe"]))
{
$id_recipe=$_GET["id_recipe"];
$sql="SELECT * FROM `ingredients` where id_recipe=? ";
$userarray=array();
array_push($userarray,htmlspecialchars_decode($id_recipe));
$res=dbexct($sql,$userarray);
if($res->rowCount()>0)
{ $data=array();
    while($row= $res->fetch(PDO::FETCH_ASSOC))
    {
    $data[]=$row;
    }
 $filed=array("felad");
 echo json_encode($data);

}
else {
    $resjson=array("result"=>"EMPTY");
    echo json_encode($resjson,JSON_UNESCAPED_UNICODE);


}
    }
    
    else{
        echo "error in inputs";
    }


?>