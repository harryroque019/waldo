<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/usercss/accountSettings.css">
    <title>accountSettings</title>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="logoBrand">
                    <a href="homePage.html"><img src="images/svg/logoIcon.png" class="logoIcon"></a>
                    <h1 class="brandName">BeautyandtheBest</h1>
                </div>
                <ul class="navList">
                    <li><a href="homePage.html">Home</a></li>
                    <li><a href="productList.html">Products</a></li>
                    <li><a href="brands.html">Brands</a></li>
                </ul>
                <div class="icons">
                    <div class="search-container">
                        <input type="text" placeholder="Search..">
                        <img src="images/svg/searchIcon.png" class="searchIcon">
                    </div>
                    <a href=""><img src="images/svg/userIcon.png" class="profileIcon"></a>
                    <a href="cart.html"><img src="images/svg/cartIcon.png" class="cartIcon"></a>
                    <a href="wishlist.html"><img src="images/svg/wishlistBanner.png" class="wishlistIcon"></a>
                </div>
            </nav>
        </div>
    </header>

    <section id="account-setting">
        <div class="container">
            <div class="menu">
                <div class="con-btn">
                    <div class="btn">
                        <button type="submit"><a href="userdashboard.html"><b>Profile<br>Information</b></a></button>
                    </div>
                    <div class="btn">
                        <button type="submit"><a href="skinprofile.html"><b>Skin Profile</b></a></button>
                    </div>
                    <div class="btn">
                        <button type="submit"><a href="accountsettings.html"><b>Account<br>Settings</b></a></button>
                    </div>
                    <div class="btn">
                        <button type="submit"><a href="orders.html"><b>Orders</b></button></a>
                    </div>
                    <div class="btn">
                        <button type="submit"><b>Payments </b></button>
                    </div>
                    <div class="btn">
                        <button type="submit"><a href="customerSupport.html"><b>Customer<br>Support</b></button></a>
                    </div>
                    <div class="btn">
                        <button id="logout" type="submit"><a href="homePage.html"><b>Log out</b></button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="user-container">
                <div class="user-info">  
                   <button class="changes" type="submit">Save Changes</button>
                   <div class="account-header">
                        <h1>Account Settings</h1> 
                   </div>
                    <div class="inputs">
                        <div class="input">
                            <div class="inp">
                                <p for="">Change Email</p>
                                <input type="text">   
                            </div>
                            <div class="inp">
                                <p for="">Add Your Birthday</p>
                                <input type="email">
                            </div>
                            <div class="inp">
                                <p for="">Change Password</p>
                                <input type="text">
                            </div>
                        </div>  
                        <div class="input">
                            <div class="inp1">
                                <p for="">Change Phone Number</p>
                                <input type="text">
                            </div>
                            <div class="inp1">
                                <p for="">Change Address</ADDress></p>
                                <input type="text">
                            </div>
                            <div class="inp1">
                                <p for="">Confirm New Password</p>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section>
</body>
</html>