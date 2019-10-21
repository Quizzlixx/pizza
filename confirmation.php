<?php
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $method = $_POST['method'];
    $address = $_POST['address'];
    $size = $_POST['size'];
    $crust = $_POST['crust'];
    $sauce = $_POST['sauce'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petey Piranha's Pizza</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <h2> Order Summary:</h2>
    <p>Name:
        <?php echo "$first $last"; ?>
    </p>
    <p>Method:
        <?php echo "$method"; ?>
    </p>
    <p>Address:
        <?php echo "$address"; ?>
    </p>
    <p>Size:
        <?php echo "$size"; ?>
    </p>
    <p>Crust:
        <?php echo "$crust"; ?>
    </p>
    <p>Sauce:
        <?php echo "$sauce"; ?>
    </p>
    <p>Toppings:
        <?php echo $_POST['toppings']; ?>
    </p>
    <pre>

    </pre>
    <?php
    // Send order by email
    // Note: This will probably go to your spam folder
    $email = "klow4@mail.greenriver.edu";

    $email_body = "Order Summary --\r\n";
    $email_body .= "Name: $first $last\r\n";

    $email_subject = "New Order Placed";

    $to = $email;

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email";

    $success = mail($to, $email_subject, $email_body, $headers);

    // Print final confirmation
    $msg = $success ? "Your order has been successfully placed."
        : "We're sorry. There was a problem with your oder. Please call (555) 867-5309";
    echo "<p>$msg</p>";
    ?>
</body>
</html>