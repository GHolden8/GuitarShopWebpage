<!DOCTYPE html>

<html>
    <head>
        <title>The Guitar Store</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="./styles/guitars.css">

        <link href="./styles/jquery.bxslider.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="./scripts/jquery.bxSlider.js"></script>

    </head>
    <body>
        <?php include("./view/header.php"); ?>
        <?php include("./view/horizontal_nav_bar.php"); ?>
        <main>
            <?php include("./view/aside.php"); ?>
            <section>
                <h2>Our Guitars</h2>
                <p>Check out our fine selection of guitars!<p>
                <div>
                    <ul id="slider">
                        <li><img src="<?php echo $CABALLERO; ?>"
                            alt="<?php echo $CAB; ?>"
                            title="Caballero11"></li>
                        <li><img src="<?php echo $FENDERSTRAT; ?>"
                            alt="<?php echo $FENDER; ?>"
                            title="FenderStratocaster"></li>
                        <li><img src="<?php echo $LESPAUL; ?>"
                            alt="<?php echo $LES; ?>"
                            title="GibsonLesPaul"></li>
                        <li><img src="<?php echo $GIBSON; ?>"
                            alt="<?php echo $GIB; ?>"
                            title="GibsonSB"></li>
                        <li><img src="<?php echo $WASHBURN; ?>"
                            alt="<?php echo $WASH; ?>"
                            title="WashburnD10S"></li>
                        <li><img src="<?php echo $FG700S; ?>"
                            alt="<?php echo $FG; ?>"
                            title="YamahaFG700S"></li>
                    </ul>

                </div>
            </section>
            <script src="./scripts/guitars.js"></script>
        </main>
        <?php include("./view/footer.php"); ?>
    </body>
</html>
