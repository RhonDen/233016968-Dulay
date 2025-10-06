<!DOCTYPE html>
<html>
<head><title>PHP Exercise 5</title><style>body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; }
        p { font-size: 18px; color: #34495e; }
        </style>
        </head>
<body>
    <div class="container">
        <h1>Exercise 5: Swap Variables</h1>
        <p>
            <?php
            $x = 7;
            $y = 14;
            $temp = $x;
            $x = $y;
            $y = $temp;
            echo "Before swapping: x = 7, y = 14<br>";
            echo "After swapping: x = $x, y = $y";
            ?>
        </p>
    </div>
</body>
</html>
