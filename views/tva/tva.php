<?php


$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 

include_once ROOT . 'views/includes/header.php'; 

?>

<body>
<?php include_once ROOT . 'views/includes/navbar.php'; ?> 
    <div class="container">
        <a href="<?= URL ?>src/Controller/TvaController.php?param=addTva">Ajouter une TVA</a>
    <?php foreach ( $tvas as $tva) : ?>
    <p><?= $tva->name ?></p>
    <p><?= $tva->taux ?></p>

    <a href="<?= URL ?>src/Controller/TvaController.php?param=deleteTva&id=<?= $tva->id ?>">Supprimer</a>
    <a href="<?= URL ?>src/Controller/TvaController.php?param=showTva&id=<?= $tva->id ?>">Voir</a>
    <a href="<?= URL ?>src/Controller/TvaController.php?param=editTva&id=<?= $tva->id ?>">Modifier</a>
    <?php endforeach ?>

    </div>
    


<?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>