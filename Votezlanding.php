<!DOCTYPE html>
<html lang="en">
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
session_start();                    //call at very begining of all pages
include './resources/navbar.php';
$mysqli = new mysqli("localhost", "root", "eqBZKHCd775HA2fS", "votez");
$partySQL = " SELECT * from `candidate_info`
                    ";
$partySQLQuery = $mysqli->query($partySQL);
?>
<div class = "container">
    <h1 class="page-header">Welcome to Votez!</h1>

        <h3>You've successfully logged in to Votez!</h3>
        <p>Please cast your Vote</p>
    <!--   <ol>
            <li><a href="/register.php">Change your account details?</a></li>
            <li><a href="/createCompanyPost.php">Post and rate a position/company?</a></li>
        </ol> -->
            <form method="POST" action="/Votingscript.php">
                <div class="well company-well">
                      <ul>

    <table style="width:100%">
      <tr>
          <th>              </th>
          <th>Candidate name</th>
          <th>Party Name</th>
          <th>Logo</th>
      </tr>
                        <?php
                        while( $vote = $partySQLQuery->fetch_assoc() ){
                            echo '
              <tr>
              <td>    <input type="radio"  name="radio" id="radioselect" value=',$vote['Party_ID'],' /> </td>
              <td>    ',$vote['first_name'],' </td>
              <td>    ',$vote['Party_name'],'</td>
              <td>    <img src=',$vote['Logo'],' style="width:104px;height:108px;"><td>
              <br>
              </tr>
                             ';
                        }
                        ?>
                      </table>

                    </div>
                      </ul>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary btn-block" name="post_company" id="post_company">Vote</button>
                </div>
            </form>

  </div>
</body>
</html>
