<?php

namespace model;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "tb_usuarios")]
class Usuario extends GenericModel
{

    #[ORM\Column(type: 'string')]
    private $nome;

    #[ORM\Column(type: 'string')]
    private $senha;

    #[ORM\Column(type: 'string')]
    private $funcao;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    public function getFuncao()
    {
        return $this->funcao;
    }

    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
        return $this;
    }

}