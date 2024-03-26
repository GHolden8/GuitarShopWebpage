

<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>The Guitar Store</title>
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="./styles/customer.css">
    </head>
    <body>
        <?php include("view/header.php"); ?>
        <?php include("view/horizontal_nav_bar.php"); ?>

        <main>
            <?php include("view/aside.php"); ?>
            <section>
                <div>
                    <form id="customerInfo" method="post" action="">
                        <table>
                            <caption>Customer Information</caption>
                            <tr>
                                <td>
                                    <label for="first">First Name: </label>
                                    <input type="text" id = "first" name ="first" value="<?php echo $customer_data['first_name'] ?>" >
                                    <input type="hidden" id = "customer_id" name ="customer_id" value="<?php echo $customer_data['customer_id'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="last">Last Name: </label>
                                    <input type="text" id = "last" name ="last"value="<?php echo $customer_data['last_name'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="mail">Email: </label>
                                    <input type="text" id = "mail" name ="mail" value="<?php echo $customer_data['email_address'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="password">Password: </label>
                                    <input type="text" id = "password" name ="password" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="confirm">Confirm Password: </label>
                                    <input type="text" id = "confirm" name ="confirm" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="action" value="Update Customer Information">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div>
                  <form method="post" id="Billing" action="">
                    <table>
                        <caption>Billing Information</caption>
                            <tr>
                                <td>
                                    <label for="line1">Address line 1: </label>
                                    <input type="text" id = "line1" name ="line1" value="<?php echo $customer_address['line1'] ?>" >
                                    <input type="hidden" id = "address_id" name ="address_id" value="<?php echo $customer_address['address_id'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="addy2">Address line 2: </label>
                                    <input type="text" id = "line2" name ="line2" value="<?php echo $customer_address['line2'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="city">City: </label>
                                    <input type="text" id = "city" name ="city" value="<?php echo $customer_address['city'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="the_state">State: </label>
                                        <select name="state" id = "state">
                                            <?php foreach ($states as $state) : ?>
                                                <option value="<?php echo $state['state']; ?>" <?php echo ($state['state'] == $customer_address['state']) ? 'selected' : ''; ?>> 
                                                    <?php echo $state['state']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="zip">Zip Code: </label>
                                    <input type="text" id = "zip_code" name ="zip_code" value="<?php echo $customer_address['zip_code'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="phone">Phone: </label>
                                    <input type="text" id = "phone" name ="phone" value="<?php echo $customer_address['phone'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="action" value="Update Billing Address">
                                </td>
                            </tr>
                    </table>    
                  </form>
                </div>
                    <div>
                      <form method="post" id="Shipping">
                    <table>
                        <caption>Shipping Information</caption>
                            <tr>
                                <td>
                                    <label for="line1">Address line 1: </label>
                                    <input type="text" id = "line1" name ="line1" value="<?php echo $customer_address['line1'] ?>" >
                                    <input type="hidden" id = "address_id" name ="address_id" value="<?php echo $customer_address['address_id'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="addy2">Address line 2: </label>
                                    <input type="text" id = "line2" name ="line2" value="<?php echo $customer_address['line2'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="city">City: </label>
                                    <input type="text" id = "city" name ="city" value="<?php echo $customer_address['city'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="the_state">State: </label>
                                        <select name="state" id = "state">
                                            <?php foreach ($states as $state) : ?>
                                                <option value="<?php echo $state['state']; ?>" <?php echo ($state['state'] == $customer_address['state']) ? 'selected' : ''; ?>> 
                                                    <?php echo $state['state']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="zip">Zip Code: </label>
                                    <input type="text" id = "zip_code" name ="zip_code" value="<?php echo $customer_address['zip_code'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="phone">Phone: </label>
                                    <input type="text" id = "phone" name ="phone" value="<?php echo $customer_address['phone'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="action" value="Update Shipping Address">
                                </td>
                            </tr>
                    </table>    
                    </table>       
                      </form>
                </div>
            </section>
        </main>
        <?php include("view/footer.php"); ?>
        <script src ="scripts/customer.js"></script>
    </body>