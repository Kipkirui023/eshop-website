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

    //Deleting the products from the Database
    if (isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        
        mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('Query Fails');
        $message[] = 'User Removed Successfully';
        header('location:admin_user.php');
    }


?>
<style type="text/css">
    <?php 
        include 'style.css';
    ?>
</style>

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
    <?php
    if (isset($message)){
        foreach ($message as $message){
            echo'
            <div class="message">
                <span>'.$message.'</span>
                <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
            </div>
            ';
        }
    }
    ?>
    <div class="line2"></div>
    <section class="message-container">
        <h1 class="title">Total User Accounts</h1>
        <div class="box-container">
            <?php
                 $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('Query Fails');
                 if (mysqli_num_rows($select_users)>0){
                    while($fetch_users = mysqli_fetch_assoc($select_users)){
            ?>
                    <div class="box">
                        <p>User Id: <span><?php echo $fetch_users['id']; ?></span></p>
                        <p>Name: <span><?php echo $fetch_users['name']; ?></span></p>
                        <p>Email: <span><?php echo $fetch_users['email']; ?></span></p>
                        <p>User Type: <span style="color: <?php if ($fetch_users['user_type'] == 'admin'){echo '#ff0707';}; ?>"><?php echo $fetch_users['user_type']; ?></span></p>
                        <a href="admin_user.php?delete=<?php echo $fetch_users['id']; ?>;" onclick="return confirm('Delete This Message');">Delete!</a>
                    </div> 
                    <?php
                       }     
                    }else{
                        echo '
                            <div class="empty">
                                <p>No Products Added yet!</P>
                            </div>    
                        ';
                 }
            ?>
        </div>
    </section>
    <script type="text/javascript" src="script.js"></script>
    
</body>
</html>