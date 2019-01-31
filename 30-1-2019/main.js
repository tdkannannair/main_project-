function main(){
 //	alert("main page");
}


function addcntry()
{  
	var cn=document.getElementById("cname").value;
	
  var data=new FormData();
						data.append("cn",cn);
					 
						$.ajax({
							method: "post",
							url: "addcntry.php",
							processData: false,
							contentType: false,
							data: data,
							success: function(result){
									 alert("new country Added");
										window.location.assign("ajax.php");

									}
						});
}

function showcountry()
{
	
	$.ajax({
 				url: "countrylist.php",
				success: function(result){
						var obj = JSON.parse(result);
            $("#cdrop").html("<option>Select country</option>");
						for(var i=0;i<obj.admno.length;i++)
						{
							$("#cdrop").append("<option value="+obj.admno[i].cid+" >"+obj.admno[i].cname+"</option> ");
						}
				}
			});
}
function addstate()
{

 		 $("#cou").hide();
 		 $("#dis").hide();
		$("#sta").show();
	$.ajax({
				url: "getcountry.php",
				success: function(result){

						var obj = JSON.parse(result);
            $("#ctry1").html("<option>Select country</option>");
						for(var i=0;i<obj.admno.length;i++)
						{

							$("#ctry1").append("<option value="+obj.admno[i].cid+" >"+obj.admno[i].cname+"</option> ");
						}
				}
			});
}

function adddistrict()
{
  $("#cou").hide();
  $("#sta").hide();
$("#dis").show();
$.ajax({
				url: "getcountry.php",
				success: function(result){

						var obj = JSON.parse(result);
            $("#ctry2").html("<option>Select country</option>");
						for(var i=0;i<obj.admno.length;i++){

							$("#ctry2").append("<option value="+obj.admno[i].cid+" >"+obj.admno[i].cname+"</option> ");
						}
				}
			});

}
function actry()
{
  var cname=document.getElementById("ctry").value;
  var data=new FormData();
						data.append("cname",cname);

						$.ajax({
							method: "post",
							url: "addcountry.php",
							processData: false,
							contentType: false,
							data: data,
							success: function(result){
										$("#errorAlert").css({"visibility": "visible"});
										$("#signupmsgdata").html(result);
										alert("Country Added");
										window.location.assign("add.php");

									}
						});
}
function astat()
{
  var cname=document.getElementById("ctry1").value;
    var sname=document.getElementById("stat").value;
  var data=new FormData();
						data.append("cname",cname);
            data.append("sname",sname);

						$.ajax({
							method: "post",
							url: "addstate.php",
							processData: false,
							contentType: false,
							data: data,
							success: function(result){
										$("#errorAlert").css({"visibility": "visible"});
										$("#signupmsgdata").html(result);
										alert("State Added");
										window.location.assign("add.php");

									}
						});

}
function adist()
{
  var cname=document.getElementById("ctry2").value;
    var sname=document.getElementById("stat2").value;
    var dname=document.getElementById("dist").value;
  var data=new FormData();
						data.append("cname",cname);
            data.append("sname",sname);
            data.append("dname",dname);

						$.ajax({
							method: "post",
							url: "adddistrict.php",
							processData: false,
							contentType: false,
							data: data,
							success: function(result){
										$("#errorAlert").css({"visibility": "visible"});
										$("#signupmsgdata").html(result);
										alert("State Added");
										window.location.assign("add.php");

									}
						});

}
function getstate1(val)
{
	$.ajax({
		type: "POST",
		url: "getstate.php",
		data:'cid='+val,
		success: function(data){
		if(data=="false"){

			alert("No Place Found");
      $("#stat2").html("<option>Select</option>");
		}
		else {
			var obj = JSON.parse(data);
				$("#stat2").html("<option>Select</option>");
			for(var i=0;i<obj.admno.length;i++){

				$("#stat2").append("<option value="+obj.admno[i].sid+">"+obj.admno[i].sname+"</option>");
			}
		}

	}
});

}
