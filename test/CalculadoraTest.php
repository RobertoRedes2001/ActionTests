<?php
use PHPUnit\Framework\TestCase;
include './src/Calculadora.php';

final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora(4,5);
        $this->assertEquals(8, $calc->suma());
    }
}
?>