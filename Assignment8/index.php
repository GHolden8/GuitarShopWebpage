<?php 
    require("model/database.php");
    require("model/category_db.php");
    require("model/product_db.php");
    require("model/customer_db.php");
    require("model/address_db.php");

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

if($action == 'home'){
    $image_filename = 'images/drums/LudwigDrumSet.png';
    $image_alt = 'Image: ludwig.png';
    include_once('home.php');
}else if($action=='shipping'){
    include_once('shipping.php');
}else if($action == 'support'){
    include_once('support.php');
}else if ($action == 'list_products') {
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $products = get_products_by_category($category_id);
    include("products/product_list.php");
}else if($action=='guitars'){
    $FG700S = 'images/guitars/YamahaFG700S.png';
    $FG = 'Image: YamahaFG700S.png';
    $WASHBURN = 'images/guitars/WashburnD10S.png';
    $WASH = 'Image: WashburnD10S.png';
    $GIBSON = 'images/guitars/GibsonSB.png';
    $GIB = 'Image: GibsonSB.png';
    $LESPAUL = 'images/guitars/GibsonLesPaul.png';
    $LES = 'Image: GibsonLesPaul.png';
    $FENDERSTRAT = 'images/guitars/FenderStratocaster.png';
    $FENDER = 'Image: FenderStratocaster.png';
    $CABALLERO = 'images/guitars/Caballero11.png';
    $CAB = 'Image: Caballero11.png';
    include("products/guitars.php");
}else if($action=='customer_login'){
    
    include('customer/customer_login.php');
}else if($action=='customer_page'){
    
    $email = filter_input(INPUT_POST, 'email');
    if ($email == NULL || $email == FALSE) {
        $email = 1;
    }
    $customer_data = get_customer_info_by_email($email);
    $customer_address = get_address($customer_data['billing_address_id']);
    $customer_ship = get_address($customer_data['shipping_address_id']);
    $states = get_states();
    include("customer/customer.php");
}else if($action=='cancel'){
    include("home.php");
}else if($action=='update_customer_info'){
     $email = filter_input(INPUT_POST, 'mail');
     $customer_id = filter_input(INPUT_POST, 'customer_id');
     $first = filter_input(INPUT_POST, 'first');
     $last = filter_input(INPUT_POST, 'last');
     $password = filter_input(INPUT_POST, 'password');

    $customer_stuff = get_customer_info($customer_id) ;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);  
    
    update_first_name($customer_id, $first);
    update_last_name($customer_id, $last);
    update_email_address($customer_id, $email);
    update_password($customer_id, $hashed_password);
    
    $customer_data = get_customer_info($customer_id);
    $customer_address = get_address($customer_data['billing_address_id']);
    $customer_ship = get_address($customer_data['shipping_address_id']);
    $states = get_states();
    include("customer/customer.php");
}else if($action=='update_billing_address'){
    $address_id = filter_input(INPUT_POST, 'address_id');
    $line1 = filter_input(INPUT_POST, 'line1');
    $line2 = filter_input(INPUT_POST, 'line2');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip_code = filter_input(INPUT_POST, 'zip_code');
    $phone = filter_input(INPUT_POST, 'phone');

    update_address($address_id, $line1, $line2, $city, $state, $zip_code, $phone);
    $customer_add = get_address($address_id);
    $customer_id = $customer_add['customer_id'];
    $customer_data = get_customer_info($customer_id);
    $customer_address = get_address($customer_data['billing_address_id']);
    $customer_ship = get_address($customer_data['shipping_address_id']);
    $states = get_states();
    include("customer/customer.php");
}else if($action=='update_shipping_address'){
    $address_id = filter_input(INPUT_POST, 'address_id');
    $line1 = filter_input(INPUT_POST, 'line1');
    $line2 = filter_input(INPUT_POST, 'line2');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip_code = filter_input(INPUT_POST, 'zip_code');
    $phone = filter_input(INPUT_POST, 'phone');

    update_address($address_id, $line1, $line2, $city, $state, $zip_code, $phone);
    $customer_add = get_address($address_id);
    $customer_id = $customer_add['customer_id'];
    $customer_data = get_customer_info($customer_id);
    $customer_address = get_address($customer_data['billing_address_id']);
    $customer_ship = get_address($customer_data['shipping_address_id']);
    $states = get_states();
    include("customer/customer.php");
}else{
    $image_filename = 'images/drums/LudwigDrumSet.png';
    $image_alt = 'Image: ludwig.png';
    include("home.php");
}

?>

