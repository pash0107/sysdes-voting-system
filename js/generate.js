var senador = [];
var tempSen = [];
var tempPres = [];
var tempVice = [];
sessionStorage.setItem("Fromdate","");
sessionStorage.setItem("Todate","");
var senPictures = [];
var presPictures = [];
var vicePictures = [];
var presidente = [];
var vise = [];
var Fromdate;
var Todate;


function getTheDate()
{
	$.post('php/getTheDate.php',{}, function(candid){
		candid = candid.substring(0, candid.length-1);
		candid = candid.split(',');
		Fromdate = candid[0];
		Todate = candid[1];
		if(Fromdate == "")
		{
					document.getElementById('preslabel').style.display = "none";
					document.getElementById('presLabel').style.display = "none";
					document.getElementById('presGraph').style.display = "none";
					
					document.getElementById('vicelabel').style.display = "none";
					document.getElementById('viceLabel').style.display = "none";
					document.getElementById('viceGraph').style.display = "none";
					
					document.getElementById('senlabel').style.display = "none";
					document.getElementById('senLabel').style.display = "none";
					document.getElementById('senGraph').style.display = "none";
					document.getElementById('candidates16').style.display = "none";
					document.getElementById("noresult").style.display = "block";
		}
		generate();
	});
}

function generateReport()
{
	Fromdate = $("#datepicker").val();
	Todate = $("#datepicker1").val();
	generate();
}
function generate(){
	sessionStorage.setItem("Fromdate","");
	sessionStorage.setItem("Todate","");
	var fromDate1 = Fromdate;
	var toDate1 = Todate;
	$('#datepicker').val(fromDate1);
	$('#datepicker1').val(toDate1);
	var fromDate2 = Date.parse(fromDate1);
	var toDate2 = Date.parse(toDate1);
	if(fromDate2 != "" && toDate2 != "")
	{
		if(fromDate2 <= toDate2)
		{
			$.post('php/generate.php',{fromDate:fromDate1, toDate:toDate1}, function(candid){
				if(candid == "0&")
				{
					document.getElementById('preslabel').style.display = "none";
					document.getElementById('presLabel').style.display = "none";
					document.getElementById('presGraph').style.display = "none";
					
					document.getElementById('vicelabel').style.display = "none";
					document.getElementById('viceLabel').style.display = "none";
					document.getElementById('viceGraph').style.display = "none";
					
					document.getElementById('senlabel').style.display = "none";
					document.getElementById('senLabel').style.display = "none";
					document.getElementById('senGraph').style.display = "none";
					
					document.getElementById('candidates16').style.display = "none";
					
					document.getElementById("noresult").style.display = "block";
					alert("The server throws no result!");
				}
				else
				{
						
						sessionStorage.setItem("Fromdate",fromDate1);
						sessionStorage.setItem("Todate",toDate1);
						document.getElementById("noresult").style.display = "none";
						candid = candid.substring(0, candid.length-1);
						var position = candid.split('&');
						var resp_num = position[0];
						var pres = [0,0,0,0,0];
						var vice = [0,0,0,0,0,0];
						var tempPresVal = [0,0,0,0,0];
						var tempViceVal = [0,0,0,0,0,0];
						tempPres = [0,1,2,3,4];
						tempVice = [0,1,2,3,4,5];
						var sen = [];
						var tempSenVal = [];
						for(var i=0; i<50; i++)
						{
							sen[i] = 0;
							tempSen[i] = i;
							tempSenVal[i] = 0;
						}
						
						senate();
						presid();
						viceid();
						
						for(var i=1; i<position.length; i++)
						{
							var candidates = position[i].split(',');
							if(candidates[0] == "President")
							{
								if(candidates[1] == "Jejomar Binay")
								{
									pres[0] += 1;
									tempPresVal[0] += 1;
								}
								else if(candidates[1] == "Miriam Defensor-Santiago")
								{
									pres[1] += 1;
									tempPresVal[1] += 1;
								}
								else if(candidates[1] == "Rodrigo Duterte")
								{
									pres[2] += 1;
									tempPresVal[2] += 1;
								}
								else if(candidates[1] == "Grace Poe")
								{
									pres[3] += 1;
									tempPresVal[3] += 1;
								}
								else if(candidates[1] == "Manuel Roxas")
								{
									pres[4] += 1;
									tempPresVal[4] += 1;
								}
							}
							else if(candidates[0] == "VicePresident")
							{
								if(candidates[1] == "Alan Peter Cayetano")
								{
									vice[0] += 1;
									tempViceVal[0] += 1;
								}
								else if(candidates[1] == "Francis Escudero")
								{
									vice[1] += 1;
									tempViceVal[1] += 1;
								}
								else if(candidates[1] == "Gregorio Honasan")
								{
									vice[2] += 1;
									tempViceVal[2] += 1;
								}
								else if(candidates[1] == "Ferdinand R. Marcos")
								{
									vice[3] += 1;
									tempViceVal[3] += 1;
								}
								else if(candidates[1] == "Leonor Robredo")
								{
									vice[4] += 1;
									tempViceVal[4] += 1;
								}
								else if(candidates[1] == "Antonio Trillanes")
								{
									vice[5] += 1;
									tempViceVal[5] += 1;
								}
							}
							else if(candidates[0] == "Senator")
							{
								for(var x=0; x<50; x++)
								{
									if(candidates[1] == senador[x])
									{
										sen[x] += 1;
										tempSenVal[x] += 1;
									}
								}
							}
						}
						sorterSen(tempSenVal);
						sorterPres(tempPresVal);
						sorterVice(tempViceVal);
						document.getElementById('presSpan1').style.height = ((pres[tempPres[0]] / resp_num)*100) + '%';
						document.getElementById('presSpanImg1').src = presPictures[tempPres[0]];
						document.getElementById('presSpan1perc').innerText = Math.round((pres[tempPres[0]] / resp_num)*100) + '%';
						document.getElementById('first').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+presidente[tempPres[0]]+'</div>';
						document.getElementById('presSpan2').style.height = ((pres[tempPres[1]] / resp_num)*100) + '%';
						document.getElementById('presSpanImg2').src = presPictures[tempPres[1]];
						document.getElementById('presSpan2perc').innerText = Math.round((pres[tempPres[1]] / resp_num)*100) + '%';
						document.getElementById('second').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+presidente[tempPres[1]]+'</div>';
						document.getElementById('presSpan3').style.height = ((pres[tempPres[2]] / resp_num)*100) + '%';
						document.getElementById('presSpanImg3').src = presPictures[tempPres[2]];
						document.getElementById('presSpan3perc').innerText = Math.round((pres[tempPres[2]] / resp_num)*100) + '%';
						document.getElementById('third').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+presidente[tempPres[2]]+'</div>';
						document.getElementById('presSpan4').style.height = ((pres[tempPres[3]] / resp_num)*100) + '%';
						document.getElementById('presSpanImg4').src = presPictures[tempPres[3]];
						document.getElementById('presSpan4perc').innerText = Math.round((pres[tempPres[3]] / resp_num)*100) + '%';
						document.getElementById('fourth').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+presidente[tempPres[3]]+'</div>';
						document.getElementById('presSpan5').style.height = ((pres[tempPres[4]] / resp_num)*100) + '%';
						document.getElementById('presSpanImg5').src = presPictures[tempPres[4]];
						document.getElementById('presSpan5perc').innerText = Math.round((pres[tempPres[4]] / resp_num)*100) + '%';
						document.getElementById('fifth').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+presidente[tempPres[4]]+'</div>';
						
						/*Vice*/
						document.getElementById('viceSpan1').style.height = ((vice[tempVice[0]] / resp_num)*100) + '%';
						document.getElementById('viceSpanImg1').src = vicePictures[tempVice[0]];
						document.getElementById('viceSpan1perc').innerText = Math.round((vice[tempVice[0]] / resp_num)*100) + '%';
						document.getElementById('vicefirst').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+vise[tempVice[0]]+'</div>';
						
						document.getElementById('viceSpan2').style.height = ((vice[tempVice[1]] / resp_num)*100) + '%';
						document.getElementById('viceSpanImg2').src = vicePictures[tempVice[1]];
						document.getElementById('viceSpan2perc').innerText = Math.round((vice[tempVice[1]] / resp_num)*100) + '%';
						document.getElementById('vicesecond').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+vise[tempVice[1]]+'</div>';
						
						document.getElementById('viceSpan3').style.height = ((vice[tempVice[2]] / resp_num)*100) + '%';
						document.getElementById('viceSpanImg3').src = vicePictures[tempVice[2]];
						document.getElementById('viceSpan3perc').innerText = Math.round((vice[tempVice[2]] / resp_num)*100) + '%';
						document.getElementById('vicethird').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+vise[tempVice[2]]+'</div>';
						
						document.getElementById('viceSpan4').style.height = ((vice[tempVice[3]] / resp_num)*100) + '%';
						document.getElementById('viceSpanImg4').src = vicePictures[tempVice[3]];
						document.getElementById('viceSpan4perc').innerText = Math.round((vice[tempVice[3]] / resp_num)*100) + '%';
						document.getElementById('vicefourth').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+vise[tempVice[3]]+'</div>';
						
						document.getElementById('viceSpan5').style.height = ((vice[tempVice[4]] / resp_num)*100) + '%';
						document.getElementById('viceSpanImg5').src = vicePictures[tempVice[4]];
						document.getElementById('viceSpan5perc').innerText = Math.round((vice[tempVice[4]] / resp_num)*100) + '%';
						document.getElementById('vicefifth').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+vise[tempVice[4]]+'</div>';
						
						document.getElementById('viceSpan6').style.height = ((vice[tempVice[5]] / resp_num)*100) + '%';
						document.getElementById('viceSpanImg6').src = vicePictures[tempVice[5]];
						document.getElementById('viceSpan6perc').innerText = Math.round((vice[tempVice[5]] / resp_num)*100) + '%';
						document.getElementById('vicesixth').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+vise[tempVice[5]]+'</div>';
						
						for(var i=0; i < 6; i++)
						{
							var a1 = 'senSpan'+(i+1);
							var a2 = 'senSpanImg'+(i+1);
							var a3 = 'senSpan'+(i+1)+'perc';
							document.getElementById(a1).style.height = ((sen[tempSen[i]] / resp_num)*100) + '%';
							document.getElementById(a2).src = senPictures[tempSen[i]];
							document.getElementById(a3).innerText = Math.round((sen[tempSen[i]] / resp_num)*100) + '%';
							if(i == 0)
							{
								document.getElementById('senfirst').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+senador[tempSen[0]]+'</div>';
							}
							else if(i == 1)
							{
								document.getElementById('sensecond').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+senador[tempSen[1]]+'</div>';
							}
							else if(i == 2)
							{
								document.getElementById('senthird').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+senador[tempSen[2]]+'</div>';
							}
							else if(i == 3)
							{
								document.getElementById('senfourth').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+senador[tempSen[3]]+'</div>';
							}
							else if(i == 4)
							{
								document.getElementById('senfifth').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+senador[tempSen[4]]+'</div>';
							}
							else if(i == 5)
							{
								document.getElementById('sensixth').innerHTML = '<div style="color: white; position: relative; top: 38%; text-align: center;">'+senador[tempSen[5]]+'</div>';
							}
						}
						
						var myOut = "";
						
						for(var i=6; i<15; i++)
						{
							myOut += '<div style="width: 100%; margin-top: 20px;">' +
									'<div style="display: inline-block; width: 25%; height: 60%; position: relative; text-align: center; font-size: 15px;">' + 
										(i+1) + '. ' + senador[tempSen[i]] +
									'</div>' + 
									'<div class="hmeter" style="display: inline-block; width: 60%; height: 30px; position: relative; text-align: center; font-size: 15px;">' +
										'<span style="display: block; height: 100%; border-top-right-radius: 8px;border-bottom-right-radius: 8px;border-top-left-radius: 20px;border-bottom-left-radius: 20px;background-color: rgb(43,194,83);background-image: linear-gradient(center bottom,rgb(43,194,83) 37%,rgb(84,240,84) 69%);box-shadow:inset 0 2px 9px rgba(255,255,255,0.3),inset 0 -2px 6px rgba(0,0,0,0.4);position: relative;overflow: hidden; width: ' + ((sen[tempSen[i]] / resp_num)*100) + '%;"></span>'+
									'</div>' + 
									'<div style="display: inline-block; width: 20%; left: 80%; height: 60%; position: absolute; text-align: center; font-size: 20px;">' + 
										Math.round(((sen[tempSen[i]] / resp_num)*100)) + '%' +
									'</div>' + 
								'</div>';
						}
						document.getElementById("candidates16").innerHTML = myOut;
						
						
						
						/*Pres*/	
						document.getElementById('presLabel').style.display = "block";
						document.getElementById('presGraph').style.display = "block";
						document.getElementById('preslabel').style.display = "block";
						
						/*VIce*/
						document.getElementById('viceLabel').style.display = "block";
						document.getElementById('viceGraph').style.display = "block";
						document.getElementById('vicelabel').style.display = "block";
						
						/*VIce*/
						document.getElementById('senLabel').style.display = "block";
						document.getElementById('senGraph').style.display = "block";
						document.getElementById('senlabel').style.display = "block";
						document.getElementById('candidates16').style.display = "block";
						
						
				}
			});
		}
		else
		{
			alert("Date From should be earlier than the Date To");
		}
	}
	else
	{
		alert("Fill up the dates!");
	}
}

