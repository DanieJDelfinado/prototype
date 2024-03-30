<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
        
        
    <center>
       
       <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
         <div class="login">
         <h1>Log-in</h1>
            <form action="connect.php" method="post">
              
                <label for="">Stduent ID/Email: </label>
             <input type="text" id="username" name="username" required> <br><br>
             <label for="">Password: </label>
             <input type="password" id="password" name="password" required> <br><br>
               <input type="submit" id="submit" name="submit" value="Log-in" class="submit">
            </form>
         </div>


     </center>
    </body>
   
          
</html>

<?php
   
    if (isset($_GET['error'])) {
        $error_message = "";
       
        switch ($_GET['error']) {
            case 'invalid_credentials':
                $error_message = "Invalid username or password. Please try again.";
                break;
            case 'username_not_found':
                $error_message = "Username not found. Please check your username and try again.";
                break;
           
            default:
                $error_message = "An error occurred. Please try again.";
                break;
        }
       
        echo '<script>alert("' . $error_message . '");</script>';
    }
?>