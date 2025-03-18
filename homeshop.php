<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------bootstrap icon links---------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!------------------------slick slider link---------------------------------->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">

    <title>Landing Page</title>
</head>
<body>
    <section class="popular-brands">
        <h2>POPULAR BRANDS</h2>
        <div class="controls">
            <i class="bi bi-chevron-left left"></i>
            <i class="bi bi-chevron-left right"></i>
        </div>
        <div class="popular-brands-content">
            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('Query Fails');
            if (mysqli_query($select_products)>0){
                while($fetch_products = mysqli_fetch_assoc($select_products)){
            ?>
            <form method="post" class="cart">
                <img src="image/<php echo $fetch_products['image']; ?>">
                <div class="price"><?php echo $fetch_products['price']; ?></div>
                <div class="name"><?php echo $fetch_products['name']; ?></div>
                <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                <input type="hidden" name="product_quantity" value="1" min="1">
                <input type="hidden" name="product_id" value="<?php echo $fetch_products['image']; ?>">
                <div class="icon">
                    <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="bi bi-eye-fill"></a>
                    <button type="submit" name="add_to_wishlist" class="bi bi-heart"></button>
                    <button type="submit" name="add_to_cart" class="bi bi-cart"></button>
                </div>
            </form>
            
            <?php
                }
            }else{
                echo '<p> class="empty">no products added yet!</p>';
            }
            
            ?>
        </div>
    </section>
</body>
</html>