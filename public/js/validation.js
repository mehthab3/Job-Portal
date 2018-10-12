function validation()
{

	{
	    var email = document.getElementById('email');
	    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	    if (!filter.test(email.value))
	    {
	    	alert('Please provide a valid email address');
	    	email.focus;
	    	return false;
	    }
 	}

	{
 	if(document.candform.pass.value.length<"8")
 	{
 		alert("Password length greater than 8 digit.");
 		document.candform.password.focus();
 		return false;
 	}
	}
	{
 	if(document.candform.cpass.value.length<"8")
 	{
 		alert("Password length greater than 8 digit.");
 		document.candform.cpass.focus();
 		return false;
 	}
	}

	{
 	if((document.candform.password.value) != (document.candform.cpass.value))
 	{
 		alert("Both Password Are Not Equal");
 		document.candform.cpass.focus();
 		return false;
 	}
	}
}