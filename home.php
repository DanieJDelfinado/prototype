<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="stylehome.css">
    <title>Home Page</title>
</head>
<body>
    
<div class="header-container">
     
     <img src="smcc.png" alt="" height="130px">  
     <h1>SMCC ID CANTEEN</h1>
   </div>
     <br>

     <nav class="nav">
    <a href="home.php" class="nav-link">HOME</a>
    <a href="load.php" class="nav-link">LOAD</a>
    <a href="bph.php" class="nav-link">BALANCE PURCHASE HISTORY</a>
    <a href="logout.php" class="nav-link" onclick="confirmLogout(); return false;">LOG OUT</a>
  </nav>

    <br><br>
    
    <center>
    <H2>ABOUT: </H2>
    </center>
      <br>
    <div class="box-container">
    <b>1. Streamlined Transactions: Say goodbye to the hassle of carrying cash or additional cards. Our system allows students to use their school IDs as a one-stop solution for all their cafeteria purchases. <br> 
       2. Effortless Fund loading: students can easily load funds into their school IDs through designated terminals or mobile phones, ensuring they always have the necessary balance fir their dining needs. <br>
       3. Convenient Purchases: Making purchases at the cafeteria has never been easier. Students simply needs to present their school IDs, which are scanned by the cafeteria staff, and transaction are swiftly processed through the system. <br>

    </b>
    </div>
    <script>

function confirmLogout() {
    
    var result = confirm("Are you sure you want to logout?");
    
   
    if (result) {
        window.location.href = "logout.php"; 
    }
}
</script>
</body>
</html>