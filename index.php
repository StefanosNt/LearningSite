<!DOCTYPE html>
<html>
	<head>
		<title> SAMI - Series and Movies Intel </title>
		</style>
	</head>
	<body>
		<!-- <form onsubmit="userCheck()">
			Username <br>
			<input type="text" name="username" id="user"></input><br>
			Passowrd <br>
			<input type="text" name="password" id="pass"></input><br><br>
			<input type="submit" value="submit"></input>
		</form> -->
		<div id="maindiv">	

				<table>
					<tr>
						<th> ID </th>
						<th> TITLE </th>
						<th> YEAR </th>
						<th> GENRE </th>
						<th> RATING </th>
						<th> STAR </th>
					</tr>
					<?php include('/database/db_insert.php'); ?>
				</table>
		</div>
	</body>

 	<script>
	// 	function userCheck(){
		
	// 	var xhttp = new XMLHttpRequest();
	// 	xhttp.onreadystatechange = function() {
		

	// 	if (this.readyState == 4 && this.status == 200) {
	// 	     document.getElementById("maindiv").innerHTML = this.responseText;
	// 	    }
	// 	};
	// 	xhttp.open("GET", "ajax_info.txt", true);
	// 	xhttp.send();

	// 	var url = "/database/validate?username=root"+ document.getElementById("user").value+"d&password="+document.getElementById("pass").value;
	// 	alert(url);

			// var req = new XMLHttpRequest();
			// req.onreadystatechange = funcion(){
			// 	if(req.readyState == 4) {
   //          		return req.status === 200 ? 
   //              success(req.responseText) : error(req.status);
			// }
			
			//  req.open("GET", url, true);
			  
			  //req.send();
		};
		//var url = "/database/validate?username=root"+ document.getElementById("user").value+"d&password="+document.getElementById("pass").value;
		//alert(url);
	};

	</script>
</html>