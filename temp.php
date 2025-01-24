<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 15px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background: #e9ecef;
            border-radius: 5px;
            color: #333;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Temperature Converter</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="temperature">Enter Temperature:</label>
                <input type="number" step="0.01" id="temperature" name="temperature" required>
            </div>
            <div class="form-group">
                <label for="conversion">Select Conversion:</label>
                <select id="conversion" name="conversion" required>
                    <option value="c_to_f">Celsius to Fahrenheit</option>
                    <option value="f_to_c">Fahrenheit to Celsius</option>
                </select>
            </div>
            <button type="submit">Convert</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = floatval($_POST["temperature"]);
            $conversion = $_POST["conversion"];

            if ($conversion == "c_to_f") {
                // Celsius to Fahrenheit conversion
                $result = ($temperature * 9 / 5) + 32;
                echo "<div class='result'>{$temperature}°C is equal to " . round($result, 2) . "°F</div>";
            } elseif ($conversion == "f_to_c") {
                // Fahrenheit to Celsius conversion
                $result = ($temperature - 32) * 5 / 9;
                echo "<div class='result'>{$temperature}°F is equal to " . round($result, 2) . "°C</div>";
            } else {
                echo "<div class='result'>Invalid conversion option selected.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
