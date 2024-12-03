<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admincss/categories.css">
    <title>Document</title>
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
        </a>
        </div>
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
    <!-- end -->




     <div class="user-info">
        <div class="user-data">
           <div class="table">
            <table>
                <tr>
                  <th>Category</th>
                  <th>Stocks</th>
                  <th>Sold</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td> cabalida jess carlos v.</td>
                  <td>cabalida@gmail.coim</td>
                  <td>0644785544</td>
                  <td><button class="btn1">Edit</button></td>
                </tr>
                <tr>
                    <td> cabalida jess carlos v.</td>
                    <td>cabalida@gmail.coim</td>
                    <td>0644785544</td>
                    <td><button class="btn1">Edit</button></td>
                  </tr>
              </table>
            </div> 

        </div>

        <div id="editModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Edit Order</h2>
                <form id="editForm">
                     <div class="inputs">  
                        <label for="product">Category:</label> <br>
                       <input type="text">
                     </div> 
               
                     <div class="inputs">
                        <label for="price">Stocks:</label><br>
                        <input type="text">
                     </div>
                      
                     <div class="inputs">
                    <label for="status">Solid:</label> <br>
                        <input type="text">
                     </div>
                    
            
                    <button type="submit" class="save-btn">Save Changes</button>
                </form>
            </div>
        </div>   
    </div>  


   <script>

    
         // Get modal element
const modal = document.getElementById("editModal");
const closeBtn = document.querySelector(".close");
const editButtons = document.querySelectorAll(".btn1");

// Open modal when "Edit" button is clicked
editButtons.forEach(button => {
    button.addEventListener("click", function () {
        modal.style.display = "block";
        
        // Optionally populate modal fields with current row data
        const row = this.closest("tr");
        document.getElementById("product").value = row.cells[0].innerText.trim();
        document.getElementById("price").value = row.cells[2].innerText.replace('₱ ', '').trim();
        document.getElementById("status").value = row.cells[5].innerText.trim();
    });
});

// Close modal when "X" button is clicked
closeBtn.addEventListener("click", function () {
    modal.style.display = "none";
});

// Close modal when user clicks outside the modal content
window.addEventListener("click", function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

// Save changes (you can add your own logic here)
document.getElementById("editForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission
    alert("Changes saved!");
    modal.style.display = "none";
});




   </script>
    
</body>
</html>