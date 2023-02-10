<?php

namespace App\Model\Repository;

$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/src/Core/BdManager.php'; 

use App\Core\BdManager;

class ProduitRepository
{

private $bdmanager;

public function __construct(){
    $this->bdmanager = new BdManager();
}

public function findAll(){
    $result = $this->bdmanager->findAll('produit');
    return $result;

}

public function add($post){
    $this->bdmanager->add($post, 'produit');
}
public function delete($id){
    $this->bdmanager->delete('produit', $id);
}

public function find($id){
    return $this->bdmanager->find('produit', $id);
}

public function edit($post, $id){
    $this->bdmanager->edit($post, 'produit', $id);
}

}