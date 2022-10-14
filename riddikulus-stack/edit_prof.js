function userpasswordValid()
{
    if(document.user_pw.current_pword.value.length<1 && document.user_pw.new_pword.value.length<1 && document.user_pw.confirm_pword.value.length<1)
    {
        window.alert("No input data");
        return false;
    }
    else if(document.user_pw.current_pword.value.length<1)
    {
        window.alert("Please Enter Your Current Account Password");
        return false;
    }
    else if((document.user_pw.new_pword.value.length<1 && document.user_pw.confirm_pword.value.length<1) || (document.user_pw.new_pword.value.length<1))
    {
        window.alert("Please Enter Your New Account Password");
        return false;
    }
    else if(document.user_pw.confirm_pword.value.length<1)
    {
        window.alert("Please Confirm Your New Account Password");
        return false;
    }
    else if(document.user_pw.new_pword.value.length<7)
    {
        window.alert("Password Should have at least 6 digits");
        return false;
    }
    else if((document.user_pw.new_pword.value)!=(document.user_pw.confirm_pword.value))
    {
        window.alert("Passwords are not matching");
        return false;
    }


}

function usernameValid()
{
    if(document.user_name.current_username.value.length<1 && document.user_name.new_username.value.length<1)
    {
        window.alert("No input data");
        return false;
    }
    else if(document.user_name.current_username.value.length<1)
    {
        window.alert("Please Enter the Current Username");
        return false;
    }
    else if(document.user_name.new_username.value.length<1)
    {
        window.alert("Please Enter the New Username");
        return false;
    }
    else if(document.user_name.new_username.value.length<6)
    {
        window.alert("Username is too short (Please try a username with atleast 5 Characters");
        return false;
    }




}