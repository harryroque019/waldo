<?php
require __DIR__ . '/../../connection/connection.php';

$client = new MongoDB\Client;
$collectionproducts = $client->BTBA->products;

// Retrieve distinct categories from the database
$categories = $collectionproducts->distinct('productCategory');

// Retrieve all products from the database
$products = $collectionproducts->find()->toArray();

$imageData = array();
foreach ($products as $product) {
    if (isset($product['image'])) {
        $imageData[$product['productName']] = 'data:image/jpeg;base64,' . base64_encode(file_get_contents(__DIR__ . '/../../imageadmin/' . $product['image']));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/usercss/productlist.css">
</head>
<body>
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
                    <?php foreach ($products as $product): ?>
                        <div class="item <?= strtolower(str_replace(' ', '-', $product['productCategory'])) ?>">
                            <div class="product-image">
                                <img src="<?= $imageData[$product['productName']] ?? '/imagesuser/default.png' ?>">
                            </div>
                            <div class="product-item-name">
                                <p class="item-1"><?= htmlspecialchars($product['productName']) ?></p>
                            </div>
                            <div class="product-item-price">
                                <p class="item-1-price">₱ <?= htmlspecialchars($product['productPrice']) ?></p>
                            </div>
                            <div class="stars">
                                <img src="../imagesuser/svg/starIcon1.png" class="starIcon1">
                                <img src="../imagesuser/svg/starIcon1.png" class="starIcon1">
                                <img src="../imagesuser/svg/starIcon1.png" class="starIcon1">
                                <img src="../imagesuser/svg/starIcon2.png" class="starIcon1">
                            </div>
                            <div class="item-btn">
                                <a href="../user/<?= strtolower(str_replace(' ', '-', $product['productName'])) ?>.php">
                                    <button class="view-more-btn"> 
                                        View More
                                        <span class="btn-background">
                                            <img src="../imagesuser/svg/arrowIcon.png" class="arrowIcon">
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pagination-1">
                    <li class="page-dot active"></li>
                    <li class="page-dot"></li>
                    <li class="page-dot"></li>
                    <li class="page-dot"></li>
                    <li class="page-dot"></li>
                </div>

                <div class="brand-2">
                    <h1>Apotheke Science</h1>
                </div>
                <div class="product-brand-2">
                    <!-- Additional content can be added here -->
                </div>

            </div>
        </section>
    </div>
</body>
</html>

</body>
<script src="/userjs/productList.js"></script>
</html>