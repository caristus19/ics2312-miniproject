<?php

declare(strict_types=1);

use App\FormValidator;
use PHPUnit\Framework\TestCase;

final class Phase3Test extends TestCase
{
    private FormValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new FormValidator();
    }

    public function testValidName(): void
    {
        $result = $this->validator->validateName('Grace Wanjiku');

        $this->assertNull($result);
    }

    public function testNameTooShort(): void
    {
        $result = $this->validator->validateName('A');

        $this->assertIsString($result);
        $this->assertNotSame('', $result);
    }

    public function testNameContainsNumbers(): void
    {
        $result = $this->validator->validateName('Grace123');

        $this->assertIsString($result);
        $this->assertNotSame('', $result);
    }

    public function testValidEmail(): void
    {
        $result = $this->validator->validateEmail('grace.wanjiku@students.jkuat.ac.ke');

        $this->assertNull($result);
    }

    public function testInvalidEmailMissingAt(): void
    {
        $result = $this->validator->validateEmail('grace.wanjiku.students.jkuat.ac.ke');

        $this->assertIsString($result);
        $this->assertNotSame('', $result);
    }

    public function testValidAge(): void
    {
        $result = $this->validator->validateAge(18);

        $this->assertNull($result);
    }

    public function testAgeBelowMinimum(): void
    {
        $result = $this->validator->validateAge(17);

        $this->assertIsString($result);
        $this->assertNotSame('', $result);
    }

    public function testAgeAboveMaximum(): void
    {
        $result = $this->validator->validateAge(101);

        $this->assertIsString($result);
        $this->assertNotSame('', $result);
    }

    public function testValidateAllReturnsEmptyArrayOnSuccess(): void
    {
        $errors = $this->validator->validateAll([
            'name' => 'Brian Otieno',
            'email' => 'brian.otieno@students.jkuat.ac.ke',
            'age' => 22,
        ]);

        $this->assertSame([], $errors);
    }

    public function testValidateAllReturnsErrorsArray(): void
    {
        $errors = $this->validator->validateAll([
            'name' => 'B1',
            'email' => 'invalid-email',
            'age' => 12,
        ]);

        $this->assertIsArray($errors);
        $this->assertArrayHasKey('name', $errors);
        $this->assertArrayHasKey('email', $errors);
        $this->assertArrayHasKey('age', $errors);
    }
}
