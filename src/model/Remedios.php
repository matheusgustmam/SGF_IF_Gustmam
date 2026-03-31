<?php

namespace model;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "tb_remedios")]
class Remedios extends GenericModel
{

    #[ORM\Column(type: 'string')]
    private $nome;

    #[ORM\Column(type: 'integer')]
    private $unidade;

    #[ORM\Column(type: 'decimal', precision: 2)]
    private $miligramas;

    #[ORM\Column(type: 'date')]
    private $dataFabric;

    #[ORM\Column(type: 'date')]
    private $validade;

    #[ORM\Column(type: 'string')]
    private $empresa;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getUnidade()
    {
        return $this->unidade;
    }

    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;
        return $this;
    }

    public function getMiligramas()
    {
        return $this->miligramas;
    }

    public function setMiligramas($miligramas)
    {
        $this->miligramas = $miligramas;
        return $this;
    }

    public function getDataFabric()
    {
        return $this->dataFabric;
    }

    public function setDataFabric($dataFabric)
    {
        $this->dataFabric = $dataFabric;
        return $this;
    }

    public function getValidade()
    {
        return $this->validade;
    }

    public function setValidade($validade)
    {
        $this->validade = $validade;
        return $this;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
        return $this;
    }


}