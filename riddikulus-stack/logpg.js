function validtext()
{

    if((document.logform.uname.value.length<1)&&(document.logform.pword.value.length<1))
    {
        window.alert("Please enter your Username and Password");
        return false;
    }
    else if(document.logform.uname.value.length<1)
    {
        window.alert("Username is Missing");
        return false;
    }
    else if(document.logform.pword.value.length<1)
    {
        window.alert("Password is Missing");
        return false;
    }
    if(document.logform.pword.value.length<6)
    {
        window.alert("Invalid Password (Password must contain atleast 6 characters)");
        return false;
    }


}