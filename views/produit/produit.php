<?php


$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 

include_once ROOT . 'views/includes/header.php'; 

?>

<body>
<?php include_once ROOT . 'views/includes/navbar.php'; ?> 
    <div class="container">
        <h4 class="text-center mx-2 mt-2">Liste des Produits</h4>
        <a href="<?= URL ?>src/Controller/ProduitController.php?param=addProduit">Ajouter des Produits</a>
        <table class="table border">

        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Ref</th>
                <th scope="col">Prix Unitaire</th>
                <th scope="col">Quantité</th>
                <th scope="col">Marque</th>
                <th scope="col">Image</th>

                <th scope="col">Action</th>

            </tr>
        </thead>

    <?php foreach ( $produits as $produit) : ?>
    <p><?= $produit->id ?></p>   
    <p><?= $produit->name ?></p>
    <p><?= $produit->ref ?></p>
        
    
    <a href="<?= URL ?>src/Controller/ProduitController.php?param=showProduit&id=<?= $produit->id ?>">Voir</a>
    <br>
    <a href="<?= URL ?>src/Controller/ProduitController.php?param=editProduit&id=<?= $produit->id ?>">Modifier</a>
    <br>
    <a href="<?= URL ?>src/Controller/ProduitController.php?param=deleteProduit&id=<?= $produit->id ?>">Supprimer</a>
    <?php endforeach ?>

    </div>
    


<?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>