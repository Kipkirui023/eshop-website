<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="admin_pannel.php" class="logo"><img src="images/log.jpg" alt="logo"></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="shop.php">Shop</a>
                <a href="order.php">Order</a>
                <a href="contact.php">Contact</a>
            </nav>
            <div class="icons">
                <i class="bi bi-person" id="user-btn"></i>
                <a href="wishlist.php"><i class="bi bi-heart"></i></a>
                <a href="cart.php"><i class="bi bi-cart"></i></a>
                <i class="bi bi-list" id="menu-btn"></i>
            </div>
            <div class="user-box">
                
                <p>Username : <span><?php echo $_SESSION['user_name'];?></span></p>
                <p>Email : <span><?php echo $_SESSION['user_email'];?></span></p>
                
                <form method="post">
                    <button type="submit" name="logout" class="logout-btn">Log Out</button>
                </form>
            </div>
        </div>
    </header>
    
</body>
</html>