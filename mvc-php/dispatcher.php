<?php

require_once "./controller/CompteController.php";
require_once "./helper/HelperClass.php";


$controller = new CompteController();

$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case 'POST':
        $req = trim(file_get_contents("php://input"));
        $data = json_decode($req, true);
        $controller->create($data["solde"]);
        break;
    case 'GET':
        $comptes = $controller->getAll();
        echo json_encode($comptes);
        break;
    case 'PUT':
        # code...
        break;
    case 'PATCH':
        # code...
        break;
}//NUL