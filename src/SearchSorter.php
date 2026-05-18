<?php

declare(strict_types=1);

namespace App;

use BadMethodCallException;

class SearchSorter
{
    /**
     * Search linearly through an array and return the index of the first matching value.
     *
     * The implementation should inspect elements one by one from left to right. If the
     * target value is found, return its zero-based index. If the target does not exist in
     * the array, return -1.
     *
     * @param array<int, int|string> $items Indexed array to search.
     * @param int|string $target Value being searched for.
     *
     * @return int Zero-based index of the target, or -1 if not found.
     */
    public function linearSearch(array $items, int|string $target): int
    {
        // TODO: Loop through the array from index 0 to the last element.
        // TODO: Compare each value to the target using a consistent equality rule.
        // TODO: Return the matching index immediately when found.
        // TODO: Return -1 after the loop if the target is not present.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Search a pre-sorted array using the binary search algorithm.
     *
     * The implementation should repeatedly inspect the middle element and reduce the
     * search range until the target is found or the range becomes empty. The input array
     * is expected to be sorted in ascending order before this method is called.
     *
     * @param array<int, int|string> $items Ascending sorted indexed array.
     * @param int|string $target Value being searched for.
     *
     * @return int Zero-based index of the target, or -1 if not found.
     */
    public function binarySearch(array $items, int|string $target): int
    {
        // TODO: Track low and high bounds for the current search range.
        // TODO: Compute the middle index and compare the middle value to the target.
        // TODO: Narrow the search to the left or right half as appropriate.
        // TODO: Return the index when the target is found, otherwise return -1.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Sort an array in ascending order using bubble sort and count loop iterations.
     *
     * The implementation should return both the sorted array and the total number of
     * comparison iterations performed. The expected return shape for this project is:
     * `['sorted' => [...], 'iterations' => 0]`.
     *
     * @param array<int, int|float|string> $items Array to sort.
     *
     * @return array{sorted: array<int, int|float|string>, iterations: int}
     */
    public function bubbleSort(array $items): array
    {
        // TODO: Compare adjacent items and swap them when they are out of order.
        // TODO: Repeat passes until the array is fully sorted.
        // TODO: Count each comparison iteration performed by the algorithm.
        // TODO: Return both the sorted array and the iteration count.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Sort an array in ascending order using selection sort and count loop iterations.
     *
     * The implementation should repeatedly find the smallest remaining element and move
     * it into its correct position. Return the result using the same structure required
     * for all sorting methods in this project.
     *
     * @param array<int, int|float|string> $items Array to sort.
     *
     * @return array{sorted: array<int, int|float|string>, iterations: int}
     */
    public function selectionSort(array $items): array
    {
        // TODO: For each position, search the unsorted portion for the minimum value.
        // TODO: Swap the minimum value into the current position when needed.
        // TODO: Count each comparison iteration.
        // TODO: Return the sorted array and total iteration count.
        throw new BadMethodCallException('Not implemented');
    }

    /**
     * Sort an array in ascending order using insertion sort and count loop iterations.
     *
     * The implementation should build a sorted portion of the array by taking one value
     * at a time and inserting it into the correct place. Return both the sorted array and
     * the total number of element comparisons made.
     *
     * @param array<int, int|float|string> $items Array to sort.
     *
     * @return array{sorted: array<int, int|float|string>, iterations: int}
     */
    public function insertionSort(array $items): array
    {
        // TODO: Start from the second element and treat earlier elements as the sorted portion.
        // TODO: Shift larger values to the right until the correct insertion point is found.
        // TODO: Count each comparison iteration made while searching for the insertion point.
        // TODO: Return the sorted array and total iteration count.
        throw new BadMethodCallException('Not implemented');
    }
}
