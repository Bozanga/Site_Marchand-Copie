<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 

include_once ROOT . 'views/includes/header.php'; 
?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?> 

    <p><?= $marque->name ?></p>
        
    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>