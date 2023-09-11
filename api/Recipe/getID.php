
<?php
include "../../library/function.php";
$numid=0;
function getid($nameRecipe)
{
$sqll="SELECT id FROM  recipe WHERE nameRecipe = ?";
$userarray=array();
array_push($userarray,htmlspecialchars_decode($nameRecipe));
$res=dbexct($sqll,$userarray);

if($res->num_rows >0)
{
   $num_rows=$res->num_rows;
    echo $num_rows;
}

}
?>