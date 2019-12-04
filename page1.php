<?php
$l="localhost";
$lo="root";
$lca="";
$lcal="api";

$database=mysqli_connect($l,$lo,$lca,$lcal);
if(!$database){
echo "connection failed";
}
$quateId="461";
// SELECT * FROM `quote` WHERE entity_id="$id";
 $select = "SELECT * FROM  quote WHERE entity_id='$quateId'";
$con = mysqli_query($database,$select);
$fetch= mysqli_fetch_assoc($con);
// echo "<pre>";print_r($fetch);echo "</pre>";
echo json_encode($fetch);
?>

