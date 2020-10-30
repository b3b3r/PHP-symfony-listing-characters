<?php

namespace App\Controller;

use App\Entity\Character;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CharactersController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('characters/index.html.twig');
    }

    /**
     * @Route("/characters", name="characters")
     */
    public function list(): Response
    {
        Character::createCharacters();
        return $this->render('characters/list.html.twig', [
            "characters" => Character::$characters
        ]);
    }

    /**
     * @Route("/characters/{name}", name="character-detail")
     */
    public function detail($name): Response
    {
        Character::createCharacters();
        $character= Character::getDetail($name);
        return $this->render('characters/detail.html.twig', [
            "character" => $character
        ]);
    }
}
