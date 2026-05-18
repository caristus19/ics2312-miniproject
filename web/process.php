<?php
declare(strict_types=1);

/**
 * Students must implement this form-processing page.
 *
 * Required behavior:
 * 1. Accept data submitted from register.php using the POST method.
 * 2. Validate submitted fields using App\FormValidator.
 * 3. Reject invalid input and return clear feedback to the user.
 * 4. Escape all rendered output with htmlspecialchars().
 * 5. On success, display a confirmation summary without exposing raw unvalidated input.
 */

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\FormValidator;

$validator = new FormValidator();
$data = $_POST;
$errors = [];
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($submitted) {
    // TODO: Replace this placeholder handling with a full validation workflow.
    // TODO: Call $validator->validateAll($data) and branch on the returned errors.
    // TODO: Re-render user input safely when validation fails.
    // TODO: Display a clean confirmation page when validation succeeds.
    $errors = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing Stub</title>
</head>
<body>
    <h1>Form Processing</h1>

    <?php if (!$submitted): ?>
        <p>No form data has been submitted yet. Go back to <a href="register.php">register.php</a>.</p>
    <?php else: ?>
        <p>This page is a stub. Students should implement validation and confirmation logic here.</p>
        <pre><?php echo htmlspecialchars(print_r($data, true), ENT_QUOTES, 'UTF-8'); ?></pre>
    <?php endif; ?>
</body>
</html>
