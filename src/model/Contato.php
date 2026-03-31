<?php

namespace model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'tb_contato')]
class Contato extends GenericModel
{

    #[ORM\Column(type: 'string')]
    private $telefone;

    #[ORM\Column(type: 'string')]
    private $email;

    #[ORM\Column(type: 'string', nullable: true)]
    private $whatsapp;

    #[ORM\ManyToOne(targetEntity: Clinte::class)]
    #[ORM\JoinColumn(name: "clinete_id")]
    private  $cliente;

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getWhatsapp()
    {
        return $this->whatsapp;
    }

    public function setWhatsapp($whatsapp)
    {
        $this->whatsapp = $whatsapp;
        return $this;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }


}