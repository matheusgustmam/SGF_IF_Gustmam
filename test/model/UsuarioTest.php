<?php
namespace test\model;

use model\Usuario;
use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    public function testUsuario()
    {
        $usuario = new Usuario();
        $usuario->setNome("Claudio Gilberto");
        $usuario->setSenha("123456789");
        $this->assertNotNull($usuario);
    }
}