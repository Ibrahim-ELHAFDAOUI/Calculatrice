<?php  
$result = "";
if (isset($_GET["operation"], $_GET["num1"], $_GET["num2"])) {
    $operation = $_GET["operation"];
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    if (is_numeric($num1) && is_numeric($num2)) {
        if ($operation == "+") {
            $result = $num1 + $num2;
        } elseif ($operation == "-") {
            $result = $num1 - $num2;
        } elseif ($operation == "*") {
            $result = $num1 * $num2;
        } elseif ($operation == "/") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Erreur : Division par zéro";
            }
        } else {
            $result = "Opération invalide.";
        }
    } else {
        $result = "Erreur : Entrées non valides.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
<form action="calculator.php" method="GET">
  <input type="number" name="num1" required>
  <br>
  <select name="operation" id="op" required>
    <option disabled selected>choose</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <br>
  <input type="number" name="num2" required>
  <br>
  <input type="submit">
  <?php echo $result; ?>
</form>
</body>
</html>
