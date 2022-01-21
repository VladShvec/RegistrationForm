<?php
    include 'mysqli.php';
    if($_POST['password'] !== '' && strlen($_POST['password']) > 5 ){
        print_r($_POST['password']);
        $login_password = md5($_POST['password']);
    }else{
        header('Location: sorry.php');
    }
    if($_POST['username'] !== '' && strlen($_POST['username']) > 2 ){
        print_r($_POST['username']);
        $login_nickname = $_POST['username'];
    }else{
        header('Location: sorry.php');
    }




    //Get a table
    $sql = "SELECT `id`, `name`, `surname`, `email`, `username`, `password` FROM `user` WHERE 1";

    //Sending query
    $result_set = $mysqli->query($sql);
    $table = [];

    while(($row = $result_set->fetch_assoc()) != false){
        $table[] = $row;
    }
//    print_r($table);

    for($i = 0; $i < count($table); $i++){
        setcookie('username',$login_nickname, time() + 3600, '/');
        setcookie('password', $login_password, time() + 3600, '/');
        if($table[$i]['username'] == $login_nickname && $table[$i]['password'] == $login_password){

            header('location: grat.php');
                exit();
        }else{
            header('Location: sorry.php');
        }
    }
