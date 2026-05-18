<?php
declare(strict_types=1);

/**
 * Students must build a registration form on this page.
 *
 * Required behavior:
 * 1. Display an HTML form that collects at least name, email, and age.
 * 2. Use the POST method and submit to process.php.
 * 3. Preserve submitted values where appropriate after validation errors.
 * 4. Show user-friendly validation feedback near the relevant fields.
 * 5. Keep presentation markup in this file and business validation logic in src/FormValidator.php.
 */

$old = [
    'name' => '',
    'email' => '',
    'age' => '',
];

$errors = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Stub</title>
</head>
<body>
    <h1>Student Registration</h1>
    <p>This page is a stub. Students should complete the form and connect it to <code>process.php</code>.</p>

    <!-- TODO: Replace this placeholder form with a complete, styled registration form. -->
    <form action="process.php" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($old['name'], ENT_QUOTES, 'UTF-8') ?>">
            <?php if (isset($errors['name'])): ?>
                <p><?= htmlspecialchars($errors['name'], ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($old['email'], ENT_QUOTES, 'UTF-8') ?>">
            <?php if (isset($errors['email'])): ?>
                <p><?= htmlspecialchars($errors['email'], ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="<?= htmlspecialchars($old['age'], ENT_QUOTES, 'UTF-8') ?>">
            <?php if (isset($errors['age'])): ?>
                <p><?= htmlspecialchars($errors['age'], ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
