<?php
session_start();
require __DIR__ . '../../vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->BTBA->user;

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uid = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pnum = $_POST['pnum'];

  
    $existuser = $collection->findOne(['email' => $email]);
    if($existuser) {
     echo "<script>alert('Email already exist');</script>";
    } else {
  
      $hashedpass = password_hash($password, PASSWORD_DEFAULT);
  
      $collection->insertOne([
  
        'firstname' => $fname,
        'lastname' => $lname,
        'username' => $uid,
        'email' => $email,
        'phonenumber'=> $pnum,
        'password' => $hashedpass
  
      ]);
      echo "<script>alert('Registered successfully'); window.location.href = '../user/login.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../usercss/gentleBrighteningCleanser.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../usercss/register.css">
    <title>Sign-up</title>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="logoBrand">
                    <a href="../user/homePage.php"><img src="../imagesuser/svg/logoIcon.png" class="logoIcon"></a>
                    <h1 class="brandName">BeautyandtheBest</h1>
                </div>
                <ul class="navList">
                    <li><a href="../user/homePage.php">Home</a></li>
                    <li><a href="../user/productList.php">Products</a></li>
                    <li><a href="../user/brands.php">Brands</a></li>
                </ul>
                <div class="icons">
                    <div class="search-container">
                        <input type="text" placeholder="Search..">
                        <img src="../imagesuser/svg/searchIcon.png" class="searchIcon">
                    </div>
                    <a href="../user/login.php"><img src="../imagesuser/svg/userIcon.png" class="profileIcon"></a>
                    <a href="../user/cart.php"><img src="../imagesuser/svg/cartIcon.png" class="cartIcon"></a>
                    <a href="../user/wishlist.php"><img src="../imagesuser/svg/wishlistBanner.png" class="wishlistIcon"></a>
                </div>
            </nav>
        </div>
    </header>

    
    <div class="register-container">
        <div class="cons">
            <!--============for image slidess============= -->
            <div class="images">
                <section id="image1">
                    <img src="../imagesuser/banner/registerBanner1.jpg" alt="Image 1" style="width: 420px; height: 470px;">
                </section>
                <section id="image2">
                    <img src="../imagesuser/banner/registerBanner2.jpg" alt="Image 2" style="width: 420px; height: 470px;">
                </section>
        
                <!-- Buttons at the bottom of the images -->
                <div class="buttons-container">
                    <button id="showFirstImageButton" class="dot-button"></button>
                    <button id="showSecondImageButton" class="dot-button"></button>
                </div>
            </div>
        

            <!-- =================end================= -->
                <div class="register">
                    <form action="" method="post">
                        <div class="text">
                            <h1>Create an account</h1>
                            <p>Already have an account?<a href="../user/login.php">Sign in</a></p>
                        </div>
                        <div class="inputs">
                            <input id="fname" name="fname" type="text" placeholder="First Name" required> 
                            <input id="lname" name="lname" type="input-b" placeholder="Last Name"required>
                        </div>
                        <div class="inputs">
                            <input id="username" name="username" type="text" placeholder="Username" required>
                        </div>
                        <div class="inputs">
                            <input id="email" name="email" type="text" placeholder="Email" required>
                        </div>
                        <div class="inputs">
                            <input id="pnum" name="pnum" type="tel" pattern="\d{11}" placeholder="Phone Number" required>
                        </div>
                        <div class="inputs">
                            <input id="pass"name="pass" type="password" placeholder="Password" required>
                        </div>
                        <div class="check">
                           <label id="lebel" for="check"><input id="check" 
                           type="checkbox" required>I agree to the Terms & Conditions</label >
                        </div>

                        <div class="input-b">
                            <a><button type="submit" >Sign in</button></a>
                        </div>
                        <div class="text-with-lines">Or register with</div>
                        <div><a href="../user/productList.php">
                            <button type="submit" class="google-btn">
                                <img src="../imagesuser/svg/googleIcon.png" alt="" class="google-icon">
                                Continue With Google
                            </button></a>
                        </div>
                                 
                    </div>
                 </form>
        </div> 
    </div>
<script src="../userjs/register.js"></script>
    
   
</body>
</html>
