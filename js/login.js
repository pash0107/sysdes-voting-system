function login()
{
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	
	$.post('php/login.php',{email:email, password:password}, function(data){
		if(data == "reconnect")
			alert("Can't connect to the server");
		else if(data == "Missing password")
			alert("Missing Password");
		else if(data == "Missing email")
		{
			alert("Missing email");
			document.getElementById("password").value = "";
		}
		else if(data == "Missing both")
			alert("Missing email and password");
		else if(data == "Failed")
		{
			alert("Email or password is incorrect");
			document.getElementById("password").value = "";
		}
		else
		{
			localStorage.setItem("logged", email);
			location.href = "news.php";
			history.pushState(null, null, 'news.php');
			window.addEventListener('popstate', function(event) {
			history.pushState(null, null, 'news.php');
			});
			$.post('php/details.php',{email:localStorage.logged}, function(candid){
				var split = candid.split(',');
				localStorage.setItem("em", email);
				localStorage.setItem("fn", split[0]);
				localStorage.setItem("ln", split[1]);
				localStorage.setItem("mn", split[2]);
				localStorage.setItem("sex", split[3]);
				localStorage.setItem("age", split[4]);
				localStorage.setItem("stat", split[5]);
				localStorage.setItem("prov", split[7]);
				localStorage.setItem("city", split[6]);
				localStorage.setItem("barang", split[8]);
				localStorage.setItem("dist", split[9]);
			});
		}
			
	});
}

function check()
{
	if(localStorage.logged)
	{
		location.href = "news.php";
		history.pushState(null, null, 'news.php');
		window.addEventListener('popstate', function(event) {
		history.pushState(null, null, 'news.php');
		});
	}
}
