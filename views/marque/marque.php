<?php


$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 

include_once ROOT . 'views/includes/header.php'; 

?>

<body>
<?php include_once ROOT . 'views/includes/navbar.php'; ?> 
    <div class="container">
        <a href="<?= URL ?>src/Controller/MarqueController.php?param=addMarque">Ajouter une marque</a>
    <?php foreach ( $marques as $marque) : ?>
    <p><?= $marque->name ?></p>

    <a href="<?= URL ?>src/Controller/MarqueController.php?param=deleteMarque&id=<?= $marque->id ?>">Supprimer</a>
    <a href="<?= URL ?>src/Controller/MarqueController.php?param=showMarque&id=<?= $marque->id ?>">Voir</a>
    <a href="<?= URL ?>src/Controller/MarqueController.php?param=editMarque&id=<?= $marque->id ?>">Modifier</a>
    <?php endforeach ?>

    </div>
    


<?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>