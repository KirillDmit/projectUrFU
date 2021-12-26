<?php
require_once 'core/Request.php';
require_once 'core/Response.php';
require_once 'core/Router.php';
require_once 'core/BaseController.php';

require_once 'validator/ArticleValidator.php';


require_once 'repositories/ArticleRepository.php';

require_once 'controllers/IndexController.php';


include_once 'config/routes.php';
include_once 'config/database.php';

$router = new Router($routes);
$request = Request::createFromGlobals();


$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s", $database['database_host'], $database['database_name'],  $database['charset']);
/** @var PDO $connection */
$connection = new PDO( $dsn, $database['username'], $database['password'], [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$articleRepository = new ArticleRepository($connection);


try {
    $route = $router->match($request->getPath());
} catch (\InvalidArgumentException $exception) {
    $route = [
        'controller' => 'index',
        'action' => 'notfound',
    ];
}

$controllers = [
    'index' => new IndexController($articleRepository),
];

$controller = $controllers[$route['controller']];
$actionMethod = $route['action'] . 'Action';

/** @var Response $response */
$response = $controller->$actionMethod($request);
$response->send();