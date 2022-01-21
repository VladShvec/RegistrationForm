<?php
include 'mysqli.php';

//Form Name Validation
if ($_POST['name'] !== '') {
    $name = $_POST['name'];

} else {
    header('Location: index.html');
};

//Form Surname Validation
if ($_POST['surname'] !== '' && strlen($_POST['surname']) > 2) {

    $surname = $_POST['surname'];
} else {
    header('Location: index.html');
}

//Form Email Validation
if ($_POST['email'] !== '' && strpos($_POST['email'], '@')) {
    $email = $_POST['email'];
} else {
    header('Location: index.html');
}

//Form UserName Validation
if ($_POST['username'] !== '' && strlen($_POST['username']) > 2) {
    $result_set = $mysqli->query("SELECT `username` FROM `user`");
    $table = [];
    while(($row = $result_set->fetch_assoc()) != false){
        $table[] = $row;
    }
    for($i = 0; $i < count($table); $i++){
        if($table[$i]['username'] === $_POST['username']){
            header('Location: login.php');
        }
    }
    $username = $_POST['username'];

} else {
    header('Location: index.html');
}

//Form Password Validation
if ($_POST['password'] !== '' && strlen($_POST['password']) > 5) {
    $password = md5($_POST['password']);
} else {
    header('Location: index.html');
}

//   )
//Creating $sql var with sql query
if($name !== '' and $surname !== '' and $email !== '' and strpos($email,'@') and $username !== '' and $username < 3  and $password !== ''  and strlen($password) > 5 ){

    $sql = $sql = "INSERT INTO user
        (name, surname, email, username, password)
        VALUES ('$name','$surname','$email','$username','$password')";
    $mysqli->query($sql);
//    header('Location: login.php');
}

$mysqli->close();


exit();