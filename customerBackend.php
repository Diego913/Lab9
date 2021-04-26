<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Backend</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-wrapper">
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$username = $_POST["username"];
$password = $_POST["password"];

$items = array("PS5", "Xbox", "Switch");
$costs = array(500.00, 490.00, 350.00);
$counts = array($_POST["ps5"], $_POST["xbox"], $_POST["switch"]);
$shipping = $_POST["shipping"];

echo "<div> Your username is the following {$username}!</div>";
echo "<div> Your password is the following {$password}</div>";

function displayReceipt()
{
    $total = 0;
    echo '<table>';
    echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";

    for ($i = 0; $i < count($GLOBALS["items"]); $i++) 
    {
        echo "<tr><th>{$GLOBALS["items"][$i]}</th>";
        echo "<td>{$GLOBALS["counts"][$i]}</td>";
        echo "<td>{$GLOBALS["costs"][$i]}</td>";
        echo "<td>" . $GLOBALS["costs"][$i]*$GLOBALS["counts"][$i] . "</td></tr>"; 

        $total += $GLOBALS["costs"][$i]*$GLOBALS["counts"][$i];
    }
    echo "<tr><th>Shipping</th>"; 
    echo '<td colspan="2">' . "{$GLOBALS["shipping"]}</td>";

    if ($GLOBALS["shipping"] == "Free")
    {
        echo "<td>$0.00</td>";
    } elseif ($GLOBALS["shipping"] == "Standard")
    {
        echo "<td>$70.00</td>";
        $total += 70;
    } else
    {
        echo "<td>$200.00</td>";
        $total += 200;
    }

    echo '</tr><tr><th colspan="3">' . "Total Cost</th><th>{$total}</th></tr>";
    echo "</table>";
}
displayReceipt();
?>
<html>
</div>
</html>