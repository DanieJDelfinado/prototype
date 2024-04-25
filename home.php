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
    <b style="font-size: 20px;">1. Streamlined Transactions: Say goodbye to the hassle of carrying cash or additional cards. Our system allows students to use their school IDs as a one-stop solution for all their cafeteria purchases. <br> 
       2. Effortless Fund loading: students can easily load funds into their school IDs through designated terminals or mobile phones, ensuring they always have the necessary balance fir their dining needs. <br>
       3. Convenient Purchases: Making purchases at the cafeteria has never been easier. Students simply needs to present their school IDs, which are scanned by the cafeteria staff, and transaction are swiftly processed through the system. <br>
        4. Real-Time Balance Checking: With the touch of a button, students can check their ID balances in real-time, empowering their knowledge of their remaining funds for future purchases. <br>    
       5. Lost ID Protection: In the unfortunate event of a lost or stolen ID, students can promptly report it through the system, safeguarding their funds and preventing unauthorized usage. <br>       
       6. Remote Transaction Monitoring: Parents, even those living abroad, can remotely monitor their children's cafeteria transactions in real-time through a secure online portal or mobile application.   <br>
        
    
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