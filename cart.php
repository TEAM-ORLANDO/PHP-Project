<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Berlin31";
$dbname = "useracount";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}
include 'header.php';
$product_id = $_GET['id'];
//the product id from the URL
$action = $_GET['action'];
//the action from the URL

//if there is an product_id and that product_id doesn't exist display an error message
if ($product_id && !productExists($product_id)) {
    die("Error. Product Doesn't Exist");
}

switch($action) {//decide what to do

    case "add" :
        $_SESSION['cart'][$product_id]++;
        //add one to the quantity of the product with id $product_id
        break;

    case "remove" :
        $_SESSION['cart'][$product_id]--;
        //remove one from the quantity of the product with id $product_id
        if ($_SESSION['cart'][$product_id] == 0)
            unset($_SESSION['cart'][$product_id]);
        //if the quantity is zero, remove it completely (using the 'unset' function) - otherwise is will show zero, then -1, -2 etc when the user keeps removing items.
        break;

    case "empty" :
        unset($_SESSION['cart']);
        //unset the whole cart, i.e. empty the cart.
        break;
}
if ($_SESSION['cart']) {//if the cart isn't empty
    //show the cart

    echo "<table border=\"1\" padding=\"3\" width=\"40%\"><th><tr><td align=\"center\">Продукт</td><td align=\"center\">Количество</td><td align=\"center\">Цена</td></tr></th>";
    //format the cart using a HTML table

    //iterate through the cart, the $product_id is the key and $quantity is the value
    foreach ($_SESSION['cart'] as $product_id => $quantity) {

        //get the name and price from the database

        $get_name = mysqli_query($conn, "SELECT name FROM Products WHERE id='$product_id'");
        $name = mysqli_fetch_array($get_name);
        $get_price = mysqli_query($conn, "SELECT price FROM Products WHERE id='$product_id'");
        $pr_price = mysqli_fetch_array($get_price);
        //Only display the row if there is a product (though there should always be as we have already checked)
        $pr_name = $name['name'];
        $price = $pr_price['price'];
        $line_cost = $price * $quantity;
        //work out the line cost
        $total = $total + $line_cost;
        //add to the total cost

        echo "<tr>";
        //show this information in table cells
        echo "<td align=\"center\">$pr_name</td>";
        //along with a 'remove' link next to the quantity - which links to this page, but with an action of remove, and the id of the current product
        echo "<td align=\"center\">$quantity</td>";
        echo "<td align=\"center\">$line_cost</td>";
        echo "</tr>";

    }
    //show the total
    echo "<tr>";
    echo "<td colspan=\"2\" align=\"right\">Общо</td>";
    echo "<td align=\"right\">$total</td>";
    echo "</tr>";

} else {
    //otherwise tell the user they have no items in their cart
    echo "You have no items in your shopping cart.";

}
//function to check if a product exists
function productExists($product_id) {
    $check = FALSE;
    $product_get = mysqli_query($conn, "SELECT id FROM Products WHERE id='$product_id'");
    if (empty($product_get)) {
        $check = TRUE;
    }

    return $check;
}
?>