<?php

namespace App\Controller;

use App\Service\UserService;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

class UserController
{
    protected $userService;
    protected $view;
    protected $logger;
    public function __construct(UserService $userService, Twig $view, LoggerInterface $logger)
    {
        $this->userService = $userService;
        $this->view = $view;
        $this->logger = $logger;
    }
    public function listAction(Request $request, Response $response, $args)
    {
        $users = $this->userService->fetchAll();

        $this->view->render($response, 'user/list.html.twig', ['users' => $users]);

        return $response;
    }
    public function viewAction(Request $request, Response $response, $args)
    {
        $id = $args['id'];
        $user = $this->userService->fetchOne($id);
        $this->view->render($response, 'user/view.html.twig', ['user' => $user]);

        return $response;
    }
    public function deleteAction()
    {
    }
    public function createAction()
    {
    }
}
