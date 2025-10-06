<!DOCTYPE html>
<html>
<head><title>PHP Exercise 12</title>
<style>
    body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
    .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; }
    h1 { color: #2c3e50; }
    p { font-size: 18px; color: #34495e; }
</style>
</head>
<body>
    <div class="container">
        <h1>Exercise 12: Travel Cost Estimator</h1>
        <p>
            <?php
            $distance = 300; // km
            $fuel_consumption = 12; // km per liter
            $fuel_price = 65; // PHP per liter
            $liters_needed = $distance / $fuel_consumption;
            $cost = $liters_needed * $fuel_price;
            echo "distance: " . $distance . " km<br>  Fuel Consumption: " . $fuel_consumption . " km/l<br> Fuel Price: ₱" . $fuel_price . " per liter<br>";
            echo "Estimated Travel Cost: ₱" . round($cost, 2);
            ?>
        </p>
    </div>
</body>
</html>
