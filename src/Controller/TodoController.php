<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoController extends AbstractController
{
    /**
     * @Route(path="/", methods={"GET"})
     */
    public function index()
    {
        return $this->render('todos.html.twig', [
            'place'=>"World :)"
        ]);
    }
}
