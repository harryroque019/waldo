<?php
require __DIR__ . '/../../connection/connection.php';

$client = new MongoDB\Client;
$collectionproducts = $client->BTBA->products;

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
    <title>Product List</title>
    <link rel="stylesheet" href="/usercss/productlistelement.css">
</head>
<body>
<div class="listitem">
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
</body>
<script src="/userjs/productlist.js"></script>
</html>

