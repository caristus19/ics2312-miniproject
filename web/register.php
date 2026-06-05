<?php
require_once __DIR__ . '/../src/FormValidator.php';
$errors = [];
$old = ['name' => '', 'email' => '', 'age' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validator = new FormValidator();
    $old = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'age' => $_POST['age'] ?? ''
    ];
    $errors = $validator->validateAll($old);
    
    if (empty($errors)) {
        
        require_once __DIR__ . '/process.php';
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration Form</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 40px; background: #f2f7fb; color: #163047; }
        .form-card { background: white; padding: 30px; border-radius: 14px; max-width: 420px; box-shadow: 0 8px 20px rgba(10,30,60,0.08); border: 1px solid #d6dce5; }
        .field { margin-bottom: 18px; }
        label { display: block; margin-bottom: 6px; font-weight: bold; color: #1B4F8A; }
        input { width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #d6dce5; border-radius: 6px; }
        .error { color: #8f1d1d; font-size: 0.88rem; margin-top: 6px; font-weight: 600; }
        button { background: linear-gradient(135deg, #1B4F8A, #2E8B57); color: white; border: none; padding: 12px 20px; border-radius: 6px; cursor: pointer; width: 100%; font-size: 1rem; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2 style="margin-top:0; color:#1B4F8A;">Student Registration</h2>
        <form action="register.php" method="POST">
            <div class="field">
                <label>Name:</label>
                <input type="text" name="name" value="<?= htmlspecialchars($old['name']) ?>">
                <?php if (isset($errors['name'])): ?><div class="error"><?= htmlspecialchars($errors['name']) ?></div><?php endif; ?>
            </div>
            <div class="field">
                <label>Email:</label>
                <input type="text" name="email" value="<?= htmlspecialchars($old['email']) ?>">
                <?php if (isset($errors['email'])): ?><div class="error"><?= htmlspecialchars($errors['email']) ?></div><?php endif; ?>
            </div>
            <div class="field">
                <label>Age:</label>
                <input type="number" name="age" value="<?= htmlspecialchars($old['age']) ?>">
                <?php if (isset($errors['age'])): ?><div class="error"><?= htmlspecialchars($errors['age']) ?></div><?php endif; ?>
            </div>
            <button type="submit">Submit Registration</button>
        </form>
    </div>
</body>
</html>