function presCandid(arr)
{
	for(var i=0; i<5; i++)
	{
		presPictures[i] = arr[i].img;
		presidente[i] = arr[i].candid;
	}
}
function vicer(arr)
{
	for(var i=0; i<6; i++)
	{
		vicePictures[i] = arr[i].img;
		vise[i] = arr[i].candid;
	}
}

function senateCandid(arr)
{
	for(var i=0; i<50; i++)
	{
		senador[i] = arr[i].candid;
		senPictures[i] = arr[i].img;
	}
}

function sorterSen(tempSenVal)
{
	for(var i=0; i<49; i++)
	{
		for(var x=i+1; x<50; x++)
		{
			if(tempSenVal[i] < tempSenVal[x])
			{
				var temp = tempSenVal[i];
				tempSenVal[i] = tempSenVal[x];
				tempSenVal[x] = temp;
				var temp1 = tempSen[i];
				tempSen[i] = tempSen[x];
				tempSen[x] = temp1;
			}
		}
	}
}

function sorterPres(tempPresVal)
{
	for(var i=0; i<4; i++)
	{
		for(var x=i+1; x<5; x++)
		{
			if(tempPresVal[i] < tempPresVal[x])
			{
				var temp = tempPresVal[i];
				tempPresVal[i] = tempPresVal[x];
				tempPresVal[x] = temp;
				var temp1 = tempPres[i];
				tempPres[i] = tempPres[x];
				tempPres[x] = temp1;
			}
		}
	}
}

