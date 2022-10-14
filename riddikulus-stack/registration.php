
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Step 1</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body>
<div class="logbox">
    <h1>REGISTRATION</h1>
    <form method="post" name="logform" action="register_action.php" onsubmit="return validtext()">
        <table class="formtable t1" border="0">
            <tr>
                <td>
                    <p>First Name</p>
                    <input type="text" name="Fname" size="30" maxlength="20" placeholder="Enter First Name" required>
                </td>
                <td>
                    <p>Last Name</p>
                    <input type="text" name="Lname" size="30" maxlength="20" placeholder="Enter Last Name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Username</p>
                    <input type="text" name="uname" size="30" maxlength="35" placeholder="Enter Username" required>
                </td>
                <td>
                    <p>Email</p>
                    <input type="email" name="Email" size="30" maxlength="50" placeholder="Enter Your email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Password</p>
                    <input type="password" name="Pword" size="30" minlength="6" maxlength="30" placeholder="Enter a Password" required>
                </td>
                <td>
                    <p>Confirm Password</p>
                    <input type="password" name="confirmpassword" size="30" minlength="6" maxlength="30" placeholder="Re-enter Your Password" required>
            </tr>
            <tr>
                <td>
                    <p>Mobile Number</p>
                    <input type="tel" pattern="[0-9]{10}" name="mobile_nbr" size="30" maxlength="10" placeholder="Enter Your Mobile Number" required>
                </td>
                <td>
                    <p id="gender">Gender</p>
                    <span class="mf">Male</span><input type="radio" name="Gender" value="male" >
                    &nbsp;<span class="mf">Female</span><input type="radio" name="Gender" value="female">
                </td>
            </tr>
        </table>
        <!--terms and conditions-->
        <center><div class="conditions">
                <input type="checkbox" name="terms_and_conditions" id="tc" value="T&C_Accepted" required>
                <label id="lbltc" for="terms_and_conditions"> I Accept all the terms and conditions.</label>
            </div ></center>
        <table class="formtable t2" id="t2_tbl" border="0">
            <tr>
                <td id="nextbtn_colomn">

                    <input type="reset" name="clear" value="Clear">
                </td>
                <td id="clearbtn_colomn">
                    <input type="submit" name="nextstep_submit" value="Sign Up">
                </td>
            </tr>
        </table>
    </form>
</div>

<script lang="javascript" type="text/javascript" src="js/register.js"></script>

</body>

</html>