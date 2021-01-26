	sessionStorage.setItem("counter", 0);
	sessionStorage.setItem("senate", "");

function remove()
{
	sessionStorage.removeItem("pres");
	sessionStorage.removeItem("vice");
	sessionStorage.removeItem("party");
	sessionStorage.removeItem("rep");
	sessionStorage.removeItem("gov");
	sessionStorage.removeItem("vgov");
}

function presCandid(arr){
	var out = "";
	for(var i=0; i<arr.length; i++)
	{
		out += "<div class='col-lg-4'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
							"<center>" +
								"<img src='" + arr[i].img +"' class='img-thumbnail'>" +
							"</center>" +
							"</div>" +
							"<div class='panel-footer'>" +
								"<input type='checkbox' class='checkbox-primary' name='president' onclick='presChecker(" + arr[i].id + ");' id='" + arr[i].id +"' value='" + arr[i].candid + "'><label for='" + arr[i].id + "'>" + arr[i].candid + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('presCandid').innerHTML = out;
}
$("input[type='checkbox']").checkboxradio('disable');

function viceCandid(arr){
	var out = "";
	for(var i=0; i<arr.length; i++)
	{
		out += "<div class='col-lg-4'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
							"<center>" +
								"<img src='" + arr[i].img +"' class='img-thumbnail'>" +
							"</center>" +
							"</div>" +
							"<div class='panel-footer'>" +
								"<input type='checkbox' name='vice' onclick='viceChecker(" + arr[i].id + ");' id='" + arr[i].id +"' value='" + arr[i].candid + "'><label for='" + arr[i].id + "'>" + arr[i].candid + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('viceCandid').innerHTML = out;
}

function senateCandid(arr){
	var out = "";
	for(var i=0; i<arr.length; i++)
	{
		out += "<div class='col-lg-4'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
							"<center>" +
								"<img src='" + arr[i].img +"' class='img-thumbnail'>" +
							"</center>" +
							"</div>" +
							"<div class='panel-footer'>" +
								"<input type='checkbox' name='senate' onclick='senateChecker(" + arr[i].id + ");' id='" + arr[i].id +"' value='" + arr[i].candid + "'><label for='" + arr[i].id + "'>" + arr[i].candid + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('senateCandid').innerHTML = out;
}

function partyCandid(arr){
	var out = "";
	for(var i=0; i<arr.length; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='party' onclick='partyChecker(" + arr[i].id + ");' id='" + arr[i].id +"' value='" + arr[i].candid + "'><label for='" + arr[i].id + "'>" + arr[i].candid + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('partyCandid').innerHTML = out;
}

function repCandid(){
	var out = "";
	var store= localStorage.candid;
	var split= store.split(",");
	for(var i=177; i<split.length+177; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='rep' onclick='repChecker(" + i + ");' id='" + i +"' value='" + split[i-177] + "'><label for='" + i + "'>" + split[i-177] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('repCandid').innerHTML = out;
	
}

/*function govCandid(){
	var out = "";
	var store= localStorage.candid;
	var split= store.split(",");
	for(var i=177; i<split.length+177; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='gov' onclick='govChecker(" + i + ");' id='" + i +"' value='" + split[i-177] + "'><label for='" + i + "'>" + split[i-177] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('govCandid').innerHTML = out;
	
}*/

function boardCandid(){
	var store = localStorage.board;
	var split = store.split(',');
	var out = "";
	$('#boardCandid').text("");
	for(var i=0; i<split.length; i++)
	{
		out += '<input type="checkbox" name="board" value="' + split[i] + '" id="c' + i + '"><label for="c' + i + '">' + split[i] + '</label>';
	}
	$('#boardCandid').append(out);
}

/*function govCandid(){
	var store = localStorage.gov;
	var split = store.split(',');
	var out = "";
	$('#govCandid').text("");
	for(var i=0; i<split.length; i++)
	{
		out += '<input type="checkbox" name="gov" value="' + split[i] + '" id="a' + i + '"><label for="a' + i + '">' + split[i] + '</label>';
	}
	$('#govCandid').append(out);
}*/

/*function viceGovCandid(){
	var out = "";
	var store= localStorage.candid;
	var split= store.split(",");
	for(var i=177; i<split.length+177; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='vgov' onclick='vgovChecker(" + i + ");' id='" + i +"' value='" + split[i-177] + "'><label for='" + i + "'>" + split[i-177] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('viceGovCandid').innerHTML = out;
}*/

function mayorCandid(){
	var store = localStorage.mayor;
	var split = store.split(',');
	var out = "";
	$('#mayorCandid').text("");
	for(var i=0; i<split.length; i++)
	{
		out += '<input type="checkbox" name="mayor" value="' + split[i] + '" id="e' + i + '"><label for="e' + i + '">' + split[i] + '</label>';
	}
	$('#mayorCandid').append(out);
}

function viceMayorCandid(){
	var store = localStorage.viceMayor;
	var split = store.split(',');
	var out = "";
	$('#viceMayorCandid').text("");
	for(var i=0; i<split.length; i++)
	{
		out += '<input type="checkbox" name="viceMayor" value="' + split[i] + '" id="f' + i + '"><label for="f' + i + '">' + split[i] + '</label>';
	}
	$('#viceMayorCandid').append(out);
}
/*
function councilCandid(){
	var store = localStorage.council;
	var split = store.split(',');
	var out = "";
	$('#councilCandid').text("");
	for(var i=0; i<split.length; i++)
	{
		out += '<input type="checkbox" name="council" value="' + split[i] + '" id="g' + i + '"><label for="g' + i + '">' + split[i] + '</label>';
	}
	$('#councilCandid').append(out);
}
*/

function presChecker(id)
{
	if($("input[id='" + id + "']").is(":checked"))
	{
		for(var i=1; i<6; i++)
		{
			if(i == id)
			{
				$("input[id='" + i + "']").attr("checked", true);
				sessionStorage.setItem("pres", $("input[id='" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.removeItem("pres");
	}
	
}

function viceChecker(id)
{
	if($("input[id='" + id + "']").is(":checked"))
	{
		for(var i=6; i<12; i++)
		{
			if(i == id)
			{
				$("input[id='" + i + "']").attr("checked", true);
				sessionStorage.setItem("vice", $("input[id='" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.removeItem("vice");
	}	
}

function senateChecker(id)
{
	var count = sessionStorage.counter;
	if(count < 12)
	{
		if($("input[id='" + id + "']").is(":checked"))
		{
			var num = 1 + parseInt(count);
			sessionStorage.counter = num;
		}
		else
		{
			var num = parseInt(count) - 1;
			sessionStorage.counter = num;
		}
	}
	else
	{
		if(!$("input[id='" + id + "']").is(":checked"))
		{
			var num = parseInt(count) - 1;
			sessionStorage.counter = num;
		}
		else
		{
			$("input[id='" + id + "']").attr("checked", false);
		}
	}
	sessionStorage.senate = "";
	for(var i=12; i<62; i++)
	{
		if($("input[id='" + i + "']").is(":checked"))
		{
			sessionStorage.senate +=  $("input[id='" + i + "']").attr("value") + ",";
		}
	}
	var mom = sessionStorage.senate;
	sessionStorage.senate = mom.substring(0, mom.length - 1);
}
function partyChecker(id)
{
	if($("input[id='" + id + "']").is(":checked"))
	{
		for(var i=62; i<177; i++)
		{
			if(i == id)
			{
				$("input[id='" + i + "']").attr("checked", true);
				sessionStorage.setItem("party", $("input[id='" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.removeItem("party");
	}
}

function repChecker(id){
	var store= localStorage.candid;
	var split= store.split(",");
	if($("input[id='" + id + "']").is(":checked"))
	{
		for(var i=177; i<split.length+177; i++)
		{
			if(i == id)
			{
				$("input[id='" + i + "']").attr("checked", true);
				sessionStorage.setItem("rep", $("input[id='" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.removeItem("rep");
	}
}

function govChecker(id){
	var store= localStorage.candid;
	var split= store.split(",");
	if($("input[id='" + id + "']").is(":checked"))
	{
		for(var i=177; i<split.length+177; i++)
		{
			if(i == id)
			{
				$("input[id='" + i + "']").attr("checked", true);
				sessionStorage.setItem("gov", $("input[id='" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.removeItem("gov");
	}
}

function viceGovChecker(id){
	var store= localStorage.candid;
	var split= store.split(",");
	if($("input[id='" + id + "']").is(":checked"))
	{
		for(var i=177; i<split.length+177; i++)
		{
			if(i == id)
			{
				$("input[id='" + i + "']").attr("checked", true);
				sessionStorage.setItem("vgov", $("input[id='" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.removeItem("vgov");
	}
}
function submit()
{
	var pres = sessionStorage.pres;
	var vice = sessionStorage.vice;
	var sen = sessionStorage.senate;
	var party = sessionStorage.party;
	var rep = sessionStorage.rep;
	var gov = sessionStorage.gov;
	var vgov = sessionStorage.vgov;
	$.post('php/upload.php',{pres:pres,vice:vice,sen:sen,party:party,rep:rep,gov:gov,vgov:vgov,email:localStorage.logged}, function(candid){
		if(candid == "Success")
		{
			location.href = "user.php";
			history.pushState(null, null, 'user.php');
			window.addEventListener('popstate', function(event) {
			history.pushState(null, null, 'user.php');
			});
			alert("Your vote has been counted!");
		}
		else if(candid == "Missing")
		{
			alert("Please fill up all the fields!");
		}
	});
}