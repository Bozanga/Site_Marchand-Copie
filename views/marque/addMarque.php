<?php


$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 

include_once ROOT . 'views/includes/header.php'; 

?>

<body>
<?php include_once ROOT . 'views/includes/navbar.php'; ?> 

    <div class="container">
    <form action="" method="post">
        <label for="name" class="label-control">Nom de la Marque</label>
        <input type="text" value= "" name="name" id="name" class="form-control">

        <button type ="submit" class="btn btn-success" value="Enregistrer">Ok</button>

    </form>

    </div>

<?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>