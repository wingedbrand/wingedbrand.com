<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["sizee"])) {
        $size = $_POST["sizee"];
        $productName = $_POST["product"];
        $price = $_POST["price"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="orderstyle.css">
</head>
<body>
    <h2>Your order</h2>
    <form method="post" action="mail.php">
        <table>
            <tr>
                <th colspan="2"><?php echo $productName; ?></th>
            </tr>
            <tr>
                <th>Size</th>
                <td><?php echo $size; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td> <input type="text" name="name" placeholder="Enter your name" required> </td>
            </tr>
            <tr>
                <th>Surname</th>
                <td> <input type="text" name="surname" placeholder="Enter your Surname" required> </td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td><input type="email" name="email" placeholder="Enter your e-mail" required></td>
            </tr>
            <tr>
                <th>Phone number</th>
                <td><input type="tel" name="phone" pattern="[+][0-9]+" placeholder="Enter yor phone number (+1234567890)" required></td>
            </tr>
            <tr>
                <th>Price</th>
                <td><?php echo $price; ?></td>
            </tr>
        </table>
        <div class="buttonsubm"> 
            <button type="submit" name="buy">Complete order!</button>
        </div>
    </form>
</body>
</html>
<?php
    } else {
        echo "Invalid. Choose size, please";
    }
}
?>