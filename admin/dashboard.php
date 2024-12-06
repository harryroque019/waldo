<?php
require '../connection/connection.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../admin/login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $status = $_POST['status'];

    $collectionuser->updateOne(
        ['email' => $email],
        ['$set' => ['status' => $status]]
    );

    echo "<script>alert('Status updated successfully'); window.location.href = 'dashboard.php';</script>";
    exit;
}

$users = $collectionuser->find();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admincss/dasboard.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <a  href="products.php" style="text-decoration: none;">
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
        <form>
            <input type="password" name="password" id="" placeholder="Search" required>
        </form>
        


        <div class="user-data">
           <div class="table">
            <table>
                <tr>
                <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th></th>
                </tr>
                
                <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phonenumber']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td>
                    <form method="POST">
                        <select name="status" class="status">
                            <option value="Active" <?php echo $user['status'] == 'Active' ? 'selected' : ''; ?>>Active</option>
                            <option value="Inactive" <?php echo $user['status'] == 'Inactive' ? 'selected' : ''; ?>>nactive</option>
                        </select>
                        <input type="hidden" name="email" value="<?php echo $user['email']; ?>">
                        <button type="submit">Save</button>
                    </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
            </div> 
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

