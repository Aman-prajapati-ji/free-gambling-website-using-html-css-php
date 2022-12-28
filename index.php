<?php

session_start();
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awosome link -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    
    <!-- Style sheet-->
    <link rel="stylesheet" href="css/index.css">
    
    <title>Indian Lotory</title>

</head>

<body>

    <!-- Header Part With Manu -->
    <header class="header">
        <div class="shadow">
            <div class="background">

                <!-- navigation manu -->
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
                        <li> <a> Welcome <?php echo $row4['name'] ?></a></li>
                        <?php
                                }
                            }
                        ?>
                        <li><button type="button" onclick="notification('notification')"><i style="color:white; font-size:20px" class="far fa-bell"></i></button></li>
                    </ul>
                </nav>

                <!-- Front Box -->
                <div class="header-body">
                    <div class="header-text">
                        <h1 style="padding: 40px 40px 0 40px;
                        text-align: center;">INDIAN LOTORY - DESI CASINO SITE</h1>
                        <h2 style="padding: 40px 40px 0 40px;
                        text-align: center;">Only 13 State Persons Are Eligible For Online Lotory</h2>
                        <p style="padding: 40px 40px 0 40px;
                        text-align: center;">Are you ready to dive into the wonderful and exciting world of life-changing
                            jackpots? You’re not alone! More Indians than ever are turning to online
                            casinos for entertainment and enjoying the thrilling experience!</p>
                        <div class="header-links">
                            <div class="link">
                                <div class="link-img">
                                    <img src="/project3/images/logo.jpg" alt="Logo">
                                </div>
                                <div class="link-link">
                                    <a href="#Play-indian-lotory"><b>Play Free Indian Lotory</b></a>
                                </div>
                                <div class="link-icon">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="link">
                                <div class="link-img">
                                    <img src="/project3/images/logo.jpg" alt="Logo">
                                </div>
                                <div class="link-link">
                                    <a href="#Real-lotory-container"><b>Real Lotory</b></a>
                                </div>
                                <div class="link-icon">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="link">
                                <div class="link-img">
                                    <img src="/project3/images/logo.jpg" alt="Logo">
                                </div>
                                <div class="link-link">
                                    <a href="#Indian-Lotory-Team"><b>Indian Lotory Team</b></a>
                                </div>
                                <div class="link-icon">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- for notification icon -->
    <div class="popup-container" id="notification">
        <div class="popup">
            <form action="">
                <h2> Latest Notifications
                    <button type="reset" onclick="notification('notification')">X</button>
                </h2>
                <p style="padding: 10px;">Congrets You Win A Jackpot <span style="float:right">Today 11/03/22 &nbsp; 09 : 00 PM</span></p>
                <p style="padding: 10px;">To Close Try Next Week Jackpot <span style="float:right">Friday 04/03/22 &nbsp; 09 : 00 PM</span></p>
                <p style="padding: 10px;">You Are Very Close To A Jackpot <span style="float:right">Friday 25/02/22 &nbsp; 09 : 00 PM</span></p>
                <p style="padding: 10px;">Try Next Week For Jackpot <span style="float:right">Friday 18/02/22 &nbsp; 09 : 00 PM</span></p>
            </form>
        </div>
    </div>

    <!-- Body -->
    <main class="main-body">
        <article>
            <div class="container" id="How-to-play">
                <div class="body1">
                    <h2 style="margin: 50px 0 10px 0;">HOW TO PLAY</h2>
                    <p>We’ve built this site on years of hands-on gambling experience. <a href="#">The team behind the
                            magic</a> are all avid casino players, and we’ve worked at some of the largest online
                        gambling companies in the world, LeoVegas being just one of them.</p>

                    <p>With over<b> 30 years of experience</b>, we have gathered plenty of information that we want to
                        share with you! And believe us when we say that there’s a LOT of collected knowledge to be
                        shared.</p>

                    <p>So far, SevenJackpots has helped <b>over 4000 Indians</b> find their favorite online gambling
                        site, and we are consistently praised on Trustpilot.</p>
                </div>
            </div>

            <div class="body4" id="Play-indian-lotory">
                <h2 style="margin: 50px 0 10px 0;">CHOOSE INDIAN LOTORY WINING NUMBERS</h2>
                <form action="" method="post" class="date-of-lotory">
                    <select name="" id="">
                        <option value="">04/03/2022 - Friday</option>
                        <option value="" disabled>11/03/2022 - Friday</option>
                        <option value="" disabled>18/03/2022 - Friday</option>
                        <option value="" disabled>25/03/2022 - Friday</option>
                        <option value="" disabled>01/04/2022 - Friday</option>
                        <option value="" disabled>08/04/2022 - Friday</option>
                    </select>
                </form>
                <b>
                    <p>
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;">Pick 5 Numbers</font>
                        </font>
                    </p>
                </b>
                <ul class="jackpot-2-main-1">

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>01</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>02</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>03</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>04</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>05</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>06</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>07</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>08</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>09</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>10</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>11</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>12</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>13</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>14</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>15</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>16</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>17</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>18</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>19</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>20</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>21</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>22</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>23</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>24</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>25</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>26</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>27</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>28</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>29</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>30</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>31</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>32</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>33</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>34</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>35</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>36</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>37</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>38</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>39</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>40</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>41</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>42</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>43</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>44</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>45</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>46</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>47</b> </font>
                        </font>
                    </li>


                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>48</b> </font>
                        </font>
                    </li>


                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>49</b> </font>
                        </font>
                    </li>


                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>50</b> </font>
                        </font>
                    </li>
                </ul>
                <p>
                    <font style="vertical-align:inherit;">
                        <font style="vertical-align:inherit;"><b>Pick 2 Indian Lotory Royal Numbers</b></font>
                    </font>
                </p>
                <ul class="jackpot-2-main-1">
                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>01</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>02</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>03</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>04</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>05</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>06</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>07</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>08</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>09</b> </font>
                        </font>
                    </li>

                    <li class="jackpot-numbers">
                        <font style="vertical-align:inherit;">
                            <font style="vertical-align:inherit;"> <b>10</b> </font>
                        </font>
                    </li>
                </ul>
                <form action="" method="POST">
                    <button type="submit" name="check-botton"><b>Check</b></button>
                </form>
                <?php 
                    if(isset($_POST['check-botton'])){
                ?>
                <h5>You Have Select <span style="color:red;"><b>4</b></span> Number(s) And <span style="color:red;"><b>1</b></span>
                    Royal Number(s) is Correct. You've Won 1 Lakh Rupees</h5>
                <div class="lotory-winner-prize">
                    <div class="lotory-winner-prize-text">
                        <h6>When You Play This Lotory On Original Day You Won Real Money</h6>
                        <p><b>All Correct Answer Of Day</b></p>
                        <form action="" method="post" class="date-of-lotory" id="date-of-lotory">
                            <select name="" id="">
                                <option value="">04/03/2022 - Friday</option>
                            </select>
                        </form>
                        <p><b>Is</b></p>

                        <ul class="jackpot-2-main-1">
                            <li class="jackpot-numbers" style="background-color: green;">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> <b>01</b> </font>
                                </font>
                            </li>

                            <li class="jackpot-numbers" style="background-color: green;">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> <b>22</b> </font>
                                </font>
                            </li>

                            <li class="jackpot-numbers" style="background-color: green;">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> <b>24</b> </font>
                                </font>
                            </li>

                            <li class="jackpot-numbers" style="background-color: green;">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> <b>39</b> </font>
                                </font>
                            </li>

                            <li class="jackpot-numbers" style="background-color: green;">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> <b>50</b> </font>
                                </font>
                            </li>
                        </ul>

                        <ul class="jackpot-2-main-1">
                            <li class="jackpot-numbers" style="background-color: red;">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> <b>02</b> </font>
                                </font>
                            </li>

                            <li class="jackpot-numbers" style="background-color: red;">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> <b>05</b> </font>
                                </font>
                            </li>
                        </ul>
                    </div>
                    <div class="lotory-winner-prize-numbers">
                        <h2>Prize Breakdown</h2>
                        <table class="prize-table">
                            <tr rowspan="2">
                                <td>1. (5 Numbers & 2 RoyalNumbers)</td>
                                <td rowspan="2" style=" background-color: #d4720a; border-radius:10px; color:white; margin-left:auto;">Congrets You Won Jackpot Prize</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 90px;">0 Winners</td>
                            </tr>
                            <tr>
                                <td>2. (5 Numbers & 1 RoyalNumbers)</td>
                                <td rowspan="2" style=" background-color: #d4720a; border-radius:8px; color:white; margin-left:auto;">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 15px 90px;">1 Winners</td>
                            </tr>
                            <tr>
                                <td>3. (5 Numbers & 0 RoyalNumbers)</td>
                                <td rowspan="2" style=" background-color: #d4720a; border-radius:6px; color:white; margin-left:auto;">50 Lakh Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 15px 90px;">10 Winners</td>
                            </tr>
                            <tr>
                                <td>4. (4 Numbers & 2 RoyalNumbers)</td>
                                <td rowspan="2" style=" background-color: #d4720a; border-radius:4px; color:white; margin-left:auto;">10 Lakh Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 15px 90px;">55 Winners</td>
                            </tr>
                            <tr>
                                <td>5. (4 Numbers & 1 RoyalNumbers)</td>
                                <td rowspan="2" style=" background-color: #d4720a; border-radius:2px; color:white; margin-left:auto;">1 Lakh Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 15px 90px;">990 Winners</td>
                            </tr>
                            <tr>
                                <td>6. (4 Numbers & 0 RoyalNumbers)</td>
                                <td rowspan="2" style=" background-color: #d4720a; border-radius:0px; color:white; margin-left:auto;">50 Hjar Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 15px 90px;">1671 Winners</td>
                            </tr>
                            <!-- <tr>
                                <td>7. (3 Numbers & 2 RoyalNumbers)</td>
                                <td rowspan="2">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">2729 Winners</td>
                            </tr>
                            <tr>
                                <td>8. (3 Numbers & 1 RoyalNumbers)</td>
                                <td rowspan="2">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">38942 Winners</td>
                            </tr>
                            <tr>
                                <td>9. (3 Numbers & 0 RoyalNumbers)</td>
                                <td rowspan="2">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">42276 Winners</td>
                            </tr>
                            <tr>
                                <td>10. (2 Numbers & 2 RoyalNumbers)</td>
                                <td rowspan="2">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">75582 Winners</td>
                            </tr>
                            <tr>
                                <td>11. (2 Numbers & 1 RoyalNumbers)</td>
                                <td rowspan="2">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">208922 Winners</td>
                            </tr>
                            <tr>
                                <td>12. (2 Numbers & 0 RoyalNumbers)</td>
                                <td rowspan="2">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">626807 Winners</td>
                            </tr>
                            <tr>
                                <td>13. (1 Numbers & 2 RoyalNumbers)</td>
                                <td rowspan="2">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">1026607 Winners</td>
                            </tr>
                            <tr>
                                <td>14. (1 Numbers & 1 RoyalNumbers)</td>
                                <td rowspan="2">1 Crore Rupees</td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">1523807 Winners</td>
                            </tr> -->
                        </table>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>

            <!-- Real Lotory container -->
            <div class="container-lotory" id="Real-lotory-container">
                
                <div class="container-background-lotory">

                    <div class="ticket-1">

                    <table>
                        <tr>
                        <td><span><b>Ticket - 1</b></span></td>
                        <td><button>Tip For 1</button></td>
                        </tr>
                        <tr>
                        <td style="text-align: left;"><span>5 out of 50</span></td>
                        <td style="text-align: right;"><span>2 / 10</span></td>
                        </tr>
                    </table>

                        <div class="total-number">

                        <div class="main-numbers">
                            <ul class="jackpot-real-numbers">

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 01 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 02 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 03 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 04 </font>                     </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 05 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 06 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 07 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 08 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 09 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 10 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 11 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 12 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 13 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 14 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 15 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 16 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 17 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 18 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 19 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 20 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 21 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 22 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 23 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 24 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 25 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 26 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 27 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 28 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 29 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 30 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 31 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 32 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 33 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 34 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 35 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 36 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 37 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 38 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 39 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 40 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 41 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 42 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 43 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 44 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 45 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 46 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 47 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 48 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 49 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 50 </font>
                                </font>
                            </li>
                            </ul>
                        </div>

                        <div class="royal-numbers">
                            <ul class="jackpot-real-numbers">
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 01 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 02 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 03 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 04 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 05 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 06 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 07 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 08 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 09 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 10 </font>
                                </font>
                            </li>
                        </ul>
                        </div>

                        </div>
                        <table>
                            <tr>
                            <td><span><i style="font-size:24px" class="fas fa-trash"></i></span></td>
                            <td><button>Pick 5 + 2 Numbers</button></td>
                            </tr>
                        </table>
                    </div>

                    <div class="ticket-2">

                    <table>
                        <tr>
                        <td><span><b>Ticket - 2</b></span></td>
                        <td><button>Tip For 2</button></td>
                        </tr>
                        <tr>
                        <td style="text-align: left;"><span>5 out of 50</span></td>
                        <td style="text-align: right;"><span>2 out of 10</span></td>
                        </tr>
                    </table>

                        <div class="total-number">

                        <div class="main-numbers">
                            <ul class="jackpot-real-numbers">

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 01 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 02 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 03 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 04 </font>                     </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 05 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 06 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 07 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 08 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 09 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 10 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 11 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 12 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 13 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 14 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 15 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 16 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 17 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 18 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 19 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 20 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 21 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 22 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 23 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 24 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 25 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 26 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 27 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 28 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 29 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 30 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 31 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 32 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 33 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 34 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 35 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 36 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 37 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 38 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 39 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 40 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 41 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 42 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 43 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 44 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 45 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 46 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 47 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 48 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 49 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 50 </font>
                                </font>
                            </li>
                            </ul>
                        </div>

                        <div class="royal-numbers">
                            <ul class="jackpot-real-numbers">
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 01 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 02 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 03 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 04 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 05 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 06 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 07 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 08 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 09 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 10 </font>
                                </font>
                            </li>
                        </ul>
                        </div>

                        </div>
                        <table>
                            <tr>
                            <td><span><i style="font-size:24px" class="fas fa-trash"></i></span></td>
                            <td><button>Pick 5 + 2 Numbers</button></td>
                            </tr>
                        </table>
                    </div>

                    <div class="ticket-3">

                    <table>
                        <tr>
                        <td><span><b>Ticket - 3</b></span></td>
                        <td><button>Tip For 3</button></td>
                        </tr>
                        <tr>
                        <td style="text-align: left;"><span>5 out of 50</span></td>
                        <td style="text-align: right;"><span>2 out of 10</span></td>
                        </tr>
                    </table>

                        <div class="total-number">

                        <div class="main-numbers">
                            <ul class="jackpot-real-numbers">

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 01 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 02 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 03 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 04 </font>                     </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 05 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 06 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 07 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 08 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 09 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 10 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 11 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 12 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 13 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 14 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 15 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 16 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 17 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 18 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 19 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 20 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 21 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 22 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 23 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 24 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 25 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 26 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 27 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 28 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 29 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 30 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 31 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 32 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 33 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 34 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 35 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 36 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 37 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 38 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 39 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 40 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 41 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 42 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 43 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 44 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 45 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 46 </font>
                                </font>
                            </li>
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 47 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 48 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 49 </font>
                                </font>
                            </li>
            
            
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 50 </font>
                                </font>
                            </li>
                            </ul>
                        </div>

                        <div class="royal-numbers">
                            <ul class="jackpot-real-numbers">
                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 01 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 02 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 03 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 04 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 05 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 06 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 07 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 08 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 09 </font>
                                </font>
                            </li>

                            <li class="jackpot-real-ticket-numbers">
                                <font style="vertical-align:inherit;">
                                    <font style="vertical-align:inherit;"> 10 </font>
                                </font>
                            </li>
                        </ul>
                        </div>

                        </div>
                        <table>
                            <tr>
                            <td><span><i style="font-size:24px" class="fas fa-trash"></i></span></td>
                            <td><button>Pick 5 + 2 Numbers</button></td>
                            </tr>
                        </table>
                    </div>

                </div>

                <div class="container-information">
                    <div class="container-information-drow-date">
                        <p style="padding-top: 10px; text-align:center;">Lotory Date:<b> Fri, 11/03/2022</b></p>
                    </div>
                    <div class="container-information-lines">
                        <p><b>Total Tickets:</b></p>&nbsp;
                        <p><span style="background-color:green; color:white; border-radius: 30px 0 0 30px;">1</span>
                        <span>2</span>
                        <span style="border-radius: 0 30px 30px 0;">3</span></p>
                    </div>
                </div>
                <div class="container-buy-ticket">
                    <div class="container-information-drow-date">
                        <!-- empty div for space -->
                    </div>
                    <div class="container-information-lines">
                        Ticket Prize: <b>50 INR</b> &nbsp;
                        <a href="shopping-cart.php"><button><i class="fas fa-shopping-cart"></i>Perchase Lotory</button></a>
                    </div>
                </div>
            </div>

            <!-- Indian Lotory Ticket -->
            <div class="container" id="Indian-Lotory-Team">
                <div class="body2">
                    <h2>
                        <img src="/project3/images/logo.jpg" width="30px" height="30px">
                        THE INDIAN LOTORY TEAM
                    </h2>
                    <div class="profile-image">
                        <div class="profile-image1">
                            <!-- <p>
                            <div class="profile-img-with-name">
                                <img src="/project3/images/aman1.jpg" alt="Profile">
                            </div>
                            </p> -->
                            <!-- <p>
                            <div class="profile-img-with-name">
                                <img src="/project3/images/aman5.jpeg" alt="Profile">
                            </div>
                            </p> -->
                            <!-- <p>
                            <div class="profile-img-with-name">
                                <img src="/project3/images/aman4.jpeg" alt="Profile">
                            </div>
                            </p> -->
                            <p>
                            <div class="profile-img-with-name">
                                <img src="/project3/images/aman2.jpg" alt="Profile">
                            </div>
                            </p>
                        </div>
                        <div class="profile-image1">
                            <p>
                            <h3>AMAN PRAJAPATI</h3>
                            </p>
                            <!-- <p>
                            <h3>AMIT PRAJAPATI</h3>
                            </p>
                            <p>
                            <h3>AJAY PRAJAPATI</h3>
                            </p>
                            <p>
                            <h3>VED PRAJAPATI</h3>
                            </p> -->
                        </div>
                    </div>
                    <h2>
                        AS SEEN ON
                    </h2>
                    <div class="profile-image">
                        <div class="profile-image1">
                            <!-- <p>
                            <div class="company-img-with-name">
                                <img src="/project3/images/photo176.png" alt="Profile">
                            </div>
                            </p>
                            <p>
                            <div class="company-img-with-name">
                                <img src="/project3/images/photo180.png" alt="Profile">
                            </div>
                            </p>
                            <p>
                            <div class="company-img-with-name">
                                <img src="/project3/images/photo179.svg" alt="Profile">
                            </div>
                            </p> -->
                            <p>
                            <div class="company-img-with-name">
                                <img src="/project3/images/photo181.png" alt="Profile">
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="body3">
                    <h2 style="margin: 50px 0 10px 0;">WHAT OUR VISITOR SAY</h2>
                </div>
                <div class="visitor">
                    <h2>
                        <img src="/project3/images/logo.jpg" width="30px" height="30px">
                        Trustpilot
                    </h2>
                </div>
            </div>

            <div class="background-why-indian-lotory" id="Why-Indian-Lotory">
                <div class="container">
                    <div class="body2">
                        <h2 style="margin: 50px 0 10px 0;">
                            <img src="/project3/images/logo.jpg" width="30px" height="30px">
                            WHY INDIAN LOTORY
                        </h2>
                    </div>
                    <div class="body1">
                        <p style="padding: 15px 10px 0px 10px;">We take great pride in what we do, as we know that we
                            have the passion and experience to provide you with <b>only the very best</b> the industry
                            has to offer.</p>
                        <p style="padding: 15px 10px 0px 10px;">No matter if you are looking for the best Indian online
                            casino, want to learn <b>how to play</b>, or how to <b>make fast deposits and
                                withdrawals</b>, we’ve got you covered.</p>
                        <p style="padding: 15px 10px 0px 10px;">Here’s the truth;</p>
                        <p style="padding: 15px 10px 0px 10px;">Winning is fun. Playing is also fun. Our goal is to make
                            sure you are doing exactly that, instead of spending time researching.</p>
                        <p style="padding: 15px 10px 0px 10px;"><b>In short, less reading equals more fun!</b></p>
                        <p style="padding: 15px 10px 0px 10px;">That’s why we’ve conducted our research to create
                            in-depth reviews of casinos, slots, payment methods, game providers, and more.</p>
                        <p style="padding: 15px 10px 0px 10px;">The result?</p>
                        <p style="padding: 15px 10px 0px 10px;">A trustworthy independent gambling website!</p>
                        <p style="padding: 15px 10px 0px 10px;">All that’s left for you to do is sit back, relax, and
                            enjoy the ride.</p>
                        <p style="padding: 15px 10px 0px 10px;">Wondering how we’re able to do all this? Join us as we
                            tell you <a href=""> how it works.</a></p>
                    </div>
                </div>
            </div>

            <div class="container-guides">
                <h2 style="text-align:center;">CASINO GUIDES</h2>
                <p>Our casino guides give you everything you need to know to be a self-confident online gambler.</p>
                <p>Learn the essentials, from making withdrawals and verifying your account to spotting dodgy online
                    gambling sites and more!</p>
                <p>Don’t waste time on figuring out how casino processes work; <b>read our guides</b> instead!</p>
            </div>

            <div class="background-guides-modern-entertainment">
                <div class="container-guides-modern-entertainment">
                    <h2 style="text-align:center;">GUIDES TO MODERN ENTERTAINMENT</h2>
                    <p>In case you didn’t know, there are hundreds, if not thousands of casinos on the internet today.
                        How on earth are we able to find the ones<b> perfect for Indian players</b>?</p>
                    <p>It’s quite simple really: We test them. All of them.</p>
                    <p>The ones that don’t reach our high standards, won’t appear here at SevenJackpots!</p>
                    <p>Our review process is <b>complex</b>, <b>honest</b>, and <b>thorough</b>.</p>
                    <p>Some of the things we look at are:</p>
                    <div class="container-modern-entertainment">
                        <div class="container-modern-entertainment-1">
                            <h3>PAYMENT METHODS</h3>
                            <img src="/project3/images/payment-method-1.jpg" width="200px" height="150px">
                            <p>Without easy-to-use payment options, we won’t deposit, full stop.</p>
                            <p>Deposits should preferably be <b>free from fees,</b> and <b>instant.</b></p>
                            <p>There should also be a good selection of <b>secure payment methods.</b></p>
                        </div>
                        <div class="container-modern-entertainment-1">
                            <h3>EASY WITHDRAWALS</h3>
                            <img src="/project3/images/withdrow.jpg" width="200px" height="150px">
                            <p>Making withdrawals should be a celebratory action, hopefully <b>cashing out some sweet
                                    winnings.</b></p>
                            <p>Instructions that are easy to follow, no hidden withdrawal fees or delayed processing
                                times.</p>
                            <p>Letting players <b>cash out quickly</b> is a win-win situation for players and casinos!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-method" id="Payment-Method">
                <h2>MOST POPULAR PAYMENT METHODS</h2>
                <p>Although it is possible to play casino games for free, playing for real money makes it even more
                    entertaining!</p>
                <p>It’s also where Indians, sometimes, hesitate. How do I know it’s safe? How do I make a deposit? What
                    methods are available?</p>
                <p>We have created user-friendly guides to the most popular payment methods.</p>
                <p>We’re talking pictures, step-by-step lists, and answers to frequently asked questions, kind of
                    guides.</p>
                <p>When we test casinos, we also try out their payment options. We make deposits and withdrawals to make
                    sure it’s as easy for you as it is for us.</p>
            </div>
            <div class="payment-method-type">
                <div class="payment-method-gpay">
                    <img src="/project3/images/photo182.png" alt="Paytm">
                    <p>Paytm is something as <b>awesome as a super-secure payment method made in India.</b> The method
                        is usable at several casino sites, just like GPay, and works more or less in the same way. Our
                        Paytm guide takes you through every step from start to finish.</p>
                </div>
                <div class="payment-method-gpay">
                    <img src="/project3/images/photo183.png" alt="Google Pay">
                    <p><b>Google Pay, GPay for short, is a popular method</b> in our country today. That said, finding
                        casinos that accept it is not always easy. We’ve tracked them down, and also made a guide on how
                        to use GPay to gamble!</p>
                </div>
            </div>
            <div class="payment-method-type-1">
                <div class="payment-method-wallets">
                    <h2>E-WALLETS</h2>
                    <p>The type of payment method where you <b>store money in an electronic wallet</b> goes under the
                        name e-wallets. Skrill, Neteller, MuchBetter, and PayPal are all e-wallets, and they are all
                        easy and safe methods to use when gambling online.</p>
                </div>
            </div>
        </article>
    </main>

    <!-- Footer 1-->
    <footer class="footer">
        <div class="footer-shadow">
            <div class="footer-background">
                <div class="footer-body">
                    <div class="footer-logo">
                        <h2>INDIAN LOTORY QUALITY STUMP</h2>
                        <div class="footer-company-stump">
                            <img src="/project3/images/logo.jpg" alt="stump">
                        </div>
                        <div class="footer-company-stump-line">
                            <p>RoomsDekho.in</p>
                        </div>

                    </div>
                    <div class="footer-logo">
                        <h2>WHY INDIAN LOTORY?</h2>
                        <p>Are you looking for transparent, unbiased Indian casino and game reviews, then
                            IndianLotory.com is the place to be! We provide you with fresh and accurate
                            information about online casinos with a focus on the Indian market, as well as
                            offer players the best within online casino bonuses.</p>
                        <h2>FOLLOW US</h2>
                        <div class="footer-social-icon">
                            <div class="footer-social-icon-fb">
                                <!-- <i class="fab fa-facebook"></i> -->
                                <img src="/project3/images/photo184.jpg" alt="Profile" class="fab">
                            </div>
                            <div class="footer-social-icon-ig">
                                <!-- <i class="fab fa-instagram"></i> -->
                                <img src="/project3/images/photo186.png" alt="Profile" class="fab">
                            </div>
                            <div class="footer-social-icon-yt">
                                <!-- <i class="fab fa-youtube"></i> -->
                                <img src="/project3/images/photo185.jpg" alt="Profile" class="fab">
                            </div>
                            <!-- <div class="footer-social-icon-twi">
                                <i class="fab fa-snapchat"></i> 
                                <img src="/images/photo185.jpg" alt="Profile" class="fab">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer 2-->
    <div class="footer-manu">
        <div class="footer-navbar">
            <div class="footer-navlinks">
                <div class="footer-links">
                    <!-- <ul style="justify-content:center;">
                        <li> <a href="index.php">Home</a></li>
                        <li> <a href="#How-to-play">How To Play</a></li>
                        <li> <a href="#Play-indian-lotory">Play Free Indian Lotory</a></li>
                        <li> <a href="#Real-lotory-container">Real Lotory</a></li>
                        <li> <a href="aboutus.php">About Us</a></li>
                        <li> <a href="contactus.php">Contact Us</a></li>
                        <li> <a href="#">Government Ruls</a></li>
                        <li> <a href="#">Gambleing Lows</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="copyright">
            <h3><a href="#">Copyright ©</a>2022 - <a href="#">IndianLotory.com</a></h3>
            <h4>Disclaimer - Only <a href="#">13 State</a> Persons Are Eligible For Online Lotory</h4>
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
