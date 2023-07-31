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
        $tab->generate(101);
    }


    public function testWrongDimensionLow()
    {
        $tab = new Multiplication();

        $this->expectException(\InvalidArgumentException::class);
        $tab->generate(0);
    }
    public function testGenerateReturnsCorrectResultFor5x5()
    {
        $tab = new Multiplication();
        $result = $tab->generate(3);

        $expectedResult = [
            [1, 2, 3],
            [2, 4, 6],
            [3, 6, 9],
            [4, 8, 12],
            [5, 10, 15],
        ];

        $this->assertEquals($expectedResult, $result);
    }

    public function testDatabase()
    {
        $tab = new Multiplication();
        $result = $tab->generate(3);

        $this->assertDatabaseHas('All_tab', ['number' => 5]);
    }
}
