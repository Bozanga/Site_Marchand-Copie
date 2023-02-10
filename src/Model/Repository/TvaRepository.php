<?php

namespace App\Model\Repository;

$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/src/Core/BdManager.php'; 

use App\Core\BdManager;

class TvaRepository
{

private $bdmanager;

public function __construct(){
    $this->bdmanager = new BdManager();
}

public function findAll(){
    $result = $this->bdmanager->findAll('tva');
    return $result;

}

public function add($post){
    $this->bdmanager->add($post, 'tva');
}
public function delete($id){
    $this->bdmanager->delete('tva', $id);
}

public function find($id){
    return $this->bdmanager->find('tva', $id);
}

public function edit($post, $id){
    $this->bdmanager->edit($post, 'tva', $id);
}

}