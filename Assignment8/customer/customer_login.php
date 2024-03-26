<!DOCTYPE html>

<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>The Guitar Store</title>
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="./styles/customer_login.css">
    </head>
    <body>
        <?php include("view/header.php"); ?>
        <?php include("view/horizontal_nav_bar.php"); ?>

        <main>
            <?php include("view/aside.php"); ?>
            <h2>Customer Login</h2>
            <div>
                <form id ="login" action="" method="post">
                        <label for="email">Email Address: </label>
                        <input type="text" id="email" name ="email" >
                    <input type="submit" name ="action" value="Login">
                </form>
                <form action="?cancel" method="post">
                    <input type="submit" name="action" value="Cancel">
                </form>
            </div>
        </main>
        <?php include("view/footer.php"); ?>
        <script src ="scripts/customer.js"></script>
    </body>