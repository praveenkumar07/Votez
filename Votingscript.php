<?php
/**
 * Created by PhpStorm.
 * User: praveen kumar g
 * Date: 10/24/2015
 * Time: 10:31 PM
 */
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>Votez landing page</title>
  <link rel="stylesheet" type="text/css" href="./resources/css/jossstyle.css" />
  <!-- jquery 2.1.4 -->
  <script src="./vendors/jquery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 JS, Bootstrap 3.3.5 CSS-->
  <script src="./vendors/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./vendors/bootstrap-3.3.5-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./resources/css/jgStyle.css">
</head>
<body>
          <?php
                session_start();
              include '/resources/navbar.php';
              try {
                  $mysqli = new mysqli("localhost", "root", "eqBZKHCd775HA2fS", "votez");
              } catch (\Exception $e) {
                  echo $e->getMessage(), PHP_EOL;
              }
// Calling stored procedure to enter values in to results table
                      $validateSQL = "CALL voter_results(?,?,@Sts)";
                      $stmt = $mysqli->prepare($validateSQL);
                      $stmt->bind_param('ii', $_SESSION['ssn'], $part_id);
                      $test = $stmt->execute();
                      $ValidateResult = $stmt->get_result();
                      $select = $mysqli->query('SELECT @Sts');
                      $userInfo = $select->fetch_assoc();
                      $temp=$userInfo['@Sts'];
// Calling stored procedure to enter values in to eceltion_results table

                      $validateSQL1 = "CALL insertinto_status (?,@result_message)";
                      $stmt = $mysqli->prepare($validateSQL1);
                      $stmt->bind_param('i', $_SESSION['ssn']);
                      $test = $stmt->execute();
                      $ValidateResult1 = $stmt->get_result();
                      $select = $mysqli->query('SELECT @result_message');
                      $userage = $select->fetch_assoc();
                      $validateOutput1 = $userage['@result_message'];

// If both table values are inserted the sucess message is displayed

                      if (($temp ="Done") && $validateOutput1=="done"){
                        echo '<div class="alert alert-warning">Thank you for Voting!</div>';
                        echo '<img src="http://blogs.overdrive.com/files/2012/11/300Vote.jpg" style="width:400px;height:400px;">';
                      }
          ?>
</body>
</html>
