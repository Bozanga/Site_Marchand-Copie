<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once  $path . '/init.php';


include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>

    <div class="container">
        <h4 class="mt-2 text-denter">Modifier une TVA
            <a class="btn btn-primary m-3 float-end" href="<?= URL ?>src/Controller/TvaController.php?param=liste"><i class="fas fa-undo-alt"></i></a>
        </h4>
        <form action="<?= URL ?>src/Controller/TvaController.php?param=editTva&id=<?= $tva->id ?>" method="post">
            <?php if ($error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php endif ?>

            <label for="name" class="label-control">Nom de la tva</label>

            <input type="text" value="<?php if (isset($tva->name)) {echo $tva->name;} ?>" name="name" id="name" class="form-control">

            <label for="taux" class="label-control">Taux de la tva</label>

            <input type="number" step="0.01" name="taux" id="taux" class="form-control" value="<?php if (isset($tva->taux)) {echo $tva->taux ;} ?>">
                <p>exemple : pour une tva a 10 % entrez 10</p>
            <button type="submit" class="btn btn-success m-2 w-25" value="Enregistrer">Ok</button>


        </form>

    </div>

    <?php include_once  ROOT . 'views/includes/footer.php'; ?>
</body>

</html>