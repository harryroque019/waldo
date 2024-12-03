<?php
session_start();
require __DIR__ . '../../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->BTBA->user;

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if(filter_var($username, FILTER_VALIDATE_EMAIL)){
        $user = $collection->findOne(['email' => $username]);
    } else {
        $user = $collection->findOne(['$or' => [['username' => $username], ['firstname' => $username], ['lastname' => $username]]]);
    }
    
    if($user && password_verify($password, $user['password'])){
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['email'] = $user['email'];
        
        echo "<script>alert('Log in successfully'); window.location.href = '../user/homePage.php';</script>";
        exit();
    } else {
       echo "<script>alert('Invalid username and password'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="stylesheet" href="../usercss/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
    <header>
        <div class="header-container">
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
                <div class="header-icons">
                    <div class="search-container">
                        <input type="text" placeholder="Search..">
                        <img src="../imagesuser/svg/searchIcon.png" class="searchIcon">
                    </div>
                    <a href=""><img src="../imagesuser/svg/userIcon.png" class="profileIcon"></a>
                    <a href="../user/cart.php"><img src="../imagesuser/svg/cartIcon.png" class="cartIcon"></a>
                    <a href="../user/wishlist.php"><img src="../imagesuser/svg/wishlistBanner.png" class="wishlistIcon"></a>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="log-in">
            <form action="" method="post" class="login">
                <div class="welcome">
                    <button onclick="window.history.back()"><img src="../imagesuser/svg/backIcon.png" class="backIcon" alt=""></button>
                    <h1>Hi, Welcome back! </h1> 
                </div>

                <div class="input-b">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class="bx bx-user"></i> 
                </div>
                <div class="input-b">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bx-lock'></i>
                </div>

                <div class="input-b">
                    <button type="submit">Sign-in</button>
                </div>

                <div class="forget">
                    <a href="">Forgot your password?</a>
                </div>

                <div class="sign-in-container">
                    <div class="line"></div>
                    <span class="or-text">Or sign in with</span>
                    <div class="line"></div>
                  </div>
                
                  <div class="continue-with-google"> 
                    <button type="submit" class="google-btn">
                        <img src="../imagesuser/svg/googleIcon.png" alt="" class="google-icon">
                        Continue with Google
                    </button>
                </div>
                <p class="need">Need an account?<a href="../user/register.php"> Sign up here.</a></p>
            </form>
        </div>  
    </div>


</body>
</html>

