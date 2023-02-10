<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once  $path . '/init.php';


include_once ROOT . 'views/includes/header.php'; ?>
<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
    <div class="container mt-5">
        <h4>Détail de la TVA
        <a class="btn btn-primary m-3 float-end" href="<?= URL ?>src/Controller/TvaController.php?param=liste"><i class="fas fa-undo-alt"></i></a>
        </h4>
           <div class="row">

            <div class="col-6">
            <p>nom de la TVA : <?= $tva->name ?></p>
            <p>Taux de la TVA : <?= $tva->taux ?></p>

            </div>
           </div>


    </div>
   

    <?php include_once  ROOT . 'views/includes/footer.php'; ?>
</body>

</html>