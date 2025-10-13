<!DOCTYPE html>
<html>
<head><title>PHP Exercise 7</title><style>body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; }
        p { font-size: 18px; color: #34495e; }
        </style>
        </head>
<body>
<button><a class="exit-button"  href="index.php">GO BACK</a></button>
    <div class="container">
        <h1>Exercise 7: BMI Calculator</h1>
        <p>
            <?php
            $weight = 70;
            $height = 1.75;
            $bmi = $weight / ($height * $height);
            echo "Your BMI is: " . round($bmi, 2);
            ?>
        </p>
    </div>
</body>
</html>
