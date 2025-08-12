
<?php

declare(strict_types=1);

// This is the main page of the application.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Application</title>
</head>
<body>

    <h1>Current Server Time</h1>
    <p><?php echo date('Y-m-d H:i:s'); ?></p>

    <hr>

    <h2>Post Form</h2>
    <form action="process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="color">Favorite Color:</label>
        <input type="text" id="color" name="color" required><br><br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
