<?php


use App\Util\Soma;
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    public function testSoma()
    {
        $soma = new Soma();

        $this->assertEquals(10,  $soma->calcula(5, 5));
    }
}
