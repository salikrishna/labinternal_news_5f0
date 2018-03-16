<html>
    <?php 
    include "config.php";
    session_start();
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        $qry= "SELECT * FROM record where username='$username' and pass='$pass'" ; 
        $out= mysqli_query($connect,$qry);
        if(mysqli_num_rows($out)>0)
        {
          echo "success";
        }
        else{
           echo "invalid login or password";
        }
        header('location:index.html');
    }
    
?>
    <head >
            <title>LOGIN</title>
            <link rel="stylesheet" href="style1.css">
    </head>
    <body>
            <form action="" method="post">
              username:<br>
              <input type="text" name="username" placeholder="username">
               <br>
               Password:<br>
               <input type="password" name="password" placeholder=".....">
                <br><br>
                <a href="index.php">LOGIN</a>
               </form>
    
    </body>
</html>

