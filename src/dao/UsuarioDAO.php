<?php
namespace dao;

use model\Usuario;
use utils\Conexao;

class UsuarioDAO extends GenericModel
{

    public static function BuscarUsuario($nome)
    {
        try {
            $em = Conexao::getEntityManager();
            $repository = $em->getRepository(Usuario::class);
            $queryBuilder = $repository->createQueryBuilder('c');
            $queryBuilder
                ->where('c.nome LIKE :nome')
                ->setParameter('nome', "%" . $nome . "%");
            return $queryBuilder->getQuery()->getResult();

        }catch (Exception $ex){
            throw new Exception("Falha ao Buscar Usuario. ". $ex->getMessage());
        }
    }
}
