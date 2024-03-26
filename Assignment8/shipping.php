<!DOCTYPE html>

<html>
    <head>
        <title>The Guitar Store</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/shipping.css">
    </head>
    <body>
        <?php include("view/header.php"); ?>
        <?php include("view/horizontal_nav_bar.php"); ?>
        <main>
            <?php include("view/aside.php"); ?>
            <section>
                <h2>Shipping Cost</h2>
                <p>
                    <label for="cost">Enter the Cost of the Product: </label>
                    <input type="text" id="cost" name ="cost">
                    <input type="button" id="calculate" value="Calculate">
                </p>
                <p>
                    <label for="total">Total cost, including shipping</label>
                    <input type="text" id="total" name ="total">
                </p>
            </section>
        </main>
        <?php include("view/footer.php"); ?>
        <script src="scripts/shipping.js"></script>
    </body>
</html>
