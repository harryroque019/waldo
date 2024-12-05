<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/admincss/cart.css">
</head>
<body>
    <div class="nav">
        <img src="/imageadmin/logo.png" alt="Logo" class="logo" style="margin-left: 190px; " height=70px>
        <p id="Beauty">BeautyandtheBest</p>
        <ul>
            <li><a href="Home"><b>Home</b></a></li>
            <li><a href="Home"><b>Shop</b></a></li>
            <li><a href="Home"><b>About Us</b></a></li>
            <a href=""><img src="/imageadmin/image 47.png" alt="" style="width: 37px;" height="30px"></a>
        </ul>
    </div>
        <div class="icon1">
            <a href=""><img src="/imageadmin/backIcon 2.png" alt="" style="height: 40px;"></a>
            <h1>Your Cart</h1>
        </div>
        <div class="container" style= "margin-bottom: 30px;">
        <!-- product one -->
        <div class="product">
            <input  type="checkbox" name="" id="check">
            <div class="image">
                <img id="image" src="/imageadmin/products.png" alt="" style="height: 150px;">
            </div>
            <div class="productname">
                <h3>Product Name</h3><br><br>
                <h3>₱ 199.00 <img src="/imageadmin/heart.png" style="height: 17px;" alt=""></h3> <br><br>
                <img src="/imageadmin/ratings.png" style="width: 80px;" alt="">
            </div>
            <div class="line"></div>
            <div class="di">
                <div class="DandI">
                    <span class="minus">-</span>
                    <span class="num">1</span>
                    <span class="plus">+</span>
                </div>
                <p id="p">Total Price</p>
            </div>
            <div class="btns">
                <div class="btn">
                    <button type="submit">Buy Now</button>
                </div>
                <div class="btn">
                    <button type="submit">Remove</button>
                </div>
            </div>
        </div>
   
    <!-- product two -->
    <div class="product">
        <input  type="checkbox" name="" id="check">
        <div class="image">
            <img id="image" src="/imageadmin/products.png" alt="" style="height: 150px;">
        </div>
        <div class="productname">
            <h3>Product Name</h3><br><br>
            <h3>₱ 199.00 <img src="/imageadmin/heart.png" style="height: 17px;" alt=""></h3> <br><br>
            <img src="/imageadmin/ratings.png" style="width: 80px;" alt="">
        </div>
        <div class="line"></div>
        <div class="di">
            <div class="DandI">
                <span class="minus">-</span>
                <span class="num">1</span>
                <span class="plus">+</span>
            </div>
            <p id="p">Total Price</p>
        </div>
        <div class="btns">
            <div class="btn">
                <button type="submit">Buy Now</button>
            </div>
            <div class="btn">
                <button type="submit">Remove</button>
            </div>
        </div>
    </div>
</div>




    <script>
        const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");

        let a = 1;
        plus.addEventListener("click",()=>{
            a++

            num.innerHTML = a;
            console.log(a);
        });
        minus.addEventListener("click",()=>{
          if(a>1){
            a--;
            num.innerText = a;
          }
        });


        document.querySelectorAll(".product").forEach((product) => {
    const plus = product.querySelector(".plus"),
        minus = product.querySelector(".minus"),
        num = product.querySelector(".num");

    let count = 1;

    plus.addEventListener("click", () => {
        count++;
        num.innerText = count;
    });

    minus.addEventListener("click", () => {
        if (count > 1) {
            count--;
            num.innerText = count;
        }
    });
});
    </script>
    
</body>
</html>


<!-- orders 
payment
cutomer support
order history -->