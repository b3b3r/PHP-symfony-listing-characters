<?php

namespace App\Controller;

use App\Entity\Weapon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeaponsController extends AbstractController
{
    /**
     * @Route("/weapons", name="weapons")
     */
    public function weapons(): Response
    {
        Weapon::createWeapons();
        return $this->render('weapons/list.html.twig', [
            "weapons"=> Weapon::$list
        ]);
    }
    
    /**
     * @Route("/weapons/{name}", name="weapon-detail")
     */
    public function detail($name): Response
    {
        Weapon::createWeapons();
        return $this->render('weapons/detail.html.twig', [
            "weapon"=> Weapon::getDetail($name)
        ]);
    }
}
