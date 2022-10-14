function validtext()
{
    if((document.logform.Fname.value.length<1)&&(document.logform.Lname.value.length<1))
    {
        window.alert("Please enter your First Name and Last Name");
        return false;
    }
    else if(document.logform.Fname.value.length<1)
    {
        window.alert("Plaese Enter Your First Name");
        return false;
    }
    else if(document.logform.Lname.value.length<1)
    {
        window.alert("Please Enter your Last Name");
        return false;
    }

    if(document.logform.uname.value.length<1)
    {
        window.alert("Please Enter a Username");
        return false;
    }
    if(document.logform.uname.value.length<6)
    {
        window.alert("Username is too short (Please try a username with atleast 5 Characters");
        return false;
    }

    if (document.logform.email.value.length<1)
    {
        window.alert("Please Enter Your Email");
        return false;

    }

    if (document.logform.password.value.length<1)
    {
        window.alert("Please Enter a Password for your Account");
        return false;

    }
    if(document.logform.password.value.length<6)
    {
        window.alert("Password must have atleast 6 Characters");
        return false;

    }
    if(document.logform.cpassword.value.length<1)
    {
        window.alert("Please Confirm Your Password");
        return false;

    }
    if ((document.logform.password.value)!=(document.logform.cpassword.value))
    {
        window.alert("Passwords are not Matching please check again!!!");
        return false;

    }
    if (document.logform.contact.value.length<1)
    {
        window.alert("Please Enter Your Mobile Number");
        return false;
    }
    if ((!document.logform.gender[0].checked) && (!document.logform.gender[1].checked))
    {
        window.alert("Please Select Your Gender");
        return false;

    }

    if(!this.logform.tac.checked)
    {
        window.alert("You should agree to terms and conditions to continue");
        return false;
    }

}