<?php

class FileHandler {
    
    
    public function writeRecord(string $filePath, array $record): bool {
        $directory = dirname($filePath);
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        $handle = fopen($filePath, 'w');
        if (!$handle) {
            return false;
        }

       
        $headers = array_keys($record);
        fputcsv($handle, $headers);
        
       
        $status = fputcsv($handle, array_values($record));
        fclose($handle);
        
        return $status !== false;
    }

   
    public function readAllRecords(string $filePath): array {
        if (!file_exists($filePath) || !is_readable($filePath)) {
            return [];
        }

        $handle = fopen($filePath, 'r');
        if (!$handle) {
            return [];
        }

        $headers = fgetcsv($handle);
        if (!$headers) {
            fclose($handle);
            return [];
        }

        $records = [];
        while (($row = fgetcsv($handle)) !== false) {
            if (count($row) === count($headers)) {
               
                $records[] = array_combine($headers, $row);
            }
        }
        
        fclose($handle);
        return $records;
    }

    
    public function appendRecord(string $filePath, array $record): bool {
        $isFileNewOrEmpty = !file_exists($filePath) || filesize($filePath) === 0;
        
        $handle = fopen($filePath, 'a');
        if (!$handle) {
            return false;
        }

        if ($isFileNewOrEmpty) {
            $headers = array_keys($record);
            fputcsv($handle, $headers);
        }

        $status = fputcsv($handle, array_values($record));
        fclose($handle);
        
        return $status !== false;
    }
}
