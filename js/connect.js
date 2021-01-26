	sessionStorage.setItem("counter", 0);
	sessionStorage.setItem("counter1", 0);
	sessionStorage.removeItem("senate");
	sessionStorage.removeItem("councillor");
function remove()
{
	sessionStorage.setItem("pres","");
	sessionStorage.setItem("vice","");
	sessionStorage.setItem("senate","");
	sessionStorage.setItem("party","");
	sessionStorage.setItem("rep","");
	sessionStorage.setItem("board","");
	sessionStorage.setItem("gov","");
	sessionStorage.setItem("vgov","");
	sessionStorage.setItem("mayor","");
	sessionStorage.setItem("viceMayor","");
	sessionStorage.setItem("counter", 0);
	sessionStorage.setItem("counter1", 0);
	sessionStorage.setItem("councillor","");
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
	var end = store.split('&');
	var split= end[0].substring(0, end[0].length-1);
	split = split.split(',');
	for(var i=0; i<split.length; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='rep' onclick='repChecker(" + i + ");' id='a" + i +"' value='" + split[i] + "'><label for='a" + i + "'>" + split[i] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('repCandid').innerHTML = out;
	
}

function govCandid(){
	var out = "";
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[1].substring(0, end[1].length-1);
	split = split.split(',');
	for(var i=0; i<split.length; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='gov' onclick='govChecker(" + i + ");' id='b" + i +"' value='" + split[i] + "'><label for='b" + i + "'>" + split[i] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('govCandid').innerHTML = out;
	
}

function boardCandid(){
	var out = "";
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[3].substring(0, end[3].length-1);
	split = split.split(',');
	for(var i=0; i<split.length; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
								"<input type='checkbox' onclick='boardChecker(" + i + ");' name='board' value='" + split[i] + "' id='c" + i + "'><label for='c" + i + "'>" + split[i] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('boardCandid').innerHTML = out;
}

function viceGovCandid(){
	var out = "";
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[2].substring(0, end[2].length-1);
	split = split.split(',');
	for(var i=0; i<split.length; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='vgov' onclick='vgovChecker(" + i + ");' id='d" + i +"' value='" + split[i] + "'><label for='d" + i + "'>" + split[i] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('viceGovCandid').innerHTML = out;
}

function mayorCandid(){
	var out = "";
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[4].substring(0, end[4].length-1);
	split = split.split(',');
	for(var i=0; i<split.length; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='mayor' onclick='mayorChecker(" + i + ");' id='e" + i +"' value='" + split[i] + "'><label for='e" + i + "'>" + split[i] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('mayorCandid').innerHTML = out;
}

function viceMayorCandid(){
	var out = "";
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[5].substring(0, end[5].length-1);
	split = split.split(',');
	for(var i=0; i<split.length; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='viceMayor' onclick='viceMayorChecker(" + i + ");' id='f" + i +"' value='" + split[i] + "'><label for='f" + i + "'>" + split[i] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('viceMayorCandid').innerHTML = out;
}

function councilCandid(){
	var out = "";
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[6].substring(0, end[6].length-1);
	split = split.split(',');
	for(var i=0; i<split.length; i++)
	{
		out += "<div class='col-lg-12'>" +
						"<div class='panel panel-primary'>" +
							"<div class='panel-body'>" +
									"<input type='checkbox' name='viceMayor' onclick='councillorChecker(" + i + ");' id='g" + i +"' value='" + split[i] + "'><label for='g" + i + "'>" + split[i] + "</label>" +
							"</div>" +
						"</div>" +
					"</div>";
	}
	document.getElementById('councillorCandid').innerHTML = out;
}

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
		sessionStorage.setItem("pres","");
	}
	count();
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
		sessionStorage.setItem("vice","");
	}	
	count();
}

function senateChecker(id)
{
	var count1 = sessionStorage.counter;
	if(count1 < 12)
	{
		if($("input[id='" + id + "']").is(":checked"))
		{
			var num = 1 + parseInt(count1);
			sessionStorage.counter = num;
		}
		else
		{
			var num = parseInt(count1) - 1;
			sessionStorage.counter = num;
		}
	}
	else
	{
		if(!$("input[id='" + id + "']").is(":checked"))
		{
			var num = parseInt(count1) - 1;
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
	count();
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
		sessionStorage.setItem("party","");
	}
	count();
}

function repChecker(id){
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[0].substring(0, end[0].length-1);
	if($("input[id='a" + id + "']").is(":checked"))
	{
		for(var i=0; i<split.length; i++)
		{
			if(i == id)
			{
				$("input[id='a" + i + "']").attr("checked", true);
				sessionStorage.setItem("rep", $("input[id='a" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='a" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.setItem("rep","");
	}
	count();
}

function govChecker(id){
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[1].substring(0, end[1].length-1);
	if($("input[id='b" + id + "']").is(":checked"))
	{
		for(var i=0; i<split.length; i++)
		{
			if(i == id)
			{
				$("input[id='b" + i + "']").attr("checked", true);
				sessionStorage.setItem("gov", $("input[id='b" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='b" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.setItem("gov","");
	}
	count();
}

function vgovChecker(id){
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[2].substring(0, end[2].length-1);
	if($("input[id='d" + id + "']").is(":checked"))
	{
		for(var i=0; i<split.length; i++)
		{
			if(i == id)
			{
				$("input[id='d" + i + "']").attr("checked", true);
				sessionStorage.setItem("vgov", $("input[id='d" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='d" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.setItem("vgov","");
	}
	count();
}

function boardChecker(id){
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[3].substring(0, end[3].length-1);
	if($("input[id='c" + id + "']").is(":checked"))
	{
		for(var i=0; i<split.length; i++)
		{
			if(i == id)
			{
				$("input[id='c" + i + "']").attr("checked", true);
				sessionStorage.setItem("board", $("input[id='c" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='c" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.setItem("board","");
	}
	count();
}

function mayorChecker(id){
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[4].substring(0, end[4].length-1);
	if($("input[id='e" + id + "']").is(":checked"))
	{
		for(var i=0; i<split.length; i++)
		{
			if(i == id)
			{
				$("input[id='e" + i + "']").attr("checked", true);
				sessionStorage.setItem("mayor", $("input[id='e" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='e" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.setItem("mayor","");
	}
	count();
}

function viceMayorChecker(id){
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[5].substring(0, end[5].length-1);
	if($("input[id='f" + id + "']").is(":checked"))
	{
		for(var i=0; i<split.length; i++)
		{
			if(i == id)
			{
				$("input[id='f" + i + "']").attr("checked", true);
				sessionStorage.setItem("viceMayor", $("input[id='f" + i + "']").attr("value"));
			}
			else
			{
				$("input[id='f" + i + "']").attr("checked", false);
			}
		}
	}
	else
	{
		sessionStorage.setItem("viceMayor","");
	}
	count();
}

function councillorChecker(id)
{
	var store= localStorage.candid;
	var end = store.split('&');
	var split= end[6].substring(0, end[6].length-1);
	var split= split.split(',');
	var count1= sessionStorage.counter1;
	if(count1 < 10)
	{
		if($("input[id='g" + id + "']").is(":checked"))
		{
			var num = 1 + parseInt(count1);
			sessionStorage.counter1 = num;
		}
		else
		{
			var num = parseInt(count1) - 1;
			sessionStorage.counter1 = num;
		}
	}
	else
	{
		if(!$("input[id='g" + id + "']").is(":checked"))
		{
			var num = parseInt(count1) - 1;
			sessionStorage.counter1 = num;
		}
		else
		{
			$("input[id='g" + id + "']").attr("checked", false);
		}
	}
	sessionStorage.councillor = "";
	for(var i=0; i<split.length; i++)
	{
		if($("input[id='g" + i + "']").is(":checked"))
		{
			sessionStorage.councillor +=  $("input[id='g" + i + "']").attr("value") + ",";
		}
	}
	var mom = sessionStorage.councillor;
	sessionStorage.councillor = mom.substring(0, mom.length - 1);
	count();
}

function count()
{
	var out = "";
	out += "<b>President</b><br>" + sessionStorage.pres + "<br><b>Vice President</b><br>" + sessionStorage.vice + "<br><b>Senate</b>";
	var sen = sessionStorage.senate;
	var party = sessionStorage.party;
	party = party.substring(0, party.indexOf('('));
	sen = sen.split(",");
	for(var i=0; i<sen.length; i++)
	{
		out += "<br>&nbsp;&nbsp;&nbsp;" + sen[i];
	}
	out += '<br><b>Partylist</b><br>&nbsp;&nbsp;&nbsp;' + party +  "<br><b>Representative</b><br>&nbsp;&nbsp;&nbsp;" + sessionStorage.rep + "<br><b>Governor</b><br>&nbsp;&nbsp;&nbsp;" + sessionStorage.gov + 
		"<br><b>Vice Governor</b><br>&nbsp;&nbsp;&nbsp;" + sessionStorage.vgov + "<br><b>Board Member</b><br>&nbsp;&nbsp;&nbsp;" + sessionStorage.board + "<br><b>Mayor</b><br>&nbsp;&nbsp;&nbsp;" + sessionStorage.mayor + "<br><b>Vice Mayor</b><br>&nbsp;&nbsp;&nbsp;" + sessionStorage.viceMayor + 
		"<br><b>Councillor</b>";
	var cou = sessionStorage.councillor;
	cou = cou.split(",");
	for(var i=0; i<cou.length; i++)
	{
		out += "<br>&nbsp;&nbsp;&nbsp;" + cou[i];
	}
	document.getElementById('votedCandid').innerHTML = out;
	
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
	var mayor = sessionStorage.mayor;
	var viceMayor = sessionStorage.viceMayor;
	var board = sessionStorage.board;
	var councillor = sessionStorage.councillor;
	$.post('php/upload.php',{pres:pres,vice:vice,sen:sen,board:board,mayor:mayor,viceMayor:viceMayor,councillor:councillor,party:party,rep:rep,gov:gov,vgov:vgov,email:localStorage.logged}, function(candid){
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