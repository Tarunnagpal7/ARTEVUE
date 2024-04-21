<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="signup.css" rel="stylesheet">
    <title>SignUp</title>

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
    </style>
</head>

<body>
<?php
session_start();
require('db.php');
if (isset($_REQUEST['fname'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $address = $_POST['address'];
    $password = $_POST["password"];
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (fname,lname ,number, email,adress,password, trn_date)
VALUES ('$fname','$lname', '$number', '$email','$address','".md5($password)."', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='alert'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
  <form class="form" method="post" action="" onsubmit="return validateForm()">
    <h3>SignUp Here</h3>
    
    <label for="Firstname">First Name</label>
    <input type="text" name="fname" placeholder="Firstname" required/>
    
    <label for="Lastname">Last Name</label>
    <input type="text" name="lname" placeholder="Lastname" required/>
    
    <label for="Number">Number</label>
    <input type="text" name="number" placeholder="Number" required/>
    
    <label for="Email">Email</label>
    <input type="email" name="email" placeholder="Email" required/>
    
    <label for="Address">Address</label>
    <textarea rows="5" cols="20" class="MESSAGE inp" name="address" placeholder="Address" required></textarea>

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" required/>

    <input class="button" type="submit" name="submit" value="SignUp"> 
</form>

<script>
    function validateForm() {
        var password = document.getElementsByName('password')[0].value;
        var number = document.getElementsByName('number')[0].value;
        var email = document.getElementsByName('email')[0].value;

        var rePassword = /^\w{4,8}$/;
        var reMobile = /^9\d{9}$/;
        var reEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (!rePassword.test(password)) {
            alert("Invalid password. Password must be between 4 to 8 characters.");
            return false;
        }
        if (!reMobile.test(number)) {
            alert("Invalid mobile number. Please enter a valid mobile number.");
            return false;
        }
        if (!reEmail.test(email)) {
            alert("Invalid email address. Please enter a valid email address.");
            return false;
        }
        return true;
    }
</script>
<?php }?>
</body>
</html>