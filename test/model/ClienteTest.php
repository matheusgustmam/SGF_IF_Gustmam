<?php
namespace test\model;

use model\Cliente;
use PHPunit\Framework\TestCase;

class ClienteTest extends TestCase{

    public function testCriarObjeto()
    {
        $cliente = new Cliente();
        $cliente->setNome("Eduardo Luiz Alba");
        $cliente->setCpf("123.123.123-00");
        $this->assertNotNull($cliente);
    }


}