<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet"/>
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        .alert{
  margin: 150px 500px;
}
body{
   font-size:1.5rem;
}
.alert h3{
   font-size : 2rem;
   padding: 2px;
   letter-spacing: 1px;
}
a{
  text-decoration:none;
}
form p{
    margin: 20px 35px;
    font-size:1rem;
}

        </style>
</head>
<body>
    <?php 
    require('db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['number'])){
        $number = $_POST['number']; 
        $password = $_POST['password'];
        $query = "SELECT * FROM `users` WHERE number='$number'
                            and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['number'] = $number;
            // Redirect user to index.php
	    header("location: home.php");
         }
    else{
	echo "
    <div class='alert'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
        }else{
    ?>
    <form class = "frm" action="login.php" method="Post" name = "login">
        <h3>Login Here</h3>

        <label for="number">Number</label>
        <input type="text" name ="number" placeholder=" number " id="number">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">

        <input type="submit" value="Log In" name = "submit" id = "login" class="button">
        <p><a href="signup.php">Haven't Account Yet ? SignUp.</a></p>
    </form>
    <?php } ?>
</body>
</html>
