<!DOCTYPE html>
<html>
<head><title>PHP Exercise 4</title><style>body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; }
        p { font-size: 18px; color: #34495e; }

        .exit-button {
            display: block;
            width: 100%;
            margin: 8px 0;
            padding: 12px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            transition: background-color 0.3s ease; }
        </style>
        
    </head>
<body>
<button><a class="exit-button"  href="index.php">GO BACK</a></button>
    <div class="container">
        <h1>Exercise 4: Celsius to Fahrenheit</h1>
        <p>
            <?php
            $celsius = 30;
            $fahrenheit = ($celsius * 9/5) + 32;
            echo $celsius . "°C is equal to " . $fahrenheit . "°F";
            ?>
        </p>
    </div>
</body>
</html>
