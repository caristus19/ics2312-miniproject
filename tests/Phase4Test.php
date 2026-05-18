<?php

declare(strict_types=1);

use App\ErrorHandler;
use PHPUnit\Framework\TestCase;

final class Phase4Test extends TestCase
{
    private ErrorHandler $handler;

    protected function setUp(): void
    {
        $this->handler = new ErrorHandler();
    }

    public function testSafeReadFileThrowsOnMissingFile(): void
    {
        $filePath = $this->createTempPath('ics2312_missing_');
        @unlink($filePath);

        $this->expectException(\RuntimeException::class);
        $this->handler->safeReadFile($filePath);
    }

    public function testSafeReadFileReturnsStringOnSuccess(): void
    {
        $filePath = $this->createTempPath('ics2312_read_');
        file_put_contents($filePath, 'Structured Programming in PHP');

        $contents = $this->handler->safeReadFile($filePath);

        $this->assertSame('Structured Programming in PHP', $contents);
    }

    public function testSafeWriteFileCreatesFile(): void
    {
        $filePath = $this->createTempPath('ics2312_write_');
        @unlink($filePath);

        $bytes = $this->handler->safeWriteFile($filePath, 'Hello PHP');

        $this->assertFileExists($filePath);
        $this->assertSame(9, $bytes);
        $this->assertSame('Hello PHP', file_get_contents($filePath));
    }

    public function testSafeWriteFileThrowsOnUnwritablePath(): void
    {
        $directory = $this->createTempDirectory();
        $filePath = $directory . DIRECTORY_SEPARATOR . 'nested' . DIRECTORY_SEPARATOR . 'result.txt';

        $this->expectException(\RuntimeException::class);
        $this->handler->safeWriteFile($filePath, 'This should fail');
    }

    public function testSafeDivideReturnsCorrectResult(): void
    {
        $result = $this->handler->safeDivide(21, 3);

        $this->assertSame(7.0, $result);
    }

    public function testSafeDivideThrowsOnZeroDivisor(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->handler->safeDivide(21, 0);
    }

    private function createTempPath(string $prefix): string
    {
        $path = tempnam(sys_get_temp_dir(), $prefix);
        if ($path === false) {
            $this->fail('Unable to create a temporary path.');
        }

        return $path;
    }

    private function createTempDirectory(): string
    {
        $base = sys_get_temp_dir() . DIRECTORY_SEPARATOR . uniqid('ics2312_dir_', true);
        if (!mkdir($base) && !is_dir($base)) {
            $this->fail('Unable to create a temporary directory.');
        }

        return $base;
    }
}
