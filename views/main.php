<?php include_once 'config/parameters.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MOTOSJB</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="<?=url?>css/style.css" rel="stylesheet">
</head>

<body>
    <?php include_once 'views/header.php'; ?>

    <?php include_once $view; ?>
    <?php include_once 'views/footer.php'; ?>
</body>

</html>