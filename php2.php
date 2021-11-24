<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Sign-up</title>
  </head>
  <body>
<!--php part-->

<?php
$msg="";
//automaic connection
include("connect.php");
//define varibles to store all
$username-$fullname-$email-$password-$co_password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
    $Username =test_input($_POST["Uname"]);

    $fullname = test_input($_POST["fname"]);

    $email = test_input($_POST["email"]); 

    $password = test_input($_POST["password"]);
    
    $co_password = test_input($_POST["co_password"]);
    //ineet data
    //1 add query 
    //2 save query
    //1
    $sql="insert into users(uname,fname,email,password) VALUE('$un','$fn','$e','$p')";
//3 exuete the query using mysql query 
$r=mysqli_query($conn,$sql);
//4 check if the query 
if($r){
  $msg="you are assign our website";

}}
mysqli_close($conn);

?>
    <!--form part-->
    <form action="welcome1.php" method="post">
        <h2>Sign Up</h2>
        <span id="err1"></span>
        <input type="text" name="Uname" placeholder="Username" required />
        <span>* <?php echo $UnameErr;?></span>
        <br />
        <input type="text" name="fname" placeholder="Full name" required />
        <span>* <?php echo $fnameErr;?></span>
        <br />

        <input type="email" name="email" placeholder="Email" required />
        <span>* <?php echo $emailErr;?></span>
        <br />

        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <span>* <?php echo $passErr;?></span>
        <br />

        <input type="password"name="co_password"placeholder="Confirm password"required/>
        <span>* <?php echo $CpassErr;?></span>
        <br />
        <button type="submit">Sign up</button>
        <span id="w"><?php echo $msg;?> </span>
      </form>

      <script>
        document.getElementById("err1").innerHTML = "<?php echo $errormsg;?>";
      </script>

      <!-- make connection to DB from connectDB.php file   -->
    

      
      
      
    </div>
  </body>
</html>


     
  
      