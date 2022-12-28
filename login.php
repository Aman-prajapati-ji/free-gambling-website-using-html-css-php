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
  <link rel="stylesheet" href="css/login.css">

  <title>Log in Form</title>
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
        <li> <a href="portfolio.php">Portfolio<i class="fas fa-angle-down"></i></a></li>
        <li> <a href="contactus.php">Contact Us<i class="fas fa-angle-down"></i></a></li>
        <?php 
            if(!isset($_SESSION['email'])){
        ?>
            <li> <a href="login.php" class="active">Log-in<i class="fas fa-angle-down"></i></a></li>
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
      <div class="container-background">
        <h3>Login to <strong>Indian</strong></h3>
        <p class="mb-4">Log-in For Seeing Your Details.</p>

        <form action="#" method="post">

          <div class="username-box">
            <label for="username">Your Email</label>
            <input type="email" placeholder="Your_email@gmail.com" id="username" name="email">
          </div>

          <div class="password-box">
            <label for="password">Password</label>
            <input type="password" placeholder="Your_Password" id="password" name="password">
          </div>

          <div class="submit-box">
            <label class="remember-text">
              <span class="caption">Remember me</span>
              <input type="checkbox" checked="checked" />
            </label>
            <span class="forgot-text">
              <a href="#" class="forgot-pass"> Forgot_Password</a>
            </span>
          </div>

          <button type="submit" class="submit-button" name="login"><b>Log-in</b></button>
          <br>
          <br>
          <br>
          <span class="signup-link">
            <a href="signup.php" class="forgot-pass"> New User? Sign-up</a>
          </span>
        </form>

      </div>
    </div>
  </div>

<?php

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $_SESSION['name'] = $_SESSION['name'];

        $sql3 = "SELECT * FROM lotory_login WHERE email='$email'";

        $result2 = mysqli_query($conn,$sql3);

        $row3 = mysqli_num_rows($result2);

        if( $row3 > 0){
            while($password3=mysqli_fetch_assoc($result2)){
        
        if(password_verify($password,$password3['password'])){
            $_SESSION['email'] = $email;
        ?>
            <script>
                location.replace("index.php");
                alert("Seccessfully Log-in");
            </script>
        <?php
        }else{
            ?>
                <script>
                    alert("Password is Wrong.... Dont't Worry Just Forgot Password");
                </script>
            <?php
        }

        }
        }else{
            ?>
                <script>
                    alert("SORRY....EMAIL NOT FOUND");
                    alert("IF DON'T HAVE ACCOUNT....PLEASE SIGN UP");
                </script>
            <?php
        }
    }
?>

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