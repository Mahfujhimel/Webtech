<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
<style>
    .phpcoding{width:1200px; margin:0 auto;background: #ddd;}
    .header, .footer{background:#444;color:#fff;text-align:center;padding:20px;}
    .header h2, .footer h2{margin:0;}
    .main{min-height:400px;padding:20px;}
    </style>
            <div class="phpcoding">
        <section class="header">
         <h2>DHAKA AIRLINES</h2>
        </section>


<section class="main">

<div align="center">
<h1>DASHBOARD</h1></div>
<hr>
<table border="1" align="center">
<tr>
<td><button><a href=""><h3>Search Flight</h3></a></td></tr></button>
<td><button><a href=""><h3>Add Flight</h3></a></td></tr></button>
<td><button><a href=""><h3>View Flight</h3></a></button></td></tr>
<td><button><a href=""><h3>View Bookings</h3></a></button></td></tr>
<td><button><a href=""><h3>Add popular flights and offers</h3></a></button></td></tr>
<td><button><a href=""><h3>View cancel and refund requests</h3></a></button></td></tr>
<td><button><a href=""><h3>Approve Bookings</h3></a></button></td></tr>
<td><button><a href=""><h3>View Users</h3></a></button></td></tr>
<td><button><a href=""><h3>Cancel & Refund request</h3></a></button></td></tr>
</table>
<table border="1" align="center">
<td></div><button><a href="logout.php"><h2>Log Out</h2></a></button></td></tr>
</table>
<?php
  if(isset($_POST['submit']))
  {     
    session_start();
    $_SESSION['name']= htmlentities( $_POST['u_name']);
    echo "<h1>Welcome".$_SESSION['u_name']."</h1>";       
    header('Location: index.php');
     
      }
{
    echo"WELCOME";
}
?>

</section>

<section class="footer">
<h1>You can trust here</h1>
</section>
    
</body>
</html>