<?php include('server.php'); ?>
<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<!DOCTYPE html>
<html>
<style>
body {
            background-image: url("Auditorium-SeminarHall01.jpg");
            background-repeat: no-repeat;
            background-position: center;
            margin: 0px;
            padding: 0px;
            height: 100%;
            width: 100%;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;}

form {
     
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 45%;
      height: 50%;
      border:none;
    }


h1{
  text-align: center;
}

/* Full-width input fields */
input[type=text], input[type=password] {
width: 90%;
  padding: 15px;
  margin: 12px 0px 22px 22px;
  display: inline-block;
  border: none;
  border: 1px solid #ccc;
  box-sizing: border-box;

}

label{
 margin-top: 12px;
 margin-left: 22px;
}



button {
  text-align: center;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 30px;
  border: none;
  cursor: pointer;
  width: 70%;
}

button:hover {
  opacity: 0.8;
}

.submit{
text-align: center;
  margin-left: auto;
      margin-right: auto;
      width: 70%;
}

.container {
  padding: 16px;
  background: white;
  border:none;
}

p{
  text-align: center;
  color: silver;
  font-size: 14px;
}

.error{
  width:40%;
  margin:0px auto;
  padding: 5px;
  border: 1px solid #a94442;
  color: #a94442;
  background: #f2dede;
  border-radius:5px;
  text-align: center;
}
.error1{
  color: #a94442;
}

.success{
  text-align: middle;
  font-weight: 3px;
  background: #b3ffb3;
  border-radius: 5px;
  color: #00b300;
  font-size: 20px;
  padding: 10px;
}

</style>
<body>

<h1>SIGN UP</h1>

<form action="signup.php" method="post">

  <div class="container">


<?php $errors=array(); ?>

<?php if($psw != $psw2){
      array_push($errors, "The two passwords do not match");
    }
?>

<?php if (count($errors) > 0): ?>
  <div class="error">
    <?php foreach ($errors as $error): ?>
      <p class="error1"><?php echo $error;?></p>
    <?php endforeach ?>
   
  </div>
<?php endif ?>
   
   
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required>
    <br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <label for="psw2"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="psw2" required>
    <br>
     <div class="submit">
     <button type="submit" name="register">Register</button>
      </div>
    #<p>Already have an account? <a href="login.php">Log In</a> </p>
 

    <?php if ($sql): ?>
    <p class="success"> <?php echo "You have registered successfully!"; ?> <a href="login.php">Login Now</a></p>
    <?php endif ?>

  </div>
</form>

</body>
</html>