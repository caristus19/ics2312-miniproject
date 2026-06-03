<?php

class FormValidator {

    
    public function validateName(string $name): ?string {
        $trimmed = trim($name);
        if (strlen($trimmed) < 2) {
            return "Name must be at least 2 characters long.";
        }
        if (!preg_match("/^[A-Za-z\s'-]+$/", $trimmed)) {
            return "Name contains invalid characters.";
        }
        return null;
    }

    
    public function validateEmail(string $email): ?string {
        $trimmed = trim($email);
        if (!filter_var($trimmed, FILTER_VALIDATE_EMAIL)) {
            return "Explain that the email format is invalid.";
        }
        return null;
    }

    
    public function validateAge(int $age): ?string {
        if ($age < 18 || $age > 100) {
            return "Age must be an inclusive numeric range check between 18 and 100.";
        }
        return null;
    }

   
    public function validateAll(array $input): array {
        $errors = [];
        
        $nameError = $this->validateName($input['name'] ?? '');
        if ($nameError) $errors['name'] = $nameError;

        $emailError = $this->validateEmail($input['email'] ?? '');
        if ($emailError) $errors['email'] = $emailError;

        $ageError = $this->validateAge(isset($input['age']) ? (int)$input['age'] : 0);
        if ($ageError) $errors['age'] = $ageError;

        return $errors;
    }
}