<?php

namespace App\Controller;

use App\Service\OrganisationService;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

class OrganisationController
{
    protected $organisationService;
    protected $view;
    protected $logger;
    public function __construct(OrganisationService $organisationService, Twig $view, LoggerInterface $logger)
    {
        $this->organisationService = $organisationService;
        $this->view = $view;
        $this->logger = $logger;
    }

    public function listAction(Request $request, Response $response, $args)
    {
        $organisations = $this->organisationService->fetchAll();

        $this->view->render($response, 'organisation/list.html.twig', ['organisations' => $organisations]);

        return $response;
    }
    public function viewAction(Request $request, Response $response, $args)
    {
        $id = $args['id'];
        $organisation = $this->organisationService->fetchOne($id);
        $this->view->render($response, 'organisation/view.html.twig', ['organisation' => $organisation]);

        return $response;
    }
    public function deleteAction()
    {
    }
    public function createAction()
    {
    }
}
