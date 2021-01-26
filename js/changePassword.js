function checkEmail()
{
	document.getElementById('em').innerText = localStorage.em;
}

function changePass()
{
	var scurpass = $("#Password").val();
	var scpassword = $("#NewPassword").val();
	var spassword = $("#NewConfirmPassword").val();
	var email = localStorage.em;
	$.post("php/changePass.php",{email:email,currPass:scurpass,newPass:scpassword,confPass:spassword},function(data){
		if(data == "success")
		{
			alert("Password has been changed!");
			location.replace("user.php");
		}
		else if(data == "reconnect")
		{
			alert("Please fill up all the fields!");
		}
		else if(data == "notSame")
		{
			alert("New password doesn't match to confirmation!");
			$("#NewConfirmPassword").val("");
			$("#NewPassword").val("");
		}
		else if(data == "wrongDetail")
		{
			alert("Current password doesn't match to your account!");
		}
	});
}