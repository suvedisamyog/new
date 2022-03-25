function loginValidate()
{
    var email = document.login.loginemail.value;
    var password = document.login.loginpassword.value;
 
    if (email==null || email=="")
    {
      document.getElementById("one") .innerHTML ="Email is required";
      return false;
    }
    else if (password==null || password=="")
    {
      document.getElementById("two") .innerHTML ="password is required";
      return false;
    }
}