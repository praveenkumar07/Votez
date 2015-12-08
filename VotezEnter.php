<?php
/**
 * Created by PhpStorm.
 * User: praveen kumar g
 * Date: 10/24/2015
 * Time: 10:31 PM
 */
if( isset($_POST['register'])) {
    require '/login.php';
    header("Location: /index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Praveen G">
    <!-- jquery 2.1.4 -->
    <script src="./vendors/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap 3.3.5 core JS, Bootstrap 3.3.5 CSS-->
    <script src="./vendors/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <!-- General Job Gossip styling -->
    <link rel="stylesheet" type="text/css" href="./resources/css/jossstyle.css" />
    <link rel="stylesheet" href="./resources/css/jgStyle.css">
    <style type="text/css">
    button[type="submit"]{
        margin-top: 30px;
    }
    .container > .alert{
        position: absolute;
        left: 30%;
        right: 30%;
        margin: 10px auto;
        text-align: center;
    }
    </style>
</head>
<body>
  <div class="container">

  <div class="col-sm-offset-1 col-sm-4">
      <form class="form-signin" method="POST" action="/resources/validateScript.php">
          <h3 class="form-signin-heading">Enter your last name and ssn</h3>
          <div class="form-group">
              <label for="inputEmail" class="sr-only">Last name</label>
              <input type="text" name="voter_id" id="voter_id" class="form-control" placeholder="voter ID" required="required" autofocus="autofocus" />
          </div>
          <div class="form-group">
              <label for="inputEmail" class="sr-only">Password</label>
              <input type="text" name="SSN" id="SSN" class="form-control" placeholder="SSN" required="required" />
          </div>

          <!-- The following submit button or whatever the php runs should also dump the user onto loginlanding.php.     -bb -->

          <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit">VOTE!!</button>
      </form>
  </div>



    </div>
</div>

</body>
</html>
