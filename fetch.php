<?php
$con = mysqli_connect('localhost', 'homestead', 'secret', 'ajax');
$q = "SELECT * from user";
if ($response = mysqli_query($con, $q)){
    $result =  mysqli_fetch_assoc($response);

    $arr = array("users"=>$result);
    echo json_encode(array_values($arr));
}