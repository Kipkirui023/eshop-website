<?php
    include 'connection.php';
    session_start();
    $admin_id = $_SESSION['admin_name'];

    if(!isset($admin_id)){
        header('location:login.php');
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin pannel</title>
</head>
<body>
    <?php include 'admin_header.php'; ?>
    <div class="line4"></div>
    <section class="dashboard">
        <div class="box-container">
            <div class="box">
                <?php  
                $total_pendings = 0;
                $select_pendings = mysqli_query($conn, "SELECT*FROM `order`  WHERE payment_status = 'pending'") or die('Query Failed');
                while($fetch_pending = mysqli_fetch_assoc($select_pendings)){
                    $total_pendings == $fetch_pending['total_price'];
                }
                ?>
                <h3><?php echo $total_pendings; ?>/-</h3>
                <p style="color: black;">total pending</p>
            </div>
            <div class="box">
                <?php  
                $total_completes = 0;
                $select_completes = mysqli_query($conn, "SELECT*FROM `order` WHERE payment_status = 'pending'") or die('Query Failed');
                while($fetch_complete = mysqli_fetch_assoc($select_completes)){
                    $total_completes = $fetch_completes['total_completes'];
                }
                ?>
                <h3><?php echo $total_completes; ?>/-</h3>
                <p>total completes</p>
            </div>
            <div class="box">
                <?php  
                $select_orders = mysqli_query($conn, "SELECT*FROM `order`") or die('Query Failed');
                $num_of_orders = mysqli_num_rows($select_orders);
                ?>
                <h3><?php echo $num_of_orders; ?></h3>
                <p>Order placed</p>
            </div>
            <div class="box">
                <?php  
                $select_products= mysqli_query($conn, "SELECT*FROM `order`") or die('Query Failed');
                $num_of_products = mysqli_num_rows($select_products);
                ?>
                <h3><?php echo $num_of_products; ?></h3>
                <p>Product Added</p>
            </div>
            <div class="box">
                <?php  
                $select_users= mysqli_query($conn, "SELECT*FROM `users` WHERE user_type = 'user'") or die('Query Failed');
                $num_of_users = mysqli_num_rows($select_users);
                ?>
                <h3><?php echo $num_of_users; ?></h3>
                <p>Total Users</p>
            </div>
            <div class="box">
                <?php  
                $select_admins= mysqli_query($conn, "SELECT*FROM `users` WHERE user_type = 'admin'") or die('Query Failed');
                $num_of_admins = mysqli_num_rows($select_admins);
                ?>
                <h3><?php echo $num_of_admins; ?></h3>
                <p>Total Admins</p>
            </div>
            <div class="box">
                <?php  
                $select_users= mysqli_query($conn, "SELECT*FROM `users`") or die('Query Failed');
                $num_of_users = mysqli_num_rows($select_users);
                ?>
                <h3><?php echo $num_of_users; ?></h3>
                <p>Total Registered Users</p>
            </div>
            <div class="box">
                <?php  
                $select_message= mysqli_query($conn, "SELECT*FROM `message`") or die('Query Failed');
                $num_of_message = mysqli_num_rows($select_message);
                ?>
                <h3><?php echo $num_of_message; ?></h3>
                <p>New Messages</p>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="script.js"></script>
    
</body>
</html>








