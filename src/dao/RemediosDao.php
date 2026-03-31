<?php
namespace dao;

use Exception;
use model\Remedios;
use utils\Conexao;

class RemediosDao extends GenericModel
{
    public static function buscarNomeRemedio($nome)
    {
        try {
           $em = Conexao::getEntityManager();
           $repository = $em->getRepository(Remedios::class);
           $queryBuilder = $repository->createQueryBuilder('c');
           $queryBuilder
               ->where('c.nome LIKE :nome')
               ->setParameter('nome', "%" . $nome . "%");
           return $queryBuilder->getQuery()->getResult();

        }catch (Exception $ex){
            throw new Exception("Falha ao buscar o remdio. ". $ex->getMessage());
        }

    }
}