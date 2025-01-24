<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tile Calculator</title>
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
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
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
        <h1>Tile Calculator</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="length">Length of the Lab (meters):</label>
                <input type="number" step="0.01" id="length" name="length" required>
            </div>
            <div class="form-group">
                <label for="width">Width of the Lab (meters):</label>
                <input type="number" step="0.01" id="width" name="width" required>
            </div>
            <button type="submit">Calculate Tiles</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the input values
            $length = $_POST["length"];
            $width = $_POST["width"];

            // Calculate the lab area
            $lab_area = $length * $width;

            // Tile area in square meters
            $tile_area = 0.36;

            // Calculate the number of tiles required
            $tiles_required = ceil($lab_area / $tile_area);

            // Display the result
            echo "<div class='result'>The total number of tiles required is: <strong>$tiles_required</strong></div>";
        }
        ?>
    </div>
</body>
</html>
