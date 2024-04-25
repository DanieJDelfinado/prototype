<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMCC Canteen log-in</title>
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

     <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            
            var formData = new FormData(this);
            
            fetch('connect.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    // Redirect to home page or do something else on successful login
                    window.location.replace("home.html");
                } else {
                    // Display error message
                    alert("Invalid username or password. Please try again.");
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
    </body>
   
          
</html>

