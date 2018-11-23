<?php
$con = mysqli_connect('localhost', 'homestead', 'secret', 'ajax');
if ($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(mysqli_query($con, "INSERT INTO user VALUES (null, '$name', '$email', '$pass')")){
        echo 'saved';
    }else {
        echo 'failed';
    }
}