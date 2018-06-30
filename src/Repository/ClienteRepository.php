<?php

namespace App\Repository;

use App\Entity\Cliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cliente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cliente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cliente[]    findAll()
 * @method Cliente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClienteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cliente::class);
    }

    public function qtdAnimaisPorCliente()
    {
        $sql = "SELECT COUNT(ac.animal_id) as qtd_animais, c.nome FROM animal_cliente ac
                INNER JOIN cliente c ON c.id = ac.cliente_id GROUP BY c.nome";

        return $this->getEntityManager()->getConnection()->executeQuery($sql)->fetchAll(\PDO::FETCH_OBJ);
    }
}
