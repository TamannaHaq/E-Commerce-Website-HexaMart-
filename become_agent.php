<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['order'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
   $method = mysqli_real_escape_string($conn, $_POST['method']);
    $address = mysqli_real_escape_string($conn, 'flat no. '. $_POST['flat'].', '. $_POST['street'].', '. $_POST['city']);
    $placed_on = date('d-M-Y');

    $cart_total = 0;
    $cart_products[] = '';

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($cart_query) > 0){
        while($cart_item = mysqli_fetch_assoc($cart_query)){
            $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
            $sub_total = ($cart_item['price'] * $cart_item['quantity']);
            $cart_total += $sub_total;
        }
    }

    $total_products = implode(', ',$cart_products);

    $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_products = '$total_products' AND total_price = '$cart_total'") or die('query failed');

    if($cart_total == 0){
        $message[] = 'Added Successfully!';
    }elseif(mysqli_num_rows($order_query) > 0){
        $message[] = 'order placed already!';
    }else{
        mysqli_query($conn, "INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
        mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        $message[] = 'order placed successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Become An Agent</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Become An Agent</h3>
  
</section>

<!-- Rules Section -->
<section>
    <div style="font-size: 20px;" >
        <h1>Terms & Conditions for agents</h1>
        <p>Welcome to our website. If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern SourceCodester’s relationship with you in relation to this website. The use of this website is subject to the following terms of use:</p>
        <ul style="color:#0419AF;">
            <li>Maintain sales policy</li>
            <li>Ensure correct Information at time of adding Produc</li>
            <li>Upload Original Pictures for Products</li>
            <li>Delivery will be maintain</li>
            <li>Utilize customer data</li>
            <li>Instant Feedback </li>
            <li>Fullfill all Information which is given below</li>
            
        </ul>
    </div>

    <!-- <div class="grand-total">grand total : <span>/-</span></div> -->
</section>

<section class="checkout">

    <form action="" method="POST">

        <h3>Hexa Agent</h3>

        <div class="flex">
            <div class="inputBox">
                <span>your name :</span>
                <input type="text" name="name" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span>your number :</span>
                <input type="number" name="number" min="0" placeholder="enter your number">
            </div>
            <div class="inputBox">
                <span>your email :</span>
                <input type="email" name="email" placeholder="enter your email">
            </div>
            <div class="inputBox">
                <span>Natonal Id :</span>
                <input type="number" name="number" min="0" placeholder="enter your National Id No">
            </div>
             <div class="inputBox">
                <span>Types of agents:</span>
                <select name="method">
                    <option value="cash on delivery">Electronics</option>
                    <option value="credit card">Gadgets</option>
                    <option value="paypal">Others</option>
                
                </select>
            </div> 
            <div class="inputBox">
                <span>Present Adress :</span>
                <input type="text" name="flat" placeholder="e.g. flat no.">
            </div>
            <div class="inputBox">
                <span>Parmanent dress :</span>
                <input type="text" name="street" placeholder="e.g.  street name">
            </div>
            <div class="inputBox">
                <span>city :</span>
                <input type="text" name="city" placeholder="e.g. Rajshahi">
            </div>
            <div class="inputBox">
                <span>Upload Deed Copy :</span>
                <input type="file" accept="image/jpg, image/jpeg, image/png" required class="box" name="image">
            </div>
            <div class="inputBox">
                <span>Upload Birth Certificate :</span>
                <input type="file" accept="image/jpg, image/jpeg, image/png" required class="box" name="image">
            </div>
            
        </div>
        <p>don't have an account? <a href="register.php">register</a></p>

        <input type="submit" name="order" value="Submit" class="btn">
        <!-- <a href="check.php">checkout</a> -->

    </form>

</section>






<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>