<?php
namespace App\Controller;

use App\Entity\Todo;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoController extends AbstractController
{
    /**
     * @Route(path="/", name="home", methods={"GET"})
     */
    public function index()
    {
        $todos = $this->getDoctrine()->getRepository(Todo::class)->findAll();

        return $this->render('todos.html.twig', [
            'todos' => $todos
        ]);
    }

    /**
     * @Route(path="/todos", name="create_todo", methods={"POST"})
     */
    public function create(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $todo = new Todo();
        $todo->setStatus(0);
        $todo->setTask($request->request->get('task'));
        $entityManager->persist($todo);
        $entityManager->flush();
        return $this->redirectToRoute('home');
    }

    /**
     * @Route(path="/todos/new", name="new_todo", methods={"GET"})
     */
    public function new(Request $request)
    {
        return $this->render('new.html.twig');
    }
}
