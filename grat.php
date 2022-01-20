<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login here</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="./css/main.css">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
//    print_r($_COOKIE['username']);
//    print_r($_COOKIE['password']);
//DataBase data
const DB_HOST = 'localhost';
const DB_USER = 'mysql';
const DB_PASSWORD = '';
const DB_DATABASE = 'mysite';

//DataBase connect
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$sql = "SELECT `username`, `password` FROM `user` WHERE 1";
$result_set = $mysqli ->query($sql);
$table = [];
while(($row = $result_set->fetch_assoc()) != false){
    $table[] = $row;
}
foreach ($table as $item => $value)
    if($value['username'] == $_COOKIE['username'] && $value['password'] == $_COOKIE['password'] ){


?>
<div class="page">
    <div id='root_container' class="container pt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
    </div>
</div>
<?php
    }else {
        echo 'Sorry this page has not available'.'<br>';
    }
?>

</body>
</html>