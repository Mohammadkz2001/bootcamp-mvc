<?php

use controllers\TaskController;

require_once __DIR__ . '/controllers/TaskController.php';

$controller = new TaskController();

if ($_SERVER['REQUEST_URI'] === '/index' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->index();
} elseif ($_SERVER['REQUEST_URI'] === '/store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->store();
} elseif (strpos($_SERVER['REQUEST_URI'], '/delete') === 0 && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->delete();
} else {
    http_response_code(404);
    echo '404 Not Found';
}
