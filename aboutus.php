<?php
      include 'connection.php';
      session_start();
?>
    
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- font awosome link -->
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <!-- Style sheet-->
  <link rel="stylesheet" href="css/aboutus.css">

  <title>About Us</title>
</head>

<body>

  <!-- Navigation manu -->
  <header class="header">
  <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <img class="logo" width="50px" height="50px" src="/project3/images/logo.jpg" alt="Logo">
      <ul>
        <li> <a href="index.php" class="active">Home<i class="fas fa-angle-down"></i></a></li>
        <li> <a href="shopping-cart.php">Shopping Cart<i class="fas fa-angle-down"></i></a></li>
        <li> <a href="portfolio.php">Portfolio<i class="fas fa-angle-down"></i></a></li>
        <li> <a href="contactus.php">Contact Us<i class="fas fa-angle-down"></i></a></li>
        <?php 
            if(!isset($_SESSION['email'])){
        ?>
            <li> <a href="login.php">Log-in<i class="fas fa-angle-down"></i></a></li>
        <?php
            }
        ?>
        <?php 
            if(isset($_SESSION['email'])){

                $sql4 = "SELECT `name` FROM lotory_login WHERE email='$_SESSION[email]'";
                
                $result3 = mysqli_query($conn,$sql4);

                while( $row4 = mysqli_fetch_assoc($result3)){            
        ?>
        <li> <a> Welcome <?php echo $row4['name'] ?><i class="fas fa-angle-down"></i></a></li>
        <?php
                }
            }
        ?>
        <li><button type="button" onclick="notification('notification')"><i style="color:white; font-size:20px" class="far fa-bell"></i></button></li>
      </ul>
    </nav>
  </header>
  <!-- popup -->
  <div class="popup-container" id="notification">
    <div class="popup">
        <form action="">
            <h2>hello aman prajapati 
                <button type="reset" onclick="notification('notification')">X</button>
            </h2>
            <p style="padding: 10px;">Congrets You Win A Jackpot <span style="float:right">Today 09 : 00 PM</span></p>
            <p style="padding: 10px;">Ohh You Are Very Close To A Jackpot <span style="float:right">Friday 09 : 00 PM</span></p>
            <p style="padding: 10px;">Ohh You Are Very Close To A Jackpot <span style="float:right">Friday 09 : 00 PM</span></p>
            <p style="padding: 10px;">Ohh You Are Very Close To A Jackpot <span style="float:right">Friday 09 : 00 PM</span></p>
        </form>
    </div>
  </div>

  <!-- main Form -->
  <div class="container">
    <div class="container-shadow">
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
    </div>
  </div>

  <!-- for notification popup -->
  <script type="text/javascript">
    function notification(notification_name)
    {
        notification_value=document.getElementById(notification_name);
        if(notification_value.style.display=='flex')
        {
            notification_value.style.display='none';
        }
        else
        {
            notification_value.style.display='flex';
        }
    }
  </script>

</body>

</html>