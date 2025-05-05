<?php
require_once __DIR__ . '/controllers/EmployeController.php';
require_once __DIR__ . '/controllers/ModeTravailController.php';

$controller = new EmployeController();
$modeController = new ModeTravailController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'show':
        $controller->show($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'create_form':
        $controller->createForm();
        break;
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $controller->create([
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'poste' => $_POST['poste'],
                'email' => $_POST['email']
            ]);
        }
        break;
    case 'mode':
        if ($id) {
            $modeController->index($id);
        }
        break;
    case 'add_mode':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $modeController->create($_POST);
        }
        break;
    case 'delete_mode':
        $modeController->delete($_GET['id'], $_GET['id_mode']);
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>