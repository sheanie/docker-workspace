<?php
// Routes
$app->get('/', App\Controller\HomeController::class .':homeAction')
    ->setName('homepage');

$app->group('/organisations', function () {
    $this->get('', App\Controller\OrganisationController::class . ':listAction')->setName('org_list');
    $this->group('/{id:[0-9]+}', function () {
        $this->get('', App\Controller\OrganisationController::class .':viewAction')->setName('org_view');
    });
});

$app->group('/users', function () {
    $this->get('', App\Controller\UserController::class . ':listAction')->setName('user_list');
    $this->group('/{id:[0-9]+}', function () {
        $this->get('', App\Controller\UserController::class .':viewAction')->setName('user_view');
    });
});