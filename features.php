<h1> FEATURES</h1>
<body>
	<!--action="database/db_insert.php"-->
	<form  method="GET" id="form1" method="GET" onsubmit="submit(); return false;"> 

		<input type="radio" name="type" value="movies" id="movies" checked> Movies <br>
		<input type="radio" name="type" value="series" id="series"> Series <br>
		<input type="submit" value="Submit" id="submit">

	</form>

		<form  method="GET" id="form1" method="GET" onsubmit="loadResults(this.value); return false"> 
		<input type="radio" name="type" value="movies" id="movies" checked> Movies <br>
		<input type="radio" name="type" value="series" id="series"> Series <br>
		<input type="radio" name="type" value="" > <br>
		<input type="submit" value="Submit" id="submit">

	</form>

	<div id="res">
	</div>
</body>


<script>	
	function loadResults(str){
		if (str==""){
			document.getElementbyID("#res").innerHTML="the content of this is null";
		}else{
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}
		}
		xmlhttp.onreadystatechange = function() {
		
		if (this.readyState == 4 && this.status == 200) {
			document.getElementbyID("res").innerHTML= this.responseText;
			}
		};

	}
</script>
