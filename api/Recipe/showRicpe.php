<?php
include "../../library/function.php";
//$id=$_POST["id"];
$sql="SELECT * FROM `recipe` ";
//$sql="SELECT * FROM `recipe` where id=?";

//$userarray=array();
//array_push($userarray,htmlspecialchars_decode($id));
$res=dbexct($sql,[]);

//$res=dbexct($sql,$userarray);

if($res->rowCount() >0)
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



?>