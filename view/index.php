<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include __DIR__ . "/utils/navbar.utils.php"; ?>

    <?php
    include __DIR__ . "/../controller/controller.php";
    include __DIR__ . "/judul/view.php";

    $projects = new View();
    ?>

    <?php $projects->find(); ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>JUDUL</th>
            <th>TEMA</th>
            <th>LINK</th>
            <th>DESAINER</th>
            <th>CLIENT</th>
        </tr>
        <?php $projects->show(); ?>
    </table>
</body>
</html>