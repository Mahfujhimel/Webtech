<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
<hr/> <h1>REGISTRATION FORM</h1><hr/>
<table>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <tr>
        <td>Name </td>
        <td><input type="text"Name="name"> </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text"Name="email"></td>
    </tr>
    <tr>
        <td>User Name</td>
        <td><input type="text"Name="user name"></td> 
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="value"Name="password"></td> 
    </tr>
    <tr>
        <td>Confirm Password</td>
        <td><input type="value"Name="confirm password"></td> 
    </tr>
    <tr>
    <tr>

    <tr>
        <br>
        <td></td>
        <td><input type="Submit"Name="Submit"Value="Submit"></td>
    </tr>
</table>
</form>
<?php
        if(isset($_POST['submit']))
?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=validate($_POST["name"]);
$email=validate($_POST["email"]);
$user_name=validate($_POST["user_name"]);
$password=validate($_POST["password"]);
$confirm_password=validate($_POST["confirm_password"]);

echo "Name: ".$name."<br/>";
echo "Email: ".$email."<br/>";
echo "User_name: ".$user_name."<br/>";
echo "Password: ".$password."<br/>";
echo "Confirm_password: ".$confirm_password."<br/>";
$filename="user.txt";
$file = fopen( $filename, 'a' );
fwrite( $file,"name: ". $name."\n");


fclose($file);

}
function validate($data)
{
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>



</section>

<section class="footer">
<h2>You can trust here</h2>
</section>




    
</body>
</html>