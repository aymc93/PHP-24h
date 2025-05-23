<?php
// index.php

require_once 'controllers/ProductController.php';

// Récupération de la route via un paramètre GET "action" et optionnellement "id"
$action = $_GET['action'] ?? 'list';
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

$controller = new ProductController();

switch ($action) {
    case 'list':
        $controller->list();
        break;
    case 'detail':
        if ($id === null) {
            echo "Erreur : id manquant";
            exit;
        }
        $controller->detail($id);
        break;
    default:
        echo "Erreur 404 : page non trouvée";
        break;
}
