
<!DOCTYPE html>

<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>The Guitar Store</title>
        <link rel="stylesheet" href="./styles/main.css">
    </head>
    <body>
        <?php include("./view/header.php"); ?>
        <nav>
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./lessons/index.php">Lessons</a></li>
            <li><a href="./products/index.php">Products</a></li>
            <li><a href="./support/support.php">Support</a></li>
            <li><a href="./shipping/shipping.php">Shipping</a></li>
            <li>
                <a href="#">Contact Us</a>
                <ul>
                    <li><a href="./contact/email/index.php">Email</a></li>
                    <li><a href="./contact/phone/index.php">Phone</a></li>
                    <li><a href="./contact/liveChat/index.php">Live Chat</a></li>   
                </ul>
            </li>
          </ul>
        </nav>

        <main>
            <aside>
                <ul>
                    <li><a href="./products/guitars/guitars.php">Guitars</a></li>
                    <li><a href="./products/basses/index.php">Basses</a></li>
                    <li><a href="./products/drums/index.php">Drums</a></li>
                    <li><a href="./products/keyboards/index.php">Keyboards</a></li>
                </ul>
            </aside>     
              <p>
                 <?php 
                     if($error_message != ''){
                       echo 'Connection to Database failed';
                       echo 'Error message: ' . $error_message; 
                     }
                 ?>
              </p>
    <section>
        <p><a href="add_product_form.php">Add Product</a></p>
    </section>
        </main>
        <footer>
              <p> <script src="./scripts/date.js"></script></p>
            <p>&copy; 2023 The Guitar Store</p>
        </footer>
    </body>
