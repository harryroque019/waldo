<?php
require '../connection/connection.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../admin/login.php");
    exit;
}

$users = $collection->find();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admincss/dasboard.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logoBrand">
                    <a href="homePage.php"><img src="../imageadmin/logoIcon (1).png" class="logoIcon"></a>
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


    <div class="user-info">
        <div class="boxes">
            <div class="box">
                <h2>Registered <br>User</h2>
                <h1>100</h1>
            </div>
            <div class="box">
                <h2>Registered <br>User</h2>
                <h1>100</h1>
            </div>
            <div class="box">
                <h2>Registered <br>User</h2>
                <h1>100</h1>
            </div>
        </div>
        
        <h2 class="text">User</h2>

        <div class="user-data">
           <div class="table">
            <table>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Username</th>
                </tr>
                
                <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phonenumber']; ?></td>
                    <td><?php echo $user['username']; ?></td>
              </tr>
                <?php } ?>
            </table>
            </div> 

        </div>
        
        
        
    </div>  


    
    
</body>
</html>
