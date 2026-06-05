<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit;
}

$name = $_POST['name'] ?? 'Grace Wanjiku';
$email = $_POST['email'] ?? 'grace@example.com';
$age = $_POST['age'] ?? '21';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 40px; background: #eaf7f0; color: #163047; }
        .success-card { background: white; padding: 30px; border-radius: 14px; max-width: 500px; box-shadow: 0 8px 20px rgba(10,30,60,0.08); border-left: 6px solid #2E8B57; }
        h1 { color: #2E8B57; margin-top: 0; }
        p { font-size: 1.1rem; line-height: 1.6; margin: 8px 0; }
        strong { color: #1B4F8A; }
    </style>
</head>
<body>
    <div class="success-card">
        <h1>Registration Successful</h1>
        <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>Age:</strong> <?= htmlspecialchars($age) ?></p>
    </div>
</body>
</html>
