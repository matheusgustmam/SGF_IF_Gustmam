<?php

namespace dao;

use Exception;
use model\Cliente;
use utils\Conexao;

class ClienteDao extends GenericDAO
{
    protected static $modelClass = Cliente::class;

    public static function buscarNomeQueryBuilder($nome)
    {
        try {
            $em = Conexao::getEntityManager();
            $repository = $em->getRepository(Cliente::class);
            $queryBuilder = $repository->createQueryBuilder('c');
            $queryBuilder
                ->where('c.nome LIKE :nome')
                ->setParameter('nome', "%" . $nome . "%");
            return $queryBuilder->getQuery()->getResult();

        } catch (Exception $ex){
            throw new Exception("Falha ao buscar clinete pelo nome. ". $ex->getMessage());
        }
    }
}