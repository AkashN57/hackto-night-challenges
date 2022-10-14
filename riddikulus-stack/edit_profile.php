<?php
//checking connection and session start
session_start();
include "dbcon.php";
$connection = OpenCon();
?>
<?php
$username=$_SESSION['username_logged'];
//read data to display values
$sql="SELECT first_name,last_name,headline,bio,email,mobile_number FROM users WHERE username='$username'";
$read=mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($read);
?>
<?php
//update firstname
if(isset($_POST['btn_firstname']))
{
    $new_firstname=mysqli_real_escape_string($connection,$_POST['new_fname']);
    $new_lastname=mysqli_real_escape_string($connection,$_POST['new_lname']);
    $update_query="UPDATE users SET first_name='$new_firstname',last_name='$new_lastname' WHERE username='$username' LIMIT 1";

         if ($connection->query($update_query) == true) {
             $_SESSION['edit_success_msg']="<h5>Name Successfully Changed to <b>".$new_firstname." ".$new_lastname."</b></h5>";
             $_SESSION['edit_success_msg_type']="success";
             header("Refresh:5");

         } else {
             $_SESSION['edit_success_msg']="Database Related Error........" . $connection->error;
             $_SESSION['edit_success_msg_type']="danger";
         }
}
//update headline
if(isset($_POST['btn_headline']))
{
    $new_headline=mysqli_real_escape_string($connection,$_POST['up_headline']);
    $update_query="UPDATE users SET headline='$new_headline' WHERE username='$username' LIMIT 1";

    if ($connection->query($update_query) == true) {
        $_SESSION['edit_success_msg']="<h5>Headline Successfully Updated</h5>";
        $_SESSION['edit_success_msg_type']="success";
        header("Refresh:5");

    } else {
        $_SESSION['edit_success_msg']="Database Related Error........" . $connection->error;
        $_SESSION['edit_success_msg_type']="danger";
    }
}
//update bio
if(isset($_POST['btn_bio']))
{
    $new_bio=mysqli_real_escape_string($connection,$_POST['up_bio']);
    $update_query="UPDATE users SET bio='$new_bio' WHERE username='$username' LIMIT 1";

    if ($connection->query($update_query) == true) {
        $_SESSION['edit_success_msg']="<h5>Biography Successfully Updated</h5>";
        $_SESSION['edit_success_msg_type']="success";
        header("Refresh:5");

    } else {
        $_SESSION['edit_success_msg']="Database Related Error........" . $connection->error;
        $_SESSION['edit_success_msg_type']="danger";
    }
}

//update avatar
if(isset($_POST['btn_avatar'])) {
    if ($_FILES['dpNew']['size'] != 0) {

        $new_avatar = addslashes(file_get_contents($_FILES['dpNew']['tmp_name']));

        $user_reg_sql = "UPDATE users SET avatar='$new_avatar' WHERE username='$username' LIMIT 1";
        if ($connection->query($user_reg_sql) == true) {

            $_SESSION['edit_success_msg']="<h5>Avatar Successfully Changed</h5>";
            $_SESSION['edit_success_msg_type']="success";
            header("Refresh:5");

        } else {
            $_SESSION['edit_success_msg']="Database Related Error........" . $connection->error;
            $_SESSION['edit_success_msg_type']="danger";
        }
    }
    else
    {
        $_SESSION['edit_success_msg']="Please Upload a Image before submit";
        $_SESSION['edit_success_msg_type']="warning";
    }
}
//change username
if(isset($_POST['btn_username']))
{
    $current_username=mysqli_real_escape_string($connection,$_POST['current_username']);
    $new_username=mysqli_real_escape_string($connection,$_POST['new_username']);
    //checking current password is correct or not
    $check="SELECT username FROM users WHERE username='$username' LIMIT 1";
    $result=mysqli_query($connection,$check);
    $value=mysqli_fetch_assoc($result);
    if($value['username']==$current_username)
    {

        $sql_change_username = "UPDATE users SET username='$new_username' WHERE username='$username' LIMIT 1";
        if ($connection->query($sql_change_username) == true) {
            $_SESSION['edit_success_msg']="<h5>Username Successfully Changed</h5>";
            $_SESSION['edit_success_msg_type']="success";
            $_SESSION['username_logged']=$new_username;
            header("Refresh:5");
        } else {
            $_SESSION['edit_success_msg']="Error!!!! Can't Change Password....";
            $_SESSION['edit_success_msg_type']="danger";
        }


    }
    else
    {
        $_SESSION['edit_success_msg']="Current Username is invalid, Please check and try again!!!";
        $_SESSION['edit_success_msg_type']="danger";
    }


}




