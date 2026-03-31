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


}