<?php

class ErrorHandler {

    
    public function safeReadFile(string $filePath): string {
        if (!file_exists($filePath)) {
            throw new \RuntimeException("File does not exist: " . $filePath);
        }
        if (!is_readable($filePath)) {
            throw new \RuntimeException("File is not readable: " . $filePath);
        }
        
        $content = file_get_contents($filePath);
        if ($content === false) {
            throw new \RuntimeException("Failed to read file: " . $filePath);
        }
        return $content;
    }

   
    public function safeWriteFile(string $filePath, string $content): int {
        $directory = dirname($filePath);
        if (!is_dir($directory)) {
            throw new \RuntimeException("Target directory does not exist: " . $directory);
        }
        if (!is_writable($directory)) {
            throw new \RuntimeException("Target directory is not writable: " . $directory);
        }
        if (file_exists($filePath) && !is_writable($filePath)) {
            throw new \RuntimeException("File is not writable: " . $filePath);
        }

        $bytesWritten = file_put_contents($filePath, $content);
        if ($bytesWritten === false) {
            throw new \RuntimeException("Failed writing data payload to: " . $filePath);
        }
        return $bytesWritten;
    }

    
    public function safeDivide(int|float $dividend, int|float $divisor): float {
        if ($divisor == 0) {
            throw new \RuntimeException("Division by zero error rejected.");
        }
        return (float)($dividend / $divisor);
    }
}
