<link rel="stylesheet" href="login.css">
<!DOCTYPE html>
<html>
<head>
    <title>Login/Sign Up</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form>
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="txt" placeholder="User name" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Password" required="">
            <button>Sign up</button>
        </form>
    </div>

    <div class="login">
        <form>
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Password" required="">
            <button>Login</button>
        </form>
    </div>
</div>
<?php
    require "Database.php";
    $db = new Database();
    $db = $db->getConnection();
    $q = $db->query("SELECT * FROM users");
    if ( 'email' != $q['email']){

    }else{
        query("INSERT INTO users ('pseudo','email','password') VALUES ('txt','email','pswd')");
    }
?>

</body>
</html>