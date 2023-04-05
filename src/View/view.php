<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/style.css">
    <script defer type="text/javascript" src="../js/hackEffect.js"></script>
    <script defer type="module" src="../js/background.js"></script>
    <script defer type="module" src="../js/index.js"></script>

    <title><?php echo $pagetitle; ?></title>
</head>
<body>

<div id="tiles"></div>

        <?php
        require __DIR__ . "/{$cheminVueBody}";
        ?>

</body>
</html>