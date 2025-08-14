<?php

declare(strict_types=1); 
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest'; 
$favoriteColor = isset($_GET['color']) ? htmlspecialchars($_GET['color']) : 'black'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            background-color: #f0f4f7;
        }
        .result-box {
            background: white;
            padding: 1.5rem;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 400px;
        }
        .color-text {
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <div class="result-box">
        <h1>Hello: <?php echo $name; ?></h1>
        <p>Your favorite color is:
            <span class="color-text" style="color: <?php echo $favoriteColor; ?>">
                <?php echo $favoriteColor; ?>
            </span>
        </p>
    </div>

    <a href="index.php">Go back to index</a>
    

</body>
</html>
