<!DOCTYPE html>
<html>
<head><title>PHP Exercise 6</title><style>
    body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; }
        p { font-size: 18px; color: #34495e; }
</style>
</head>
<body>
    <div class="container">
        <h1>Exercise 6: Salary Calculator</h1>
        <p>
            <?php
            $basic_salary = 25000;
            $allowance = 5000;
            $deduction = 3000;
            $net_salary = $basic_salary + $allowance - $deduction;
            echo "Net Salary: ₱$net_salary";
            ?>
        </p>
    </div>
</body>
</html>
