<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br>

        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        function add($num1, $num2) {
            return $num1 + $num2;
        }

        function subtract($num1, $num2) {
            return $num1 - $num2;
        }

        function multiply($num1, $num2) {
            return $num1 * $num2;
        }

        function divide($num1, $num2) {
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: Cannot divide by zero!";
            }
        }

        switch ($operation) {
            case 'add':
                $result = add($num1, $num2);
                break;
            case 'subtract':
                $result = subtract($num1, $num2);
                break;
            case 'multiply':
                $result = multiply($num1, $num2);
                break;
            case 'divide':
                $result = divide($num1, $num2);
                break;
            default:
                $result = "Invalid operation selected!";
                break;
        }

        echo "<h3>Result:</h3>";
        echo "The result of $num1 $operation $num2 is: $result";
    }
    ?>
</body>
</html>

