<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admincss/usedashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User Dashboard</title>
</head>
<body>
    <!-- menu -->
    <div class="menu">
        <div class="con-btn">
            <div class="btn">
                <button type="submit"><a href="../admin/userdashboard.php"><b>Profile<br>Information</b></a></button>
            </div>
            <div class="btn">
                <button type="submit"><a href="../admin/skinprofile.php"><b>Skin Profile</b></a></button>
            </div>
            <div class="btn">
                <button type="submit"><a href="../admin/accountsettings.php"><b>Account<br>Settings</b></a></button>
            </div>
            <div class="btn">
                <button type="submit"><b>Orders</b></button>
            </div>
            <div class="btn">
                <button type="submit"><b>Payments </b></button>
            </div>
            <div class="btn">
                <button type="submit"><b>Customer<br>Support</b></button>
            </div>
            <div class="btn">
                <button id="logout" type="submit"><b>Log out.</b></button>
            </div>
        </div>
    </div>
    <!-- end -->
     <!-- navigation -->
    <header>
        <div class="container">
            <nav>
                <div class="logoBrand">
                    <h1 class="brandName">BeautyandtheBest</h1>
                </div>
                <ul class="navList">
                    <li><a id="image1" href=""><img src="/image/image 47.png" class="searchIcon" style="height: 25px;"></a></li>
                    <li><a href=""><img src="/image/message.png" class="profileIcon" style="height: 25px;"></a></li> 
                    <li><a href=""><img src="/image/notification.png" class="profileIcon" style="height: 25px;"></a></li> 
                    <li><a href=""><img src="/image/shpping cart.png" class="profileIcon" style="height: 25px;"></a></li> 
                    <li><a href=""><img src="/image/=.png" class="profileIcon" style="height: 25px;"></a></li> 
                </ul>
            </nav>
        </div>
    </header>
    <!-- end -->
     <!-- input info -->
     <div class="user-info">
        <img src="/image/profile.png" alt="" style="height: 70px;">
        <p>Amschel Salas</p>
        <button id="changes" type="submit">Save Changes</button>
        <div class="inputs">
            <div class="input">
            <div class="inp">
                <label for="">FIRST NAME</label><br>
                <input type="text"> 
                <i class='bx bx-user'></i>
               
            </div>
            <div class="inp">
                <label for="">EMAIL</label><br>
                <input type="email">
                <i class='bx bx-envelope'></i>
            </div>
            <div class="inp">
                <label for="">DATE OF BIRTH</label><br>
                <input type="date">
            </div>
            </div>  
        <div class="input">
            <div class="inp1">
                <label for="">LAST NAME</label><br>
                <input type="text">
                <i class='bx bx-user'></i>
            </div>
            <div class="inp1">
                <label for="">PHONE NUMBER</label><br>
                <input type="text">
                <i class='bx bxs-phone'></i>
            </div>
            <div class="inp1">
                <label for="">ADDRESS</label><br>
                <input type="text">
                <i class="fa-solid fa-location-dot"></i>
            </div>
        </div>
        </div>
     </div>   
</body>
</html>