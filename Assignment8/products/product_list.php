
<!DOCTYPE html>

<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>The Guitar Store</title>
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="./styles/products.css">
    </head>
    <body>
        <?php include("./view/header.php");?>
        <?php include("./view/horizontal_nav_bar.php");?>

        <main>
        <?php include("./view/aside.php"); ?>
    <section>
        <h2>Product List</h2>
        <form method="post" action="">
            <select name='category_id'>
                <?php  
                    foreach ($categories as $category) : 
                ?>
                <option value="<?php echo $category['category_id']; ?>">
                               <?php echo $category['category_name']; ?>
                </option>
                    <?php endforeach; ?>
            </select>
            <input type="submit" name="list_products" value="Choose"> 
        </form>
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>

            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['product_id']; ?></td>
                <td><?php echo $product['product_name']; ?></td>
                <td class="right"><?php echo $product['list_price']; ?>
                <td><form action="?delete" method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="product_id"
                           value="<?php
                                 echo $product['product_id']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php
                                 echo $product['category_id']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="?edit" method="post">
                    <input type="hidden" name="action"
                           value="edit_product">
                    <input type="hidden" name="product_id"
                           value="<?php
                                 echo $product['product_id']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php
                                 echo $product['category_id']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p>
            <a href="?action=add">Add Product</a>
        </p>

    </section>
        </main>
        <?php include("./view/footer.php"); ?>
    </body>
</html>
