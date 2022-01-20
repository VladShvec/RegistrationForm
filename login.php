<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login here</title>
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
        <div class="left_button">
            <button class="btn btn-info">
                <a class="badge badge-info" href="index.php">Go Back</a>
            </button>
        </div>
        <form action="login_check.php" method="post" class="w-50 container">
            <input type="text" class="form-control mt-3"  name="username" placeholder="Please write your username">
            <input type="text" class="form-control mt-3 mb-5"  name="password" placeholder="Please write your password">
            <input type="submit" class="btn btn-success">
        </form>
    </div>
</div>
</body>
</html>