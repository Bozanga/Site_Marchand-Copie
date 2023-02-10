<?php

namespace App\Model\Repository;

$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/src/Core/BdManager.php'; 

use App\Core\BdManager;

class MarqueRepository
{

private $bdmanager;

public function __construct(){
    $this->bdmanager = new BdManager();
}

public function findAll(){
    $result = $this->bdmanager->findAll('marque');
    return $result;

}

public function add($post){
    $this->bdmanager->add($post, 'marque');
}
public function delete($id){
    $this->bdmanager->delete('marque', $id);
}

public function find($id){
    return $this->bdmanager->find('marque', $id);
}

public function edit($post, $id){
    $this->bdmanager->edit($post, 'marque', $id);
}

}