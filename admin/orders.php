
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../admincss/orders.css">
    <title>Orders</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logoBrand">
                    <a href="homePage.html"><img src="../imageadmin/logoIcon (1).png" class="logoIcon"></a>
                    <h1 class="brandName">BeautyandtheBest</h1>
                </div>
                <a href=""><img src="../imageadmin/registerUser.png" class="profileIcon"></a>
            </nav>
        </div>
    </header>
    
    <div class="menu">
        <div class="section">
            <div class="btn nav-btn">
                <a href="../admin/dashboard.php">
                    <button type="submit">
                        <img src="../imageadmin/dashboardIcon.png" class="image" style="width: 30px; height: 30px;">
                        <p>Dashboard</p>
                    </button>
                </a>
            </div>
            <a href="../admin/products.php">
                <div class="btn nav-btn">
                    <button type="submit">
                        <img src="../imageadmin/productsIcon.png" class="image" style="width: 30px; height: 30px;">
                        <p>Products</p>
                    </button>
                </div>
            </a>
            <div class="btn nav-btn">
                <a href="../admin/categories.php">
                    <button type="submit">
                        <img src="../imageadmin/categoryIcon.png" class="image" style="width: 30px; height: 30px;">
                        <p>Categories</p>
                    </button>
                </a>
            </div>
            <div class="btn nav-btn">
                <a href="../admin/orders.php">
                    <button type="submit">
                        <img src="../imageadmin/orderIcon.png" class="image" style="width: 30px; height: 30px;">
                        <p>Orders</p>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="user-info">
        <div class="user-data">
            <div class="table">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Product ID</th>
                        <th>Price</th>
                        <th>User</th>
                        <th>MOP</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><img src="../imageadmin/1_1-removebg-preview 1.png" alt=""><p>PRODUCT NAME</p></td>
                        <td>Wr44svhg0..</td>
                        <td>₱ 199</td>
                        <td>Bhoxz K..</td>
                        <td>PayPal</td>
                        <td><button class="btn1">To Pay</button></td>
                        <td><button id="editBtn" class="edit">Edit</button> <button class="delete">Delete</button></td>
                    </tr>
                </table>
            </div> 
        </div>
    </div>  

    <!-- Modal -->
    <div id="editModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Edit Order</h2>
            <form id="editForm">
                <div class="inputs">  
                    <label for="product">Product:</label> <br>
                    <input type="text" id="product" name="product" value="" required>
                </div> 
           
                <div class="inputs">
                    <label for="price">Price:</label><br>
                    <input type="number" id="price" name="price" value="" required>
                </div>
                  
                <div class="inputs">
                <label for="status">Status:</label> <br>
                <select id="status" name="status">
                    <option value="To Pay">To Pay</option>
                    <option value="To Ship">To Ship</option>
                    <option value="To Receive">To Receive</option>
                    <option value="Cancelled">Cancelled</option>
                    <option value="Received">Received</option>
                </select>
                </div>
                
                
                <button type="submit" class="save-btn">Save Changes</button>
            </form>
        </div>
    </div>
    <script>
        var modal = document.getElementById("editModal");
        var editBtn = document.getElementById("editBtn");
        var closeBtn = document.querySelector(".close");

        editBtn.addEventListener("click", function () {
            modal.style.display = "block";
        });
        closeBtn.addEventListener("click", function () {
            modal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
        });
    </script>

 
    <script src="../adminjs/orders.js"></script>
</body>
</html>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>