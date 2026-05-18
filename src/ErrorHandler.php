<?php

declare(strict_types=1);

namespace App;

use BadMethodCallException;

class ErrorHandler
{
    /**
     * Read and return the contents of a file while handling missing or unreadable files safely.
     *
     * The implementation should check whether the file exists and is readable, then return
     * its contents as a string. If the file is missing or cannot be read, the method should
     * throw an appropriate exception with a clear message.
     *
     * @param string $filePath Absolute or relative path to the file to read.
     *
     * @return string File contents.
     */
    public function safeReadFile(string $filePath): string
    {
        // TODO: Verify that the file exists before attempting to read it.
        // TODO: Verify that the file is readable.
        // TODO: Read and return the file contents as a string.
        // TODO: Throw a clear exception when the file is missing or unreadable.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Write text content to a file while reporting unwritable destinations safely.
     *
     * The implementation should create or overwrite the target file and return the number
     * of bytes written. If the destination path cannot be written, the method should throw
     * an appropriate exception with a clear message.
     *
     * @param string $filePath Absolute or relative path to the file to write.
     * @param string $content Content to be written to the file.
     *
     * @return int Number of bytes written.
     */
    public function safeWriteFile(string $filePath, string $content): int
    {
        // TODO: Attempt to write the full string content to the target path.
        // TODO: Return the exact number of bytes written when successful.
        // TODO: Detect unwritable paths or failed writes.
        // TODO: Throw a clear exception when the write cannot be completed.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Divide two numbers safely and reject division by zero.
     *
     * The implementation should return the division result as a float. If the divisor is
     * zero, the method should throw an appropriate exception rather than allowing unsafe
     * behavior to continue.
     *
     * @param int|float $dividend Number being divided.
     * @param int|float $divisor Number to divide by.
     *
     * @return float Result of the division.
     */
    public function safeDivide(int|float $dividend, int|float $divisor): float
    {
        // TODO: Check whether the divisor is zero before performing division.
        // TODO: Throw a clear exception when division by zero is attempted.
        // TODO: Perform the division and return the result as a float.
        throw new BadMethodCallException('Not implemented');
    }
}
