<?php

namespace model;

use Doctrine\ORM\Mapping as ORM;
use Endereco;

#[ORM\Entity]
#[ORM\Table(name: 'tb_cliente')]
class Cliente extends GenericModel
{

    #[ORM\Column(type: 'string', nullable: false)]
    private $nome;

    #[ORM\Column(type: 'string')]
    private $cpf;

    #[ORM\Column(type: 'date')]
    private $dataNascimento;

    #[ORM\OneToOne(targetEntity: Endereco::class,cascade:['all'], orphanRemoval:true, fetch: 'EAGER')]
    #[ORM\joinColumn(name: 'endereco_id')]
    private  $endereco;

    #[ORM\OneToMany(mappedBy: "cliente", targetEntity:Contato::class, fetch: 'LAZY', orphanRemoval: true, cascade:['all'],)]
    private $contatos;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getContatos()
    {
        return $this->contatos;
    }

    public function setContatos($contatos)
    {
        $this->contatos = $contatos;
        return $this;
    }


}