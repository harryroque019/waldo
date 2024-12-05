<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admincss/order-history.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Italiana&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>userDashboard</title>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="logoBrand">
                    <a href="homePage.php"><img src="/imageadmin/logoIcon (1).png" class="logoIcon"></a>
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
                    <a href="/admin/"><img src="/imageadmin/userIcon (1).png" class="profileIcon"></a>
                    <a href="/admin/cart.php"><img src="/imageadmin/cartIcon (1).png" class="cartIcon"></a>
                    <a href="/admin/wishlist.php"><img src="/imageadmin/wishlistBanner.png" class="wishlistIcon"></a>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">

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
    
         <!-- input info -->
        <div class="user-container">
            <div class="user-info">
              <h2 id="order">Order History</h2>

              <!-- cons -->
              <div class="cons">
                    <div class="info">
                        <p>Order ID </p>
                        <p>Product</p>
                        <p>Quantity</p>
                        <p>Total Amount </p>
                        <p>Payment </p>
                        <p>Order Status</p>
                    </div>
              </div>

              <!-- cons1 -->
              <div class="cons1">
                <div class="info">
                    <p>Order ID </p>
                    <p>Product</p>
                    <p>Quantity</p>
                    <p>Total Amount </p>
                    <p>Payment </p>
                    <p>Order Status</p>
                </div>
             </div>
             <div class="cons1">
                <div class="info">
                    <p>Order ID </p>
                    <p>Product</p>
                    <p>Quantity</p>
                    <p>Total Amount </p>
                    <p>Payment </p>
                    <p>Order Status</p>
                </div>
             </div>
             <div class="cons1">
                <div class="info">
                    <p>Order ID </p>
                    <p>Product</p>
                    <p>Quantity</p>
                    <p>Total Amount </p>
                    <p>Payment </p>
                    <p>Order Status</p>
                </div>
             </div>
             <div class="cons1">
                <div class="info">
                    <p>Order ID </p>
                    <p>Product</p>
                    <p>Quantity</p>
                    <p>Total Amount </p>
                    <p>Payment </p>
                    <p>Order Status</p>
                </div>
             </div>
             <div class="cons1">
                <div class="info">
                    <p>Order ID </p>
                    <p>Product</p>
                    <p>Quantity</p>
                    <p>Total Amount </p>
                    <p>Payment </p>
                    <p>Order Status</p>
                </div>
             </div>

             <!-- Write a review -->
             <h3 id="write">Write a review</h3>
             <div class="review-details">
                <h2 id="radiance">Radiance Boost Serum <br><br> Review Details </h2>
                <div class="message">
                    <textarea id="productInput" maxlength="1000" onfocus="clearDefaultValue()" onblur="restoreDefaultValue()">Product Name:</textarea>
                </div>
                <div class="product">
                    <img src="/imageadmin/productbl.png" alt="">
                </div>
             </div>


            </div>
        </div> 
    </div>
    

  <script src="/adminjs/order-history.js"></script>

</body>
</html>