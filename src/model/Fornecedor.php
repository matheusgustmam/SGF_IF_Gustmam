<?php
namespace model;

use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "tb_fornecedor")]
class Fornecedor extends GenericModel
{
    #[ORM\Column(type: 'string')]
    private $nome;

    #[ORM\Column(type: 'string')]
    private $local;

    #[ORM\Column(type: 'string')]
    private $website;

    #[ORM\Column(type: 'string')]
    private $email;

    #[ORM\Column(type: 'string')]
    private $whatsap;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal($local)
    {
        $this->local = $local;
        return $this;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
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
    public function getWhatsap()
    {
        return $this->whatsap;
    }

    public function setWhatsap($whatsap)
    {
        $this->whatsap = $whatsap;
        return $this;
    }

}