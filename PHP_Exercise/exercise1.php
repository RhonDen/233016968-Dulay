<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercise 1</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; }
        p { font-size: 18px; color: #34495e; }


        
    </style>
</head>
<body>
<button><a class="exit-button"  href="index.php">GO BACK</a></button>
    <div class="container">
        <h1>Exercise 1: Introduce Yourself</h1>
        <p>
            <?php
            $name = "Rhon Denver Dulay";
            $age = 21;
            $favorite_color = "blue";
            echo "Hi, I'm $name, I am $age years old, and my favorite color is <span style='color: blue;'>$favorite_color.</span>";
            ?>
        </p>
    </div>
</body>
</html>
