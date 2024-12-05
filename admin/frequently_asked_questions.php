<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admincss/frequently_asked_questions.css">
    <title>Frequently Asked Questions</title>
</head>
<body>   
    <header>
        <div class="container">
            <nav>
                <div class="logoBrand">
                    <a href="/admin/homePage.php"><img src="/imageadmin/logoIcon (1).png" class="logoIcon"></a>
                    <h1 class="brandName">BeautyandtheBest</h1>
                </div>
                <ul class="navList">
                    <li><a href="/admin/homePage.php">Home</a></li>
                    <li><a href="/admin/productList.php">Products</a></li>
                    <li><a href="/admin/brands.php">Brands</a></li>
                </ul>
                <div class="icons">
                    <div class="search-container">
                        <input type="text" placeholder="Search..">
                        <img src="/imageadmin/searchIcon (1).png" class="searchIcon">
                    </div>
                    <a href=""><img src="/imageadmin/userIcon (1).png" class="profileIcon"></a>
                    <a href="/admin/cart.php"><img src="/imageadmin/cartIcon (1).png" class="cartIcon"></a>
                    <a href="/admin/wishlist.php"><img src="/imageadmin/wishlistBanner.png" class="wishlistIcon"></a>
                </div>
            </nav>
        </div>
    </header>

    <div class="menu">
        <div class="con-btn">
            <div class="btn">
                <button type="submit"><a href="/admin/userdashboard.php"><b>Profile<br>Information</b></a></button>
            </div>
            <div class="btn">
                <button type="submit"><a href="/admin/skinprofile.php"><b>Skin Profile</b></a></button>
            </div>
            <div class="btn">
                <button type="submit"><a href="/admin/accountsettings.php"><b>Account<br>Settings</b></a></button>
            </div>
            <div class="btn">
                <button type="submit"><b>Orders</b></button>
            </div>
            <div class="btn">
                <button type="submit"><b>Payments </b></button>
            </div>
            <div class="btn">
                <button type="submit"><b>Customer<br>Support</b></button>
            </div>
            <div class="btn">
                <button id="logout" type="submit"><b>Log out</b></button>
            </div>
        </div>
    </div>

    <div class="user-info">
        <div class="cons">
            <h2>FREQUENTLY ASKED QUESTIONS </h2>
            
            <select id="section" name="section">
                <option class="option" value="none">Select A Question...</option>
                <option class="option" value="What is Beauty and the Best?">What is Beauty and the Best?</option>
                <option class="option" value="How do I create an account?">How do I create an account?</option>
                <option class="option" value="Do I need to create an account to make a purchase?">Do I need to create an account to make a purchase?</option>
                <option class="option" value="How do I find the right skincare products for my skin type?">How do I find the right skincare products for my skin type?</option>
                <option class="option" value="What payment methods do you accept?">What payment methods do you accept?</option>
                <option class="option" value="How can I contact customer support?">How can I contact customer support?</option>
            </select>
        </div>
        
        <div class="cons1">
            <p id="text">
               
            </p>
        </div>
    </div>   

    <script src="/adminjs/frequently_asked_questions.js"></script>

</body>
</html>
