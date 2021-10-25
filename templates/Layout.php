<?php

require_once $headerPath;
//require "View\Components\Footer.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1 user-scalable=yes"
          name="viewport"
    >

    <!-- CSS only -->

    <link crossorigin="anonymous"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
          rel="stylesheet">
    <link rel="stylesheet" href="templates/styles/CSS/global.css">

    <!-- JavaScript Bundle with Popper -->

    <script src="https://kit.fontawesome.com/3f7b822457.js" crossorigin="anonymous"></script>
    <title>Intranet GUI-1</title>
</head>
<body>
    <!-- HEADER -->
    <?= $header; ?>
    <!--  /HEADER -->

    <!-- Page Content -->

    <main class="container-fluid">
        <?= $contenu; ?>
    </main>
    <!-- /.container -->
    <!-- FOOTER
     /FOOTER -->

</body>
</html>
