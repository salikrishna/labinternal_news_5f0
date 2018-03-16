<html>
    <?php 
    include "config.php";
    session_start();
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $email=$_POST['Email'];
        $pass=$_POST['pass'];
        $qry= "INSERT INTO `record` ( `username`, `email`, `pass`) VALUES ('$username','$email','$pass');"; 
        mysqli_query($connect,$qry) or die("connection failed: " .mysqli_error());
        header('location:login.php');
    }
    
?>
    <head >
            <title>Register</title>
            <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        
                <h2><b>Register</b></h2>
                <form action="" method="post">
                    Name:<br>
                    <input type="text" name="username" placeholder="username">
                    <br>
                    Email<br>
                    <input type="text" name="Email" placeholder="email"><br>
                    Password<br>
                    <input type="password" name="pass" placeholder=".....">
                    <br><br>
                    <input type="submit" name="sub" value="submit"> 
                   <a href="login.php">REGISTER</a>
                </form>
    
    </body>
</html>

