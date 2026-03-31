<?php

namespace test\dao;

use dao\RemediosDao;
use model\Remedios;
use PHPUnit\Framework\TestCase;

class RemediosDaoTest extends TestCase
{
    public function testSalvar()
    {
        $remedio = new Remedios();
        $remedio->setNome("Minosulite");
        $remedio->setEmpresa("Generico");
        $remedio->setDataFabric(new DateTime("2026-02-01"));
        $remedio->setMiligramas("250,00");
        $remedio->setUnidade("20");
        $remedio->setValidade(new \DateTime("2027-01-10"));
        $remedioInserido = RemediosDao::salvar($remedio);
        $this->assertNotNull($remedioInserido->getId());
    }
}