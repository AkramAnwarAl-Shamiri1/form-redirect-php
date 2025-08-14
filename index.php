<?php
declare(strict_types=1);
date_default_timezone_set('Asia/Riyadh');
$currentTime = date('Y-m-d :i:s:H');
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>الوقت الحالي ونموذج الإدخال</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            background-color: #f0f4f8;
            direction: rtl;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 1.5rem 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 {
            margin-bottom: 1rem;
        }
        .time-box {
            background: #eef5fa;
            padding: 1rem;
            border-radius: 6px;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.2rem;
            color: #333;
        }
        form label {
            display: block;
            margin-bottom: 0.3rem;
            font-weight: bold;
        }
        form input[type="text"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }
        form button {
            background-color: #007bff;
            border: none;
            padding: 0.6rem 1.3rem;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }
        form button:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            margin-top: 1rem;
            color: #007bff;
            text-decoration: none;
            text-align: center;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="time-box">
      <strong><?php echo htmlspecialchars($currentTime); ?></strong>
    </div>

    <h2>أدخل بياناتك</h2>

    <form action="process.php" method="post">
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name" required>

        <label for="color">اللون :</label>
        <input type="text" id="color" name="color" required>

        <button type="submit">إرسال</button>
    </form>

 

</div>

</body>
</html>
