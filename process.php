<?php

declare(strict_types=1);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? 'Guest';
    $color = $_POST['color'] ?? 'black';

    header('Location: result.php?name=' . urlencode($name) . '&color=' . urlencode($color), true, 303);
    exit();
}

header('Location: index.php');
exit();
