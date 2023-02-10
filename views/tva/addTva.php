<?php


$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 

include_once ROOT . 'views/includes/header.php'; 

?>

<body>
<?php include_once ROOT . 'views/includes/navbar.php'; ?> 

    <div class="container">
    <form action="" method="post">
        <label for="name" class="label-control">Nom de la TVA</label>
        <input type="text" value= "" name="name" id="name" class="form-control">

        <label for="taux" class="label-control">Taux de la TVA</label>
        <input type="number" step="0.01" value= "" name="taux" id="taux" class="form-control">

        <button type ="submit" class="btn btn-success" value="Enregistrer">Ok</button>

    </form>

    </div>

<?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>