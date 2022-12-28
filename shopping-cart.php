<?php
      include 'connection.php';
      session_start();
?>
  
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Find Rooms,Flat,Hostel,Hotel,Stanza">
    <meta name="author" content="Aman prajapati">
    
    <!-- font awosome link -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    
    <!-- Style sheet-->
    <link rel="stylesheet" href="css/shopping-cart.css">

    <title>Shoping Cart</title>
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
                <li> <a href="index.php">Home<i class="fas fa-angle-down"></i></a></li>
                <li> <a href="shopping-cart.php" class="active">Shopping Cart<i class="fas fa-angle-down"></i></a></li>
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
                <p>hello my name is aman prajapati</p>
                <p>hello my name is aman prajapati</p>
                <p>hello my name is aman prajapati</p>
                <p>hello my name is aman prajapati</p>
                <p>hello my name is aman prajapati</p>
                <p>hello my name is aman prajapati</p>
                <p>hello my name is aman prajapati</p>
                <p>hello my name is aman prajapati</p>
                <p>hello my name is aman prajapati</p>
            </form>
        </div>
    </div>

    <!-- main Form -->
    <div class="container">
        <div class="container-shadow">
            <div class="container-Details">
                <h2>Shopping Cart</h2>
                <div class="container-shopping-card">
                    <div class="container-logo">
                        <img src="/project3/images/logo.jpg" alt="Logo" width="150px" height="120px">
                    </div>
                    <div class="container-about-lotory">
                        <p>Indian-lotory Ticket - <b>5 Lakh INR</b></p>
                        <p>Total <b>1</b> Ticket</p>
                        <p>Participation on <b>Fri 11 Mar 2022</b></p>
                    </div>
                    <div class="container-payable-amount">
                        <p><b>Amount</b>: 100 INR</p>
                        <p><b>a charge</b>: 0 INR</p>
                        <p><b>b charge</b>: 0 INR</p>
                        <p><b>c charge</b>: 0 INR</p>

                        <p>Payable Amount: <b>100 INR</b></p>
                    </div>
                </div>

            </div>
            
        </div>
        <div class="payable-amount">
            <button>Pay :- 100 INR</button>
        </div>
    </div>
            <p>hello my name is aman prajapati</p>
            <p>hello my name is aman prajapati</p>
            <p>hello my name is aman prajapati</p>
            <p>hello my name is aman prajapati</p>
            <p>hello my name is aman prajapati</p>
            <p>hello my name is aman prajapati</p>
            <p>hello my name is aman prajapati</p>
            <p>hello my name is aman prajapati</p>
            <p>hello my name is aman prajapati</p>

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