<?php
/**
 * Created by PhpStorm.
 * User: praveen kumar g
 * Date: 10/24/2015
 * Time: 10:31 PM
 */
    session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Votez home page</title>
    <script src="/vendors/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 JS, Bootstrap 3.3.5 CSS-->
    <script src="/vendors/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="/vendors/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/vendors/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <!-- general Joossip styling -->
    <link rel="stylesheet" type="text/css" href="/resources/css/jgStyle.css" />
    <link rel="stylesheet" type="text/css" href="/resources/css/jossstyle.css" />
</head>
<body>

          <?php
              include '/resources/navbar.php';
          ?>
          <div class = "container">
          <div class="jumbotron">
        <h2 style="color:#6495ed">Votez!</h2>
        <p>Where Citizens can cast there votes</p>
    </div>

        <div class="col-sm-4 col-sm-offset">
        <h3>Welcome to Votez</h3>
        <p>Cast your Vote!! </p>
    </div>
    <!-- The "main" is where the majority of the php is going to take place, so look here on each page if you are looking for placement -bb -->
    <div class="col-sm-offset-1 col-sm-4">
        <?php
            include '/VotezEnter.php';
        ?>
    </div>
    </div>
</body>
</html>
