<?php
//$type = $_GET["type"];
$type = "movies";
watchlist($type);

//$sql = "insert into movies(title,year,genre,rating,star)
function watchlist($type){
	if(isset($type)){
		
		require "db_connect.php";

		//$type can be equal to movies or series
		$sql = "select * from $type";
		$res = $con->query($sql);
		if ($res->num_rows > 0){

	/*		?>
			
				<table border="1">
					<tr>
						<th> ID </th>
						<th> TITLE </th>
						<th> YEAR </th>
						<th> GENRE </th>
						<th> RATING </th>
						<th> STAR </th>
					</tr>
			<?php*/


			while(($row = $res->fetch_assoc()) && $type="movies"){


				echo "<tr>".
					 "<td>". $row["id"]. "</td>". 
					 "<td>". $row["title"]. "</td>".
					 "<td>". $row["year"]. "</td>".
					 "<td>". $row["genre"]. "</td>".
					 "<td>". $row["rating"]. "</td>".
					 "<td>". $row["star"]. "</td>".
					 "</tr>";
			}

			//echo "</table>";
		}
	}else echo "No input where chosen for the type of watchlist";
}

?>
