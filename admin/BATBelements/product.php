<?php
// Adjust the path to the connection file
require_once __DIR__ . '/../../connection/connection.php';

// Retrieve categories from database
$client = new MongoDB\Client;
$collectionproducts = $client->BTBA->products;
$categories = $collectionproducts->distinct('productCategory');

// Create an array to store the categories
$categoryArray = array();

// Loop through the categories and add them to the array
foreach ($categories as $category) {
    $categoryArray[] = $category;
}

// Retrieve image data from database
$colected = $collectionproducts->find();
$imageData = array();

foreach ($colected as $product) {
    if (isset($product['image'])) {
        $imageData[$product['productName']] = 'data:image/jpeg;base64,' . base64_encode(file_get_contents(__DIR__ . '/../../imageadmin/' . $product['image']));
    }
}
?>
<style>
    select {
        max-width: 150px;
    }
    img {
        max-width: 100px;
        max-height: 100px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <table>
        <tr>
            <th>
                <select class="form-select" aria-label="Default select example" onchange="filterTableByCategory(this.value)">
                <option value="">Select Category</option>
                <?php foreach ($categoryArray as $category) { ?>
                <option value="<?= htmlspecialchars($category); ?>">
                    <?= htmlspecialchars($category); ?></option>
                <?php } ?>
                </select>
            </th>
            <th>Product</th>
            <th>Image</th>
            <th>Stocks</th>
            <th>Sold</th>
            <th>Price</th>
            </tr>
        <?php 
        $colected = $collectionproducts->find(); // Re-query the products to avoid cursor rewind error
        foreach ($colected as $product) { ?>
            <tr>
                <td><?= htmlspecialchars($product['productCategory'] ?? ''); ?></td>
                <td><?php echo isset($product['productName']) ? htmlspecialchars($product['productName']) : ''; ?></td>
                <td><?php echo isset($product['image']) && isset($imageData[$product['productName']]) ? '<img src="' . $imageData[$product['productName']] . '" alt="">' : ''; ?></td>
                <td><?= htmlspecialchars($product['stock'] ?? ''); ?></td>
                <td><?= htmlspecialchars($product['sold'] ?? ''); ?></td>
                <td><?= htmlspecialchars($product['productPrice'] ?? ''); ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
<script>
    function filterTableByCategory(category) {
        const tableRows = document.querySelectorAll('table tr');
        tableRows.forEach((row, index) => {
            if (index === 0) return; // Skip header row
            const cell = row.querySelector('td:first-child');
            if (category === "" || cell.textContent.trim() === category) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
</html>

