<?php

use App\Service\OrganisationService;
use App\Service\UserService;
use App\Repository\OrganisationRepository;
use App\Repository\UserRepository;
use App\Entity\Organisation;
use App\Entity\User;

// DIC configuration
$container = $app->getContainer();
// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------
// Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};
// Flash messages
$container['flash'] = function ($c) {
    return new Slim\Flash\Messages;
};
// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------
// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// Doctrine
$container['em'] = function ($c) {
    $settings = $c->get('settings');
    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
        $settings['doctrine']['meta']['entity_path'],
        $settings['doctrine']['meta']['auto_generate_proxies'],
        $settings['doctrine']['meta']['proxy_dir'],
        $settings['doctrine']['meta']['cache'],
        false
    );
    return \Doctrine\ORM\EntityManager::create($settings['doctrine']['connection'], $config);
};

$container[OrganisationService::class] = function ($c) {
    return new OrganisationService($c->get(OrganisationRepository::class));
};

$container[OrganisationRepository::class] = function ($c) {
    return $c->get('em')->getRepository(Organisation::class);
};

$container[UserService::class] = function ($c) {
    return new UserService($c->get(UserRepository::class));
};

$container[UserRepository::class] = function ($c) {
    return $c->get('em')->getRepository(User::class);
};
// -----------------------------------------------------------------------------
// Controller factories
// -----------------------------------------------------------------------------
$container[App\Controller\HomeController::class] = function ($c) {
    return new App\Controller\HomeController($c->get('view'), $c->get('logger'));
};
$container[App\Controller\OrganisationController::class] = function ($c) {
    return new App\Controller\OrganisationController($c->get(OrganisationService::class), $c->get('view'), $c->get('logger'));
};
$container[App\Controller\UserController::class] = function ($c) {
    return new App\Controller\UserController($c->get(UserService::class), $c->get('view'), $c->get('logger'));
};