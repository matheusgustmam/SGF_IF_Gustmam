<?php

namespace test\model;
use model\Remedios;
use PHPUnit\Framework\testCase;

class RemediosTest extends TestCase
{
    public function testRemedios()
    {
        $remedio = new Remedios();
        $remedio->setNome("Rinosouro");
        $remedio->setValidade(new \DateTime("2027-02-02"));
        $remedio->setDataFabric(new DateTime("2026-02-02"));
        $remedio->setEmpresa("matemoCorp");
        $remedio->setUnidade("25");
        $remedio->setMiligramas("150");
        $this->assertNotNull($remedio);
    }
}