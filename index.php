<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RegForm</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="root">
<div id='root_container' class="container pt-5">
    <form action="form_check.php" method="post" class="w-50 container">
        <input type="text" class="form-control mt-3 "  name="name" placeholder="Please write your name">
        <input type="text" class="form-control mt-3"  name="surname" placeholder="Please write your surname">
        <input type="text" class="form-control mt-3"  name="email" placeholder="Please write your email">
        <input type="text" class="form-control mt-3"  name="username" placeholder="Please write your nickname">
        <input type="text" class="form-control mt-3 mb-5"  name="password" placeholder="Please write your password">
        <input type="submit" class="btn btn-success">
    </form>
</div>
</div>
</body>
</html>