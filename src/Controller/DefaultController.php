<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Cliente;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     * @Template("default/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $qtdAnimais = $em->getRepository(Cliente::class)->qtdAnimaisPorCliente();
        $qtdRaca = $em->getRepository(Animal::class)->qtdPorRaca();

        return [
            'qtdAnimais' => $qtdAnimais,
            'qtdRacas' => $qtdRaca
        ];
    }
}
