<html>
<head>
<title>Electricity Bill Calculator</title>
</head>
<body>
<?php
function calculateBill($units, $fixedCharge, $variableCharge) {
    return $fixedCharge + ($units * $variableCharge);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $consumedUnits =($_POST['units']);
    $fixedCharge = 50; 
    $variableCharge = 5;
    $electricityBill = calculateBill($consumedUnits, $fixedCharge, $variableCharge);
    echo "<h3>Bill Details</h3>";
    echo "<p>Consumed Units: $consumedUnits</p>";
    echo "<p>Fixed Charge: $fixedCharge</p>";
    echo "<p>Variable Charge per Unit: $variableCharge</p>";
    echo "<p>Total Bill: $electricityBill</p>";
}
?>
<h3>Calculate Bill</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="units">Enter Consumed Units:</label>
    <input type="number" name="units" required>
    <br><br><br>
    <input style="width: 120px;px;height:40px;" type="submit" value="Calculate Bill">
</form>

</body>
</html>
