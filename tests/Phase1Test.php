<?php

declare(strict_types=1);

use App\FileHandler;
use PHPUnit\Framework\TestCase;

final class Phase1Test extends TestCase
{
    private FileHandler $handler;

    protected function setUp(): void
    {
        $this->handler = new FileHandler();
    }

    public function testWriteCreatesFile(): void
    {
        $filePath = $this->createTempCsvPath();
        @unlink($filePath);

        $record = $this->makeRecord('Grace Wanjiku', 'EN271-0001-2022', '21', 'grace@example.com');

        $result = $this->handler->writeRecord($filePath, $record);

        $this->assertTrue($result);
        $this->assertFileExists($filePath);
        $this->assertGreaterThan(0, filesize($filePath));
    }

    public function testWriteAndReadRoundTrip(): void
    {
        $filePath = $this->createTempCsvPath();
        @unlink($filePath);

        $records = [
            $this->makeRecord('Grace Wanjiku', 'EN271-0001-2022', '21', 'grace@example.com'),
            $this->makeRecord('Brian Otieno', 'EN271-0002-2022', '22', 'brian@example.com'),
            $this->makeRecord('Mercy Njeri', 'EN271-0003-2022', '20', 'mercy@example.com'),
        ];

        $this->assertTrue($this->handler->writeRecord($filePath, $records[0]));
        $this->assertTrue($this->handler->appendRecord($filePath, $records[1]));
        $this->assertTrue($this->handler->appendRecord($filePath, $records[2]));

        $readBack = $this->handler->readAllRecords($filePath);

        $this->assertCount(3, $readBack);
        $this->assertSame('Grace Wanjiku', $readBack[0]['name']);
        $this->assertSame('EN271-0002-2022', $readBack[1]['reg_no']);
        $this->assertSame('mercy@example.com', $readBack[2]['email']);
    }

    public function testAppendIncreasesRecordCount(): void
    {
        $filePath = $this->createTempCsvPath();
        @unlink($filePath);

        $firstRecord = $this->makeRecord('Faith Achieng', 'EN271-0005-2022', '21', 'faith@example.com');
        $secondRecord = $this->makeRecord('Daniel Kiptoo', 'EN271-0006-2022', '24', 'daniel@example.com');

        $this->handler->writeRecord($filePath, $firstRecord);
        $before = $this->handler->readAllRecords($filePath);

        $this->handler->appendRecord($filePath, $secondRecord);
        $after = $this->handler->readAllRecords($filePath);

        $this->assertCount(1, $before);
        $this->assertCount(2, $after);
    }

    public function testReadReturnsArrayOfAssocArrays(): void
    {
        $filePath = $this->createTempCsvPath();
        @unlink($filePath);

        $this->handler->writeRecord(
            $filePath,
            $this->makeRecord('Esther Wambui', 'EN271-0007-2022', '22', 'esther@example.com')
        );
        $this->handler->appendRecord(
            $filePath,
            $this->makeRecord('James Mutiso', 'EN271-0008-2022', '20', 'james@example.com')
        );

        $records = $this->handler->readAllRecords($filePath);

        $this->assertIsArray($records);
        $this->assertIsArray($records[0]);
        $this->assertArrayHasKey('name', $records[0]);
        $this->assertArrayHasKey('reg_no', $records[0]);
        $this->assertArrayHasKey('age', $records[0]);
        $this->assertArrayHasKey('email', $records[0]);
    }

    public function testHandlesNonExistentFileGracefully(): void
    {
        $filePath = $this->createTempCsvPath();
        @unlink($filePath);

        $records = $this->handler->readAllRecords($filePath);

        $this->assertSame([], $records);
    }

    private function createTempCsvPath(): string
    {
        $path = tempnam(sys_get_temp_dir(), 'ics2312_phase1_');
        if ($path === false) {
            $this->fail('Unable to create a temporary file path.');
        }

        return $path . '.csv';
    }

    /**
     * @return array<string, string>
     */
    private function makeRecord(string $name, string $regNo, string $age, string $email): array
    {
        return [
            'name' => $name,
            'reg_no' => $regNo,
            'age' => $age,
            'email' => $email,
            'mark1' => '78',
            'mark2' => '82',
            'mark3' => '80',
            'mark4' => '75',
        ];
    }
}
