<?php

declare(strict_types=1);

use App\SearchSorter;
use PHPUnit\Framework\TestCase;

final class Phase2Test extends TestCase
{
    private SearchSorter $searchSorter;

    protected function setUp(): void
    {
        $this->searchSorter = new SearchSorter();
    }

    public function testLinearSearchFound(): void
    {
        $items = [12, 5, 8, 19, 3];

        $index = $this->searchSorter->linearSearch($items, 19);

        $this->assertSame(3, $index);
    }

    public function testLinearSearchNotFound(): void
    {
        $items = [12, 5, 8, 19, 3];

        $index = $this->searchSorter->linearSearch($items, 99);

        $this->assertSame(-1, $index);
    }

    public function testBinarySearchFound(): void
    {
        $items = [3, 5, 8, 12, 19, 27];

        $index = $this->searchSorter->binarySearch($items, 12);

        $this->assertSame(3, $index);
    }

    public function testBinarySearchNotFound(): void
    {
        $items = [3, 5, 8, 12, 19, 27];

        $index = $this->searchSorter->binarySearch($items, 100);

        $this->assertSame(-1, $index);
    }

    public function testBubbleSortAscending(): void
    {
        $result = $this->searchSorter->bubbleSort([5, 3, 1, 4, 2]);

        $this->assertSame([1, 2, 3, 4, 5], $result['sorted']);
        $this->assertIsInt($result['iterations']);
        $this->assertGreaterThan(0, $result['iterations']);
    }

    public function testSelectionSortAscending(): void
    {
        $result = $this->searchSorter->selectionSort([9, 7, 5, 3, 1]);

        $this->assertSame([1, 3, 5, 7, 9], $result['sorted']);
        $this->assertIsInt($result['iterations']);
        $this->assertGreaterThan(0, $result['iterations']);
    }

    public function testInsertionSortAscending(): void
    {
        $result = $this->searchSorter->insertionSort([10, 2, 8, 6, 4]);

        $this->assertSame([2, 4, 6, 8, 10], $result['sorted']);
        $this->assertIsInt($result['iterations']);
        $this->assertGreaterThan(0, $result['iterations']);
    }

    public function testSortCountIterations(): void
    {
        $nearlySorted = [1, 2, 3, 5, 4, 6, 7, 8];

        $bubble = $this->searchSorter->bubbleSort($nearlySorted);
        $insertion = $this->searchSorter->insertionSort($nearlySorted);

        $this->assertGreaterThan($insertion['iterations'], $bubble['iterations']);
        $this->assertSame([1, 2, 3, 4, 5, 6, 7, 8], $bubble['sorted']);
        $this->assertSame([1, 2, 3, 4, 5, 6, 7, 8], $insertion['sorted']);
    }
}
