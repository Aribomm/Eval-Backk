<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
"://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

require_once "controller/ConducteurController.php";
require_once "controller/VehiculeController.php";

$conducteurController = new ConducteurController();
$conducteurs = $conducteurController->getAllConducteurs();

$vehiculeController = new VehiculeController();
$vehicules = $vehiculeController->getAllVehicules();

if (empty($_GET['page'])) {
$conducteurController->displayConducteurs();
} else {
$url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
switch ($url[0]) {
    case 'accueil':
        $conducteurController->displayConducteurs();
        break;
    case 'conducteurs':
        if (empty($url[1])) {
            $conducteurController->displayConducteurs();
        } else if ($url[1] === "add") {
            $conducteurController->newConducteurForm();
        } else if ($url[1] === "addvalid") {
            $conducteurController->newConducteurValidation();
        } else if ($url[1] === "edit") {
            $conducteurController->editConducteurForm($url[2]);
        } else if ($url[1] === "editvalid") {
            $conducteurController->editConducteurValidation();
        } else if ($url[1] === "delete") {
            $conducteurController->deleteConducteur($url[2]);
        }
        break;
    case 'vehicules':
        if (empty($url[1])) {
            $vehiculeController->displayVehicules();
        } else if ($url[1] === "add") {
            $vehiculeController->newVehiculeForm();
        } else if ($url[1] === "addvalid") {
            $vehiculeController->newVehiculeValidation();
        } else if ($url[1] === "edit") {
            $vehiculeController->editVehiculeForm($url[2]);
        } else if ($url[1] === "editvalid") {
            $vehiculeController->editVehiculeValidation();
        } else if ($url[1] === "delete") {
            $vehiculeController->deleteVehicule($url[2]);
        }
        break;
}
}

