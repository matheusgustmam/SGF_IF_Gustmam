<?php

namespace test\dao;

use dao\UsuarioDAO;
use model\Usuario;
use PHPUnit\Framework\TestCase;

class UsuarioDaoTest extends TestCase
{
    public function testSalvar()
    {
        $usuario = new Usuario();
        $usuario->setNome("Gilson Gluco");
        $usuario->setSenha("********");
        $usuarioInserido = UsuarioDAO::salvar($usuario);
        $this->assertNotNull($usuarioInserido-getId());
    }
}