<!DOCTYPE html>
<html>
<head><title>PHP Exercise 10</title><style>body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; }
        p { font-size: 18px; color: #34495e; }
        </style>
        </head>
<body>
    <div class="container">
        <h1>Exercise 10: Grading System</h1>
        <p>
            <?php
            $math = 85;
            $english = 90;
            $science = 88;
            $average = ($math + $english + $science) / 3;
            if ($average >= 90) $grade = "A";
            elseif ($average >= 80) $grade = "B";
            elseif ($average >= 70) $grade = "C";
            elseif ($average >= 60) $grade = "D";
            else $grade = "F as in Fail ";
            echo "Average Score: " . round($average, 2) . "<br>Grade: $grade";
            ?>
        </p>
    </div>
</body>
</html>
