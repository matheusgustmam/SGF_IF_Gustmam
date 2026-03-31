<?php

namespace test\dao;

use dao\ClienteDao;
use DateTime;
Use model\Cliente;
use model\Contato;
use model\Endereco;
use PHPUnit\Framework\TestCase;

class ClienteDaoTest extends TestCase
{

    public function testsalvar()
    {
        $cliente = new Cliente();
        $cliente->setNome("Henrique Pivetti");
        $cliente->setData_nascmineto(new DateTime("1990-01-01"));
        $cliente->setCpf("111.111.111-11");
        $clienteInserido = ClienteDao::salvar($cliente);
        $this->assertNotNull($clienteInserido->getId());
    }

    public function testInserirEndereco(){

        $cliente = new Cliente();
        $cliente->setNome("Isabela");
        $cliente->setCpf("123.456.789-00");
        $cliente->getDataNascimento(new DateTime("2005-07-15"));

        $endereco = new Endereco();
        $endereco->setLogradouro("Rua A");
        $endereco->setNumero("123");
        $endereco->setBairro("Bairro");
        $endereco->setCidade("Palmas");

        $cliente->setEndereco($endereco);

        $clienteInserido = ClienteDao::salvar($cliente);

        $this->assertNotNull($clienteInserido->getEndereco());
    }

    public function testeListar()
    {
        $clientes = ClienteDao::listar();
        foreach ($clientes as $cliente){
            echo $cliente->getNome(). "\n";
        }

        $this->assertNotNull($clientes);
    }


}