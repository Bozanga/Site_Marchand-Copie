<?php

use App\Model\Repository\TvaRepository;

$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 
include_once $path . '/src/Model/Repository/TvaRepository.php'; 

$tvaRepo = new TvaRepository();

// On récupère le param dans l'URL
if($_GET['param']){
    $param = $_GET['param'];
}

switch ($param){
    case 'liste':
        // on affiche la liste des marques
        $tvas = $tvaRepo->findAll();
        include_once ROOT . "views/tva/tva.php";
        break;
    
    case 'addTva':
        // on affiche un formulaire pour ajouter
        $error = "";

        if($_POST){
            extract($_POST);

            $taux = (float) $_POST['taux'];
            if(!$_POST['name'])
            {
                $error .= "entrer un nom pour votre tva";
            }
            if(!$taux and !is_float($taux)){
                $error .= "entrer un taux décimal";
            }
            if(!$error){
                $_POST['taux'] = $_POST['taux'] / 100;
                $tvaRepo->add($_POST);
                header("location: TvaController.php?param=liste");
            }
            

        }
        include_once ROOT . "views/tva/addTva.php";
        break;

        case 'deleteTva':
            $id = $_GET['id'];
            $tvaRepo->delete($id);
            header("location: TvaController.php?param=liste");
            break;

        case 'showTva': 
        $id = $_GET['id'];
        $tva = $tvaRepo->find($id);  
        include_once ROOT . 'views/tva/showTva.php';       
    
        break;

        case 'editTva':
            $error = "";
            $id = $_GET['id'];
            // Je récupère l'enregistrement
            $tva = $tvaRepo->find($id);
            if($_POST){

                $taux = (float) $_POST['taux'];
                if(!$_POST['name'])
                {
                    $error .= "entrer un nom pour votre tva";
                }
                if(!$taux and !is_float($taux)){
                    $error .= "entrer un taux décimal";
                }
                if(!$error){
                    $_POST['taux'] = $_POST['taux'] / 100;
                    $tvaRepo->add($_POST);
                    header("location: TvaController.php?param=liste");
                }
                // Je 
                $POST['taux'] = $POST['taux'] / 100;
                $tvaRepo->edit($_POST, $id);
                header("location: TvaController.php?param=liste");
            }
    
            include_once ROOT . 'views/tva/editTva.php';
            
            break;

}