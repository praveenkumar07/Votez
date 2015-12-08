<?php
/**
 * Created by PhpStorm.
 * User: praveen kumar g
 * Date: 10/24/2015
 * Time: 10:31 PM
 */
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <?php
          if( isset($_GET["retry"]) ){
            echo $_GET["retry"];
              echo '<div class="alert alert-warning">Incorrect Info! Please try again.</div>';
          }
          if( isset($_GET["retry"]) && ($_GET["retry"]==2)){
            echo '<div class="alert alert-warning">You have already casted your vote!</div>';
          }
      ?>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-brand">
                <li style="color:#6495ed">Votez!</li>
            </ul>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo isset($_SESSION['Votez']) ? $_SESSION['user'] :  "Voter";  ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        if( isset( $_SESSION['Votez'] ) ) {
                            echo "<li><a href=\"/resources/logout.php\">Logout</a></li>";
                        }
                        else{
                            echo "<li>Login</a></li>";
                        }
                        ?>
                    </ul>
                  </li>
            </ul>
        </div>
    </div>
</nav>