//change password
if(isset($_POST['btn_password']))
{
    $current_password=mysqli_real_escape_string($connection,$_POST['current_pword']);
    $new_password=mysqli_real_escape_string($connection,$_POST['new_pword']);
    $confirm_password=mysqli_real_escape_string($connection,$_POST['confirm_pword']);
    //checking current password is correct or not
    $enc_curr=sha1($current_password);
    $check="SELECT password FROM users WHERE username='$username' LIMIT 1";
    $result=mysqli_query($connection,$check);
    $value=mysqli_fetch_assoc($result);
    if($value['password']==$enc_curr)
    {

        $enc_pw=sha1($new_password);
        $sql_change_password = "UPDATE users SET password='$enc_pw' WHERE username='$username' LIMIT 1";
        if ($connection->query($sql_change_password) == true) {
            $_SESSION['edit_success_msg']="<h5>Password Successfully Changed</h5>";
            $_SESSION['edit_success_msg_type']="success";
            header("Refresh:5");
        } else {
            $_SESSION['edit_success_msg']="Error!!!! Can't Change Password....";
            $_SESSION['edit_success_msg_type']="danger";
        }


    }
    else
    {
        $_SESSION['edit_success_msg']="Current Password is invalid, Please check and try again!!!";
        $_SESSION['edit_success_msg_type']="warning";
    }


}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="profi.css">
    <link rel="stylesheet" type="text/css" href="bootstrap1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script lang="JavaScript" type="text/javascript" src="edit_prof.js"></script>
    <title>Edit Profile</title>
    <style>
        h2
        {
            font-weight: bold;
        }
    </style>

</head>
<body>
<div class="prof-box">
    <a href="profile.php"><button id="icon_btn"><i class="fa fa-arrow-circle-left" id="icon"></i></button></a>

