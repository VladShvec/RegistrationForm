<?php
    // Form Data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //DataBase data
    const DB_HOST = 'localhost';
    const DB_USER = 'mysql';
    const DB_PASSWORD = '';
    const DB_DATABASE = 'mysite';

    //DataBase connect
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

    //Error find
    if($mysqli->connect_errno) exit('Ошибка: не удалось подключиться к базе данных');
    $mysqli->set_charset('utf8');

    //Creating $sql var with sql query
    $sql = $sql = "INSERT INTO user
        (name, surname, email, username, password)
        VALUES ('$name','$surname','$email','$username','$password')";
    $mysqli->query($sql);
    $mysqli->close();

    header('Location: login.php');
    exit();