<?php

namespace App\Core;

use PDO;

Class BdManager

{
    private $dsn = "mysql:host=localhost;dbname=site_marchand";
    private $username = "root";
    private $password = "";

    public function getConnect()
    {
        $pdo = new PDO($this->dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public function netoiFormulaire($string){
        $string = htmlspecialchars(strip_tags($string));
        return $string;
    }

    public function requet ($sql, array $param = null ){
        // Je récupère une connexion à la Bdd.
        $con = $this->getConnect();
        if($param !== null){
            //si le tableau n'est pas vide j'exécute une requête préparée

            $stmt = $con->prepare($sql);
            $stmt->execute($param);
            return $stmt;
        }else{
            return $con->query($sql);
        }
    }

    public function findAll($table){
        $sql = "SELECT * FROM $table";
        $stmt = $this->requet($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function add(array $tableau, string $table){
        // Premier tableau vide pour stocker les key qui représentent les colonnes.
        $colonne = [];

        // 2ème tableau pour stocker les valeurs à insérer

        $valeurs = [];
        // 3ème tableau pour stocker les paramètres
        $params = [];

        foreach ($tableau as $key => $value ){
            $colonne [] = $key;
            $valeurs [] = ('?');
            $params [] = $this->netoiFormulaire($value);// je nettoie l'entrée du formulaire.

        }
        $string_colonne = implode(",", $colonne);
        $string_valeurs = implode(",", $valeurs);
        $sql = "INSERT INTO $table(" .  $string_colonne ." ) VALUES (" .  $string_valeurs ." )";
        return $this->requet($sql, $params);
    }

    public function delete($table, $id){
        $sql= "DELETE FROM $table WHERE id = $id ";
        $this->requet($sql);
    }

    public function find($table, $id){
       // Je nettoie le param $id reçu par le formulaire.
        $id = $this->netoiFormulaire($id);
        $sql= "SELECT * FROM $table WHERE id = $id ";

        $stmt = $this->requet($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function edit(array $tableau, $table, $id){
        //Je crée un tableau pour récupérer les noms des colonnes de la table qui sont les keysdu $_POST.

        $colonne = [];
        $param = [];

        foreach($tableau as $key => $value){
            $colonne[] = " $key = ? ";
            $param[] = $this->netoiFormulaire($value);
        }

        $string_colonne = implode("," , $colonne);
    
        $sql = "UPDATE $table SET $string_colonne WHERE id = $id";
     
        $this->requet($sql, $param);
    }
}