function sorterVice(tempViceVal)
{
	for(var i=0; i<5; i++)
	{
		for(var x=i+1; x<6; x++)
		{
			if(tempViceVal[i] < tempViceVal[x])
			{
				var temp = tempViceVal[i];
				tempViceVal[i] = tempViceVal[x];
				tempViceVal[x] = temp;
				var temp1 = tempVice[i];
				tempVice[i] = tempVice[x];
				tempVice[x] = temp1;
			}
		}
	}
}

function post()
{
	var fromDate1 = sessionStorage.Fromdate;
	var toDate1 = sessionStorage.Todate;
	if(fromDate1 != ""&& toDate1 != "")
	{
		var fromDate2 = Date.parse(fromDate1);
		var toDate2 = Date.parse(toDate1);
		if(fromDate2 != "" && toDate2 != "")
		{
			if(fromDate2 <= toDate2)
			{
				$.post('php/post.php',{fromDate:fromDate1, toDate:toDate1}, function(candid){
					if(candid == "Success")
					{
						alert("The report has been posted!");
						sessionStorage.setItem("Fromdate","");
						sessionStorage.setItem("Todate","");
						document.getElementById('preslabel').style.display = "none";
						document.getElementById('presLabel').style.display = "none";
						document.getElementById('presGraph').style.display = "none";
						
						document.getElementById('vicelabel').style.display = "none";
						document.getElementById('viceLabel').style.display = "none";
						document.getElementById('viceGraph').style.display = "none";
						
						document.getElementById('senlabel').style.display = "none";
						document.getElementById('senLabel').style.display = "none";
						document.getElementById('senGraph').style.display = "none";
						document.getElementById('candidates16').style.display = "none";
						
						document.getElementById("noresult").style.display = "block";
					}
					else
					{
						alert("Please fill up the fields!");
					}
				});
			}
			else
			{
				alert("Date From should be earlier than the Date To");
			}
		}
		else
		{
			alert("Fill up the dates!");
		}
	}
	else
	{
		alert("Please generate first a report with result!!!");
	}
}