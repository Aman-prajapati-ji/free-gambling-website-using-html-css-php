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
    <link rel="stylesheet" href="css/portfolio.css">

    <title>Portfolio</title>
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
                <li> <a href="shopping-cart.php">Shopping Cart<i class="fas fa-angle-down"></i></a></li>
                <li> <a href="portfolio.php" class="active">Portfolio<i class="fas fa-angle-down"></i></a></li>
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
                <h3>Welcome:- <strong>Aman Prajapati</strong></h3>
                <p><b>Your Name</b> :- Aman Prajapati</p>
                <p><b>Address</b> :- Near Shiv Mandir, Dhulkot</p>
                <p><b>City, State</b> :- Burhanpur, Madhya Pradesh</p>
                <p><b>email</b> :- amanprajapati832@gmail.com</p>
                <p><b>mobile</b> :- 9424580221</p>
                <p><b>Aadhar verification</b> :- <button>Done!</button></p>
                <p><b>Pan verification</b> :- <button style="background-color: rgb(124, 19, 19);">Required!</button></p>
                <p>You Cannot Withdrow Your Money Without Aadhar And Pan Varification</p>
                <b>Edit Your Details</b> <i class="fa-solid fa-pen-to-square"></i><br><br>
                <span style="color:red;"><h4 style="font-size: 20px;">Warning!</h4></span> <p>If You Change Your Details, The Aadhar and Pan Card Verification Is Again Required</p>
            </div>
            <div class="container-profile">
                <div class="container-money">
                    <h5>You Have</h5>
                    <br>
                    <h3>
                        <strong>500.00 Rupees</strong>
                    </h3>
                    <p>Add Money</p>
                    <a href="#">+100</a>
                    <a href="#">+250</a>
                    <a href="#">+500</a>
                    <a href="#">+1000</a><br><br><br>
                    <input type="text" placeholder="Enter Amount">
                    <br>
                    <button>Add Money</button>
                </div>
                <div class="container-payment">
                    <div class="payment-method" id="Payment-Method">
                        <h3>MOST POPULAR PAYMENT METHODS</h3>
                    </div>
                    <div class="payment-method-type">
                        <div class="payment-method-gpay">
                            <img src="/project3/images/photo182.png" alt="Paytm">
                            <p>Paytm is <b> super-secure payment method</b> made in India.</p>
                        </div>
                        <div class="payment-method-gpay" style="border-left: 1px solid black;">
                            <img src="/project3/images/photo183.png" alt="Google Pay">
                            <p>Google Pay <b>is a popular method</b> in our country today.</p>
                        </div>
                    </div>
                    <div class="payment-method-type-1">
                        <div class="payment-method-wallets">
                            <h3>E-WALLETS</h3>
                            <p>This Method are <b>Not Awailable</b> right now</p>
                        </div>
                    </div>
                </div>
            </div>
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