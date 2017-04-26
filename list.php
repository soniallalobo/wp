<style>

table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem; }

th, td { padding: 1.5rem; font-size: 1.3rem; font-family: Arvo;}

tr {background: hsl(50, 50%, 80%); font-family: Avro}

tr, td { transition: .4s ease-in; } 

tr:first-child {background: 	 #b3b300; }

tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }

tr:hover:not(#firstrow), tr:hover td:empty {pointer-events: visible;}
tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 700; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);}
.button {

    background-color: 	 #b3b300;
    color: #FFFFFF;
    padding: 8px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 2px 2px;
    cursor: pointer;
    text-transform: uppercase;
    font-family: 'Open Sans Condensed', sans-serif;
}

.plate {
  width: 100%;
}
.shadow {
  color: #fff;
  font-family: Arvo;
  font-weight: bold;
  text-shadow:
    -3px -3px 0 #222,
    3px -3px 0 #222,
    -3px 3px 0 #222,
    3px 3px 0 #222,
    4px 4px 0 #fff,
    5px 5px 0 #fff,
    6px 6px 0 #fff,
    7px 7px 0 #fff;
  line-height: 0.8em;
  letter-spacing: 0.1em;
  transform: scaleY(0.7);
  -webkit-transform: scaleY(0.7);
  -moz-transform: scaleY(0.7);
  margin:0;
  text-align: center;
}
.script {
  font-family: "Seaweed Script";
  color: #fff;
  text-align: center;
  font-size: 40px;
  position: relative;
  margin:0;
}
.script span {
  background-color: #222;
  padding: 0 0.3em;
}
.script:before {
  content:"";
  display: block;
  position: absolute;
  z-index:-1;
  top: 50%;
  width: 100%;
  border-bottom: 3px solid #fff;
}
.text1 {
  font-size: 60px;
}

</style>
<?php
		$con = mysql_connect("localhost","root","");
		mysql_select_db("sunny",$con);
		$sql = "SELECT * FROM WP";
		$myData = mysql_query($sql,$con);
		echo "<table>
		<tr>
		<th>Student ID</th>
		<th>Student Name</th>
		<th>Email</th>
		<th>Branch</th>
		<th>Duration</th>
		</tr>";
		while ($record = mysql_fetch_array($myData)) {
			echo "<tr>";
			echo"<td>".$record['ID']."</td>";
			echo"<td>".$record['NAME']."</td>";
			echo"<td>".$record['EMAIL']."</td>";
			echo"<td>".$record['BRANCH']."</td>";
			echo"<td>".$record['DURATION']."</td>";
			echo "</tr>";	
		}
		echo "</table>";
		mysql_close($con)
		?>
		<center>
	<button type="Submit" class="button" onlick="#"><a href="file.html">Go Back to Registartion Page</button>