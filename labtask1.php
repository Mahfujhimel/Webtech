<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBILE BANKING</title>
</head>
<body>
    
     
    <form method="POST" action="#" >
        name <input type="text" name="name" > <br> 
        password <input type="text" name="password" > <br>
        <input type="submit" name="submit" value="login">
    </form>
    
    <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $password= $_POST['password'];
        }
    ?>
</body>
</html>