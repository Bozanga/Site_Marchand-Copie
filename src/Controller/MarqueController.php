<?php

use App\Model\Repository\MarqueRepository;

$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 
include_once $path . '/src/Model/Repository/MarqueRepository.php';

$marqRepo = new MarqueRepository;
$marques = $marqRepo->findAll();
if($_GET['param']){
    $param = $_GET['param'];

}

switch($param){

    case 'liste':
        $marques = $marqRepo->findAll();
        include_once ROOT . 'views/marque/marque.php'; 
        break;

    case 'addMarque': 
        if($_POST){
            $marqRepo->add($_POST);
            header("location: MarqueController.php?param=liste");
        }

        include_once ROOT . 'views/marque/addMarque.php';
        break;   

    case 'deleteMarque':
        $id = $_GET['id'];
        $marqRepo->delete($id);
        header("location: MarqueController.php?param=liste");
        break;  
        
    case 'showMarque': 
        $id = $_GET['id'];
        $marqRepo->find($id);  
        include_once ROOT . 'views/marque/showMarque.php';

    case 'editMarque':
        $id = $_GET['id'];
        // Je récupère l'enregistrement
        $marque = $marqRepo->find($id);
        if($_POST){
            $marqRepo->edit($_POST, $id);
            header("location: MarqueController.php?param=liste");
        }

        include_once ROOT . 'views/marque/editMarque.php';
        
        break;
}

