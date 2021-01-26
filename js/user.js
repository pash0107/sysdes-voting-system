function logout()
{
	localStorage.removeItem("logged");
	localStorage.removeItem("candid");
	localStorage.removeItem("em");
	localStorage.removeItem("fn");
	localStorage.removeItem("ln");
	localStorage.removeItem("mn");
	localStorage.removeItem("sex");
	localStorage.removeItem("age");
	localStorage.removeItem("stat");
	localStorage.removeItem("prov");
	localStorage.removeItem("city");
	localStorage.removeItem("barang");
	localStorage.removeItem("dist");
	history.pushState(null, null, 'index.php');
	window.addEventListener('popstate', function(event) {
	history.pushState(null, null, 'index.php');
		});
}

function checker()
{
	$.post('php/vote.php',{email:localStorage.logged}, function(candid){
		if(candid == "Success")
		{
			location.href = "presvote.php";
		}
		else
		{
			alert("You are already voted! Try again for the next survey.");
		}
	});
}

function fill()
{
	document.getElementById("em").innerHTML = localStorage.em;
	document.getElementById("fn").innerHTML = localStorage.fn;
	document.getElementById("ln").innerHTML = localStorage.ln;
	document.getElementById("mn").innerHTML = localStorage.mn;
	document.getElementById("sex").innerHTML = localStorage.sex;
	document.getElementById("age").innerHTML = localStorage.age;
	document.getElementById("stat").innerHTML = localStorage.stat;
	document.getElementById("prov").innerHTML = localStorage.prov;
	document.getElementById("city").innerHTML = localStorage.city;
	document.getElementById("barang").innerHTML = localStorage.barang;
}

function candidato()
{
	$.post('php/candidates.php',{email:localStorage.em, district:localStorage.dist}, function(candid1){
		candid1 = candid1.replace('?', 'ñ');
		localStorage.setItem("candid", candid1);
	});
}
