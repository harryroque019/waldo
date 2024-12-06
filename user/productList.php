<?php
require __DIR__ . '/../connection/connection.php';

$client = new MongoDB\Client;
$collectionproducts = $client->BTBA->products;

$categories = $collectionproducts->distinct('productCategory');
// Retrieve all products from the database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/usercss/productList.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Italiana&display=swap" rel="stylesheet">
    <title>productList</title>
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
                    <a href=""><img src="../imagesuser/svg/userIcon.png" class="profileIcon"></a>
                    <a href="../user/cart.php"><img src="../imagesuser/svg/cartIcon.png" class="cartIcon"></a>
                    <a href="../user/wishlist.php"><img src="../imagesuser/svg/wishlistBanner.png" class="wishlistIcon"></a>
                </div>
            </nav>
        </div>
    </header>

    <section id="category-product-section">
        <div class="container">
            <div class="welcome-content">
                <h1 class="title">Hello, Welcome to Beauty and the Best Shop! Enjoy Shopping!</h1>
            </div>
            <section id="category-container-section">
                <div class="category-left-panel">
                    <div class="checkbox-content">
                        <div class="title-cetegories">
                            <span class="categories">Categories</span>
                            <div class="line"></div>
                        </div>
                        <div class="checkbox-list">
                        <?php foreach ($categories as $category): ?>
                            <label class="category-checkbox">
                                <input type="checkbox" value="<?= strtolower(str_replace(' ', '-', $category)) ?>" class="category">
                                <span class="checkbox-title"><?= htmlspecialchars($category) ?></span>
                            </label>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
             
                <div class="category-right-panel">
                    <div class="product-content">
                        <div class="brand-1">
                            <h1>Soul Apothecary</h1>
                        </div>
                            <?php include '../admin/BATBelements/productlist.php'; ?>
                        </div>

                    <div class="recommendation-pagination">
                    <li class="recommendation-page-dot active"></li>
                    <li class="recommendation-page-dot"></li>
                    <li class="recommendation-page-dot"></li>
                </div>
                </div>
             </section>
        </div>
    </section>

    <section id="recommendation-section">
        <div class="container">
            <div class="recommendation-content">
                <h1 class="recommendations">Recommendations</h1>
                <div class="recommended-items">
                    <?php include '../admin/BATBelements/productlist.php'; ?>
                    <div class="recommendation-pagination">
                    <li class="recommendation-page-dot active"></li>
                    <li class="recommendation-page-dot"></li>
                    <li class="recommendation-page-dot"></li>
                </div>
            </div>  
        </div>
    </section> 

    <section id="footer">
        <div class="container">
            <div class="footerContent">
                <div class="socials">
                    <div class="line"></div>
                    <img src="/imagesuser/svg/facebookIcon.png" class="socialIcons">
                    <img src="/imagesuser/svg/instagramIcon.png" class="socialIcons">
                    <img src="/imagesuser/svg/twitterIcon.png" class="socialIcons">
                    <div class="line"></div>
                </div>                
            </div>
            <div class="textContent">
                <div class="title">BeautyandtheBest</div>
                <p class="copyright">Copyright © 2023 BeautyandtheBest. All Rights Reserved.</p>
            </div>
            <div class="linkSection">
                <div class="linkContent">
                    <a href="" class="link">Privacy Policy</a>
                    <a href="" class="barrier">|</a>
                    <a href="" class="link">Terms & Conditions</a>
                    <a href="" class="barrier">|</a>
                    <a href="" class="link">FAQ</a>
                </div>
            </div>
            
        </div>
    </section>

<script src="/userjs/productList.js"></script>
</body>
</html>