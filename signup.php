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
  <link rel="stylesheet" href="css/signup.css">

  <title>Sign Up Form</title>
</head>

<body>

  <!-- background video -->
  <!-- <video autoplay loop muted class="video-selector">
    <source src="/videos/video2.mp4" type="video/mp4">
  </video> -->


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
            <li> <a href="login.php"  class="active">Log-in<i class="fas fa-angle-down"></i></a></li>
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
        <h3>Signup to <strong>Indian</strong></h3>
        <p class="mb-4">Sign-up For Wonderful Journey.</p>

        <form action="#" method="post">

        <div class="username-box">
            <label for="username">Your Name</label>
            <input type="text" placeholder="Enter Your Name" id="username" name="name">
          </div>
          <div class="username-box">
            <label for="username">Email</label>
            <input type="email" placeholder="Enter Your Email" id="username" name="email">
          </div>
          <div class="password-box">
            <label for="password">Password</label>
            <input type="password" placeholder="Create Password" id="password" name="password">
          </div>
          <div class="password-box">
            <label for="password">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" id="password" name="cpassword">
          </div>

          <button type="submit" class="submit-button" name="signup"><b>Sign-up</b></button>
          <br>
          <br>
          <br>
          <span class="signup-link">
            <a href="login.php" class="forgot-pass"> Already User? Log-in</a>
          </span>
        </form>

      </div>
    </div>
  </div>

<?php
 
    if(isset($_POST['signup'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $password = $_POST['password'];
        $_SESSION['password1'] = password_hash($password,PASSWORD_BCRYPT);
        $cpassword = $_POST['cpassword'];

        $sql = "SELECT * FROM lotory_login WHERE email='$_SESSION[email]'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if( $row > 0){
            ?>
            <script>
                alert("Already user plz log-in");
            </script>
            <?php
        }else{
            if($password === $cpassword){
                $sql1 = "INSERT INTO lotory_login(name, email, password) VALUES('$_SESSION[name]','$_SESSION[email]','$_SESSION[password1]')";
                $result1 = mysqli_query($conn, $sql1);
                if($result1){
                    ?>
                    <script>
                        alert("Seccessfully Sighup");
                        location.replace("index.php");
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert("Something went Wrong...Sorry plz try Again");
                    </script>
                    <?php
                }
            }
            else{
                ?>
                <script>
                    alert("Your Password and Conform Password is Deffrent");
                </script>
            <?php
            }
           
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