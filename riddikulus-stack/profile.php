<?php
//checking connection and session start
include "dbcon.php";
session_start();
$connection = OpenCon();
$username = $_SESSION['username_logged'];
?>
<?php
$sql="SELECT * FROM users WHERE username='$username'";
$user_result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($user_result);

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
    <title>My Profile</title>

</head>
<body>
<div class="prof-box">
    <table border="0">
        <tr>
            <td class="blocks" id="topleft">
             <a href="../home.php"><button id="icon_btn"><i class="fa fa-arrow-circle-left" id="icon"></i></button></a>
            </td>
            <td class="blocks"><?php echo "<div id='dp'>"; echo '<img alt="Profile Avatar" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'" style="height:125px; width:125px; border-radius: 50%; border: 5px solid #555;" />';  echo "</div>";?></td>
            <td class="blocks" id="topright">
                <div class="dropdown">
                    <button id="icon_btn" class="dropdown" ><i class="fa fa-gear" id="icon"></i></button>

                    <div id="options" class="dropdown-options">
                        <a href="edit_profile.php">Edit</a>
                    </div>


                </div>


            </td>
        </tr>
    </table>
    <div class="top-section">
        <h2><?php echo $row['first_name'];echo " ";echo $row['last_name'];?></h2>
        <h5><?php echo $row['username'];?></h5>
        <p><?php echo $row['email'];?></p>
        <hr>
    </div>
    <div class="info-section">
        <div id="heading">
            <h4><?php echo $row['headline'];?></h4>
        </div>
        <br>
        <div id="bio">
            <p>
                <?php echo $row['bio'];?>
            </p>
        </div>


    </div>

</div>


</body>
</html>