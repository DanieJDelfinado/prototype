<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="stylehome.css">
    <title>Load</title>
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

    
    <br><br> <br>

    <h2 style="margin-left: 399px;">Payement Method:</h2>
   
    <div class="box-container">
    <button type="submit"><img src="gcashecpay.png" alt="Submit" height="100px" width="200px"></button>
    <button type="submit"><img src="smart.png" alt="Submit" height="100px" width="200px"></button>
    <button type="submit"><img src="paypal.png" alt="Submit" height="100px" width="200px"></button>
    <button type="submit"><img src="walkin.jpg" alt="Submit" height="100px" width="200px"></button>
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