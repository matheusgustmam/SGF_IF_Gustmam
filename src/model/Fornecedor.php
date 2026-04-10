<?php
namespace model;
#[ORM\Entity]

class Fornecedor extends GenericModel
{
    private $nome;

    private $local;

    private $website;

    private $email;

    private $whatsap;

}