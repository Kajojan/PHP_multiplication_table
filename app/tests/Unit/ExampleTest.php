<?php

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Multi\Multiplication;
use App\Models\Tab;

class ExampleTest extends TestCase
{
    public function testCreateTab()
    {
        $tab = new Multiplication();
        $this->assertInstanceOf(Multiplication::class, $tab);
    }

    public function testWrongDimensionHigh()
    {
        $tab = new Multiplication();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('wrong dimension');
        $tab->start(101);
    }


    public function testWrongDimensionLow()
    {
        $tab = new Multiplication();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('wrong dimension');
        $tab->start(0);
    }

    public function testGenerateReturnsCorrectResult()
    {
        $tab = new Multiplication();
        $result = $tab->generate(3);

        $expectedResult = [
            [1, 2, 3],
            [2, 4, 6],
            [3, 6, 9],
        ];

        $this->assertEquals($expectedResult, $result);
    }

    public function testDatabase()
    {
        $tab = new Multiplication();
        $result = $tab->start(3);

        $this->assertDatabaseHas('All_tab', ['number' => 3]);
    }
}
