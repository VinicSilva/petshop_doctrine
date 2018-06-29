<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
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
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $telefone;

    /**
     * @var string
     * @ORM\Column(type="string", length=130)
     */
    private $email;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Endereco", inversedBy="id")
     */
    private $endereco;

    /**
     * @var object
     * @ORM\ManyToMany(targetEntity="App\Entity\Animal", inversedBy="cliente")
     * @ORM\JoinTable(name="animal_cliente")
     */
    private $animal;

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
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return object
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param object $endereco
     * @return Cliente
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return object
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * @param object $animal
     * @return Cliente
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;
        return $this;
    }


}
