<?php
    $login_nickname = $_POST['username'];
    $login_password = md5($_POST['password']);
    print_r($login_password);
    //DataBase data
    const DB_HOST = 'localhost';
    const DB_USER = 'mysql';
    const DB_PASSWORD = '';
    const DB_DATABASE = 'mysite';

    //DataBase connect
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

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
        if($table[$i]['username'] == $login_nickname && $table[$i]['password'] == $login_password){
            header('location: grat.php');
            exit();
        }else {
            echo 'Что-то пошло не так';
            header('location: sorry.php');

        }
    }
