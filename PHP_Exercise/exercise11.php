<!DOCTYPE html>
<html>
<head><title>PHP Exercise 11</title><style>body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
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
            transition: background-color 0.3s ease;
        }
        </style>
        </head>
<body>
<button><a class="exit-button"  href="index.php">GO BACK</a></button>
    <div class="container">
        <h1>Exercise 11: Currency Converter</h1>
        <p>
            <?php
            $php_amount = 1000 ;
            $usd_rate = 0.018;
            $eur_rate = 0.017;
            $jpy_rate = 2.65;
            echo "PHP Amount: ₱$php_amount<br>";
            echo "PHP to USD: $" . ($php_amount * $usd_rate) . "<br>";
            echo "PHP to EUR: €" . ($php_amount * $eur_rate) . "<br>";
            echo "PHP to JPY: ¥" . ($php_amount * $jpy_rate);
            ?>
        </p>
    </div>
</body>
</html>
