<?php

declare(strict_types=1);

namespace App;

use BadMethodCallException;

class FormValidator
{
    /**
     * Validate a student's name according to the project rules.
     *
     * A valid name should contain at least 2 visible characters after trimming and should
     * contain alphabetic characters, spaces, apostrophes, or hyphens only. Return null
     * when the value is valid, otherwise return a human-readable error message.
     *
     * @param string $name Raw name input from the form.
     *
     * @return string|null Null when valid, otherwise an error message.
     */
    public function validateName(string $name): ?string
    {
        // TODO: Trim surrounding whitespace before checking length.
        // TODO: Reject names shorter than 2 characters.
        // TODO: Reject names that contain digits or unsupported symbols.
        // TODO: Return null when the name satisfies all rules.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Validate an email address using server-side rules.
     *
     * The implementation should reject malformed email addresses and return a clear error
     * message. Return null for a valid email address.
     *
     * @param string $email Raw email input from the form.
     *
     * @return string|null Null when valid, otherwise an error message.
     */
    public function validateEmail(string $email): ?string
    {
        // TODO: Trim the email string before validation.
        // TODO: Use a dependable validation approach such as filter_var().
        // TODO: Return an error message when the address is malformed.
        // TODO: Return null for valid email addresses.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Validate an age value against the project range requirements.
     *
     * A valid age must be between 18 and 100 inclusive. Return null when the value is
     * accepted, otherwise return a human-readable error message.
     *
     * @param int $age Student age from the form submission.
     *
     * @return string|null Null when valid, otherwise an error message.
     */
    public function validateAge(int $age): ?string
    {
        // TODO: Check whether the age is below the minimum allowed value of 18.
        // TODO: Check whether the age is above the maximum allowed value of 100.
        // TODO: Return null if the age falls within the inclusive valid range.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Validate all required form fields and return an associative error list.
     *
     * The implementation should validate at least the `name`, `email`, and `age` fields.
     * Return an empty array when all fields are valid. When one or more fields fail
     * validation, return an associative array where the keys are field names and the
     * values are the related error messages.
     *
     * @param array<string, mixed> $input Submitted form data.
     *
     * @return array<string, string> Associative array of validation errors.
     */
    public function validateAll(array $input): array
    {
        // TODO: Extract the required fields from the input array safely.
        // TODO: Call validateName(), validateEmail(), and validateAge().
        // TODO: Add only the failing fields to the returned errors array.
        // TODO: Return an empty array when all validations pass.
        throw new BadMethodCallException('Not implemented');
    }
}
