
<?php
session_start();
require '../connection/connection.php';

$client = new MongoDB\Client;
$collectionproducts = $client->BTBA->products;

if (!isset($_SESSION['email'])) {
    header("Location: ../admin/login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $productName = $_POST['productNameInput'];
    $productPrice = $_POST['productPriceInput'];
    $productDesc = $_POST['productDescInput'];
    $productCategory = $_POST['productCategoryInput'];
    $stock = $_POST['productStockInput'];

    $image = $_FILES['image'];
    $imageName = $image['name'];
    $imageTmpName = $image['tmp_name'];
    $imageSize = $image['size'];
    $imageError = $image['error'];
    $imageType = $image['type'];

    $imageExt = explode('.', $imageName);
    $imageActualExt = strtolower(end($imageExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($imageActualExt, $allowed)) {
        if ($imageError === 0) {
            if ($imageSize < 5000000) {
                $imageNameNew = uniqid('', true) . "." . $imageActualExt;
                $destination = "../imageadmin/" . $imageNameNew;
                move_uploaded_file($imageTmpName, $destination);

                $collectionproducts->insertOne([
                    'productName' => $productName,
                    'productPrice' => $productPrice,
                    'productDesc' => $productDesc,
                    'image' => $imageNameNew,
                    'productCategory' => $productCategory,
                    'stock' => $stock
                ]);

                echo "<script>alert('Product added successfully!');</script>";
                echo "<script>window.location.href = 'products.php';</script>";
                exit;
            } else {
                echo "<script>alert('Image size should be less than 5mb');</script>";
            }
        } else {
            echo "<script>alert('Error uploading image');</script>";
        }
    } else {
        echo "<script>alert('Image type should be jpg, jpeg, png or gif');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admincss/products.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="logoBrand">
                    <a href=""><img src="../imageadmin/logoIcon (1).png" class="logoIcon"></a>
                    <h1 class="brandName">BeautyandtheBest</h1>
                </div>
                <a href=""><img src="../imageadmin/registerUser.png" class="profileIcon"></a>
            </nav>
        </div>
    </header>
    
    
    <div class="menu">
        <div class="section">
        <div class="btn nav-btn">
        <a href="dashboard.php">
            <button type="submit">
                <img src="../imageadmin/dashboardIcon.png" class="image" style="width: 30px; height: 30px;">
                <p>Dashboard</p>
            </button>
        </a>
        </div>
        <a href="products.php">
        <div class="btn nav-btn">
            <button type="submit">
                <img src="../imageadmin/productsIcon.png" class="image" style="width: 30px; height: 30px;">
                <p>Products</p>
            </button>
        </a>
        </div>
        <div class="btn nav-btn">
            <a href="categories.php">
                <button type="submit">
                    <img src="../imageadmin/categoryIcon.png" class="image" style="width: 30px; height: 30px;">
                    <p>Categories</p>
                </button>
              </a>
        </div>
        <div class="btn nav-btn">
           <a href="orders.php">
            <button type="submit">
                <img src="../imageadmin/orderIcon.png" class="image" style="width: 30px; height: 30px;">
                <p>Orders</p>
            </button>
           </a>
        </div>
    </div>
    </div>
    <!-- end -->




    <!-- user info -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="user-info">
        <!-- eto yung border -->
        <div class="box1">
            
        </div>
        <!-- eto yung box sa loob ng box pag nag choose ng image -->
        <div class="box2">
        <img src="" alt="" id="output" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    
        <!-- text area -->
        <div class="product-describe">
            <div class="text">
                <textarea id="productNameInput" 
                name="productNameInput" 
                maxlength="1000" 
                onfocus="clearDefaultValue(this)" 
                onblur="restoreDefaultValue(this)">Product Name:</textarea>
            </div>
            <div class="text">
                <textarea id="productPriceInput" 
                name="productPriceInput" 
                maxlength="1000" 
                onfocus="clearDefaultValue(this)" 
                onblur="restoreDefaultValue(this)">Product Price:</textarea>
            </div>
            <div class="text">
                <textarea id="productCategoryInput" 
                name="productCategoryInput" 
                maxlength="1000" 
                onfocus="clearDefaultValue(this)" 
                onblur="restoreDefaultValue(this)">Category:</textarea>
            </div>
            <div class="text">
                <textarea id="productStockInput" 
                name="productStockInput" 
                maxlength="1000" 
                onfocus="clearDefaultValue(this)" 
                onblur="restoreDefaultValue(this)">Stock:</textarea>
            </div>
            <div class="text">
                <textarea id="productDescInput" 
                name="productDescInput" 
                maxlength="1000" 
                onfocus="clearDefaultValue(this)" 
                onblur="restoreDefaultValue(this)">Describe your product..</textarea>
            </div>
            
        </div>

        <!-- choose file -->
        <div class="file">
            <input type="file" name="image" id="file" onchange="loadFile(event)"></input>

        <!-- PA CSS NALANG NETO -->
            <button name="submit" type="submit">Upload</button>
        </div>
    </div>
</form>



        <div class="user-data">
            <div class="table">
             <table>
                 <tr>
                   <th>
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </div>
                   </th>
                   <th>Product</th>
                   <th>Stocks</th>
                   <th>Sold</th>
                   <th>Price</th>
                 </tr>
                 <?php foreach ($collectionproducts as $product) { ?>
    
                    <tr>
                    <td><?php echo $product['productCategory']; ?></td>
                    <td><?php echo $product['productName']; ?></td>
                    <td><?php echo $product['stock']; ?></td>
                    <td></td>
                    <td><?php echo $product['productPrice']; ?></td>
                    </tr>
                <?php } ?>
               </table>
             </div> 
 
         </div>
    </div>

    
    

    <script src="../adminjs/products.js"> </script>
<!--matic mag a-appear yung chosen image-->
    <script src="../adminjs/chosenappear.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>