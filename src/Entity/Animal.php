<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @var date
     * @ORM\Column(type="date")
     */
    private $dataNascimento;

    /**
     * @var object
     * @ORM\ManyToMany(targetEntity="App\Entity\Cliente", mappedBy="animal")
     */
    private $cliente;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Raca", inversedBy="id")
     */
    private $raca;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return date
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @param date $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return object
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param object $cliente
     * @return Animal
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }

    /**
     * @return object
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * @param object $raca
     * @return Animal
     */
    public function setRaca($raca)
    {
        $this->raca = $raca;
        return $this;
    }



}
