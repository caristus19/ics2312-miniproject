<?php

class SearchSorter {

   
    public function linearSearch(array $items, int|string $target): int {
        foreach ($items as $index => $value) {
            if ($value == $target) {
                return $index;
            }
        }
        return -1;
    }

    
    public function binarySearch(array $items, int|string $target): int {
        $low = 0;
        $high = count($items) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            if ($items[$mid] == $target) {
                return $mid;
            }
            if ($items[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return -1;
    }

    
    public function bubbleSort(array $items): array {
        $n = count($items);
        $iterations = 0;
        
        for ($i = 0; $i < $n; $i++) {
            $swapped = false;
            for ($j = 0; $j < $n - $i - 1; $j++) {
                $iterations++;
                if ($items[$j] > $items[$j + 1]) {
                    $temp = $items[$j];
                    $items[$j] = $items[$j + 1];
                    $items[$j + 1] = $temp;
                    $swapped = true;
                }
            }
            
            if (!$swapped) {
                break;
            }
        }
        return ['sorted' => $items, 'iterations' => $iterations];
    }

    
    public function selectionSort(array $items): array {
        $n = count($items);
        $iterations = 0;

        for ($i = 0; $i < $n - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                $iterations++;
                if ($items[$j] < $items[$minIndex]) {
                    $minIndex = $j;
                }
            }
            if ($minIndex !== $i) {
                $temp = $items[$i];
                $items[$i] = $items[$minIndex];
                $items[$minIndex] = $temp;
            }
        }
        return ['sorted' => $items, 'iterations' => $iterations];
    }

    
    public function insertionSort(array $items): array {
        $n = count($items);
        $iterations = 0;

        for ($i = 1; $i < $n; $i++) {
            $key = $items[$i];
            $j = $i - 1;

            while ($j >= 0) {
                $iterations++;
                if ($items[$j] > $key) {
                    $items[$j + 1] = $items[$j];
                    $j--;
                } else {
                    break;
                }
            }
            $items[$j + 1] = $key;
        }
        return ['sorted' => $items, 'iterations' => $iterations];
    }
}