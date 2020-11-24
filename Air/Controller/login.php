<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>
</head>
<body>
    <style>
    .phpcoding{width:1200px; margin:0 auto;background: #ddd;}
    .header, .footer{background:#444;color:#fff;text-align:center;padding:20px}
    .header h2, .footer h2{margin:0;}
    .main{min-height:400px;padding:20px}
    </style>

<div class="phpcoding">
<section class="header">
<h2>DHAKA AIRLINES</h2>
</section>




<section class="main">

<h1>Login</h1>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<div>
<label><h2>
User Name</h2>
</label>
<input type="text" id="form_fname" name="u_name" value="" >
</div>
<br>
<div>
<label><h2>Password</h2></label>
<input type="password" id="form_password" name="u_pass" value="">
</div>
<br>
    

<input type="submit"name="submit"value="Login">
<span style="color:red">></span>
<span><b>Or Register <a href="registration.php">here</a></b></span>
</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")

{
$user_name=validate($_POST["u_name"]);
$password=validate($_POST["u_pass"]);

echo "user_name: ".$user_name."<br/>";
echo "password: ".$password."<br/>";

}
function validate($data)
{
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>
<?php
  if(isset($_POST['submit']))
  {     
    session_start();
    $_SESSION['name']= htmlentities( $_POST['u_name']);
    echo "<h1>Welcome".$_SESSION['u_name']."</h1>";       
    header('Location: index.php');
     
      }
?>
</section>


<section class="footer">
<h2>You can trust here</h2>
</section>

</body>
</html>