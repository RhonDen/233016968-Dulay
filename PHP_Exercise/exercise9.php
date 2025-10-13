<!DOCTYPE html>
<html>
<head><title>PHP Exercise 9</title><style>body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; }
        p { font-size: 18px; color: #34495e; }
        </style>
        </head>
<body>
<button><a class="exit-button"  href="index.php">GO BACK</a></button>
    <div class="container">
        <h1>Exercise 9: Bank Account</h1>
        <p>
            <?php
            $balance = 10000;
            $deposit = 2500;
            $withdraw = 1500;
            $balance += $deposit;
            $balance -= $withdraw;
            echo "Final Balance: ₱$balance";
            ?>
        </p>
    </div>
</body>
</html>
