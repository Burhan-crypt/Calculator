<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="calculator">
        <h1>Calculator</h1>
        <form method="POST">
            <input type="text" name="number1" placeholder="Enter First Number" required>
            <input type="text" name="number2" placeholder="Enter Second Number" required>
            <select name="operation" required>
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            <button type="submit">Calculate</button>
        </form>

        <div class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $operation = $_POST['operation'];
                    $result = 0;

                    if (is_numeric($number1) && is_numeric($number2)) {
                        switch ($operation) {
                            case "add":
                                $result = $number1 + $number2;
                                break;
                            case "subtract":
                                $result = $number1 - $number2;
                                break;
                            case "multiply":
                                $result = $number1 * $number2;
                                break;
                            case "divide":
                                if ($number2 != 0) {
                                    $result = $number1 / $number2;
                                } else {
                                    $result = "Error: Division by zero";
                                }
                                break;
                        }
                        echo "<p>Result: 0" . $result . "</p>";
                    } else {
                        echo "<p>Please enter valid numbers.</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