<div style=" background-color:transparent; height: 550px; overflow: auto;">
    <?php if(isset( $_SESSION['edit_success_msg'])): ?>
        <div class="alert alert-<?= $_SESSION['edit_success_msg_type']?>">
            <?php
            echo  $_SESSION['edit_success_msg'];
            unset( $_SESSION['edit_success_msg']);
            unset( $_SESSION['edit_success_msg_type']);
            ?>
        </div>
    <?php endif; ?>

    <!--content start-->
    <center>
        <h2>Change First Name & Last Name</h2>
        <br>
        <form name="user_lastname" method="post" action="edit_profile.php">
            <table>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>First Name</h5></td>
                    <td><input type="test" name="new_fname" size="30" maxlength="30" placeholder="Enter a New First Name" value="<?php echo $data['first_name'];  ?>"></td>
                </tr>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>Last Name</h5></td>
                    <td><input type="test" name="new_lname" size="30" maxlength="30" placeholder="Enter a New Last Name" value="<?php echo $data['last_name'];  ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; height: 100px;"><input class="btn btn-success" name="btn_firstname" type="submit" value="Change Now"></td>
                </tr>

            </table>

    </form>
    </center>

    <hr>
    <br>
    <center>
        <form name="bio" method="post" action="edit_profile.php">
            <h2>Update Headline</h2><br>
            <div>
                <textarea  name="up_headline" rows="1" cols="70" maxlength="50"
                           placeholder="update your Headline"><?php echo $data['headline'];  ?></textarea>
            </div>
            <table>
                <tr>
                    <td style="text-align: right; height: 100px;"><input class="btn btn-success" name="btn_headline" type="submit" value="Update Now"></td>
                </tr>
            </table>

        </form>
        <hr>
    </center>
    <br>
    <center>
        <form name="bio" method="post" action="edit_profile.php">
            <h2>Update Bio</h2><br>
            <div>
                <textarea  name="up_bio" rows="7" cols="70" maxlength="500"
                          placeholder="update your bio"><?php echo $data['bio'];  ?></textarea>
            </div>
            <table>
                <tr>
                    <td style="text-align: right; height: 100px;"><input class="btn btn-success" name="btn_bio" type="submit" value="Update Now"></td>
                </tr>
            </table>
        </form>
    </center>

    <hr>
    <center>
        <h2>Change Contact Details</h2>
        <br>
        <form name="change_email" method="post" action="edit_profile.php">
            <table>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>Email</h5></td>
                    <td><input type="email" name="new_email" size="30" maxlength="50" placeholder="Enter Your email Address" value="<?php echo $data['email'];  ?>" required></td>
                </tr>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>Mobile</h5></td>
                    <td><input type="tel" pattern="[0-9]{10}" name="new_mobile" size="30" maxlength="10" placeholder="Enter Your Mobile Number" value="<?php echo"0".$data['mobile_number'];  ?>" required></td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: center; height: 100px; "><input class="btn btn-success" name="btn_email" type="submit" value="Change Now"></td>
                </tr>
            </table>
        </form>
    </center>

    <hr>
    <center>
        <h2>Change Avatar</h2>
        <br>
        <img id="blah" class="img-responsive rounded" id="avt_preview" style="height:125px; width:125px; padding-bottom: 10px; ">

        <form name="avatar" method="post" action="edit_profile.php"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td style="width: 250px; padding-top: 10px"><h5>Select New Avatar</h5></td>
                    <td><input accept="image/*" type="file" id="imgInp" name="dpNew"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"></td>
                </tr>
                <tr>
                    <td style="text-align: right; height: 100px;"><input class="btn btn-danger" name="btn_avatar" type="submit" value="Save Changes"></td>
                    <td style="text-align: left; height: 100px; padding-left: 25px;"><button class="btn btn-dark" type="reset">Clear</button></td>
                </tr>
            </table>

        </form>
    </center>


    <hr>
    <center>
        <h2>Change Username</h2>
        <br>
        <form name="user_name" method="post" action="edit_profile.php" onsubmit="return usernameValid()">
            <table>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>Current Username</h5></td>
                    <td><input type="text" name="current_username" size="30" maxlength="30" placeholder="Enter Current Username" required></td>
                </tr>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>New Username</h5></td>
                    <td><input type="password" name="new_username" size="30" maxlength="30" placeholder="Enter New Username" required></td>
                </tr>
                <tr>
                    <td style="text-align: right; height: 100px;"><input class="btn btn-danger" name="btn_username" type="submit" value="Save Changes"></td>
                    <td style="text-align: left; height: 100px; padding-left: 25px;"><button class="btn btn-dark" type="reset">Clear</button></td>
                </tr>
            </table>
        </form>
    </center>

    <hr>
    <center>
        <h2>Change Password</h2>
        <br>
        <form name="user_pw" method="post" action="edit_profile.php" onsubmit="return userpasswordValid()">
            <table>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>Current Password</h5></td>
                    <td><input type="text" name="current_pword" size="30" maxlength="30" placeholder="Enter Current Password" required></td>
                </tr>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>New Password</h5></td>
                    <td><input type="password" name="new_pword" size="30" maxlength="30" placeholder="Enter New Password" required></td>
                </tr>
                <tr>
                    <td style="width: 200px; padding-top: 10px"> <h5>Confirm Password</h5></td>
                    <td><input type="password" name="confirm_pword" size="30" maxlength="30" placeholder="Confirm New Password" required></td>
                </tr>
                <tr>
                    <td style="text-align: right; height: 100px;"><input class="btn btn-danger" name="btn_password" type="submit" value="Save Changes"></td>
                    <td style="text-align: left; height: 100px; padding-left: 25px;"><button class="btn btn-dark" type="reset">Clear</button></td>
                </tr>

            </table>

        </form>
    </center>


</div>
    <!--content end-->

</div>


</body>
</html>