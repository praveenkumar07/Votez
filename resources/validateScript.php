<?php
/**
 * Created by PhpStorm.
 * User: praveen kumar g
 * Date: 10/24/2015
 * Time: 10:31 PM
 */
    try {
        $mysqli = new mysqli("localhost", "root", "eqBZKHCd775HA2fS", "votez");
    } catch (\Exception $e) {
        echo $e->getMessage(), PHP_EOL;
    }

    $voterid = $_POST['voter_id'];
    $SSN = $_POST['SSN'];
  //Validate User
    $validateSQL = "CALL validateuser (?,?,@reult,@name)";
    $stmt = $mysqli->prepare($validateSQL);
    $stmt->bind_param('ii', $SSN, $voterid);
    $test = $stmt->execute();
    $ValidateResult = $stmt->get_result();
    $select = $mysqli->query('SELECT @reult, @name');
    $userInfo = $select->fetch_assoc();
    $validateOutput = $userInfo['@reult'];
    $lastname = $userInfo['@name'];
// Check voting status
$validateSQL1 = "SELECT count(ssn) as result
    FROM election_status
    WHERE ssn=$SSN and vote_status='yes'";

$postcheck = $mysqli->query($validateSQL1);
$post = $postcheck->fetch_assoc();

    //login successfull
    if (($validateOutput=='true') && ($post ['result']=='0')){
        session_start();                    //call at very begining of all pages
        $_SESSION['Votez'] = "1";   //check this session varible for login
        $_SESSION['user'] = $lastname;      //session variable holds username
        $_SESSION['ssn']=$SSN;              // To store SSN which will be used accross
        $stmt->close();
        header("Location: /Votezlanding.php");    //route back to home

    } else {
        header("Location: /index.php?retry=1");    //route back to login page

    }
    if ($post ['result']=='1'){

    header("Location: /index.php?retry=2");
    }

?>
