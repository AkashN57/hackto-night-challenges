<?php
//checking connection and session start
include "connection.php";
?>
<?php
//deleting session which use in registration process
if (isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}
//unset other sessions
if(isset($_SESSION['username_logged']))
{
    unset($_SESSION['username_logged']);
    //creating new session for log-out massage
    $_SESSION['logout_msg']="Logout Successful..!";
    $_SESSION['logout_type']="success";
    header("location:../Login/LogIn.php");
}
else
{
    echo "something went wrong";
}

?>
