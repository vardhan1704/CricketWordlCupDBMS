<!DOCTYPE html>
<html>
<style >
	
  table{
  margin-top: 10px;
    margin-left: 1%;
    margin-right: 1%;
  width: 100%;
    color: black;
    font-family:cursive;
  table-layout: fixed;
  border: 1px solid black;
  border-collapse: collapse;
}
.tbl-header{
    
  background-color:#e74c3c;
  color:crimson;
 }
.tbl-content{
  height:300px;
  overflow:auto;
  margin-top: 0px;
  border: 1px solid #e74c3c;
  color: #e74c3c;
}
th{
  padding: 20px 15px;
  text-align: center;
  font-weight: 800;
    text-overflow: auto;
  font-size: 12px;

  text-transform: uppercase;
} 

tr{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 500;
  font-size: 12px;
  
  border-bottom: solid 1px black;
  border: 1px solid black;
}
	.menu {
  list-style:none;
  margin: 1px auto;

  width: 800px;
  width: -moz-fit-content;
  width: -webkit-fit-content;
  width: fit-content;
}
	.menu {
  list-style:none;
  margin: 1px auto;

  width: 800px;
  width: -moz-fit-content;
  width: -webkit-fit-content;
  width: fit-content;
}
.menu > li {
  background: #34495e;
  float: left;
  position: relative;
  -webkit-transform: skewX(25deg);
}
.menu a {
  display: block;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  font-family: Arial, Helvetica;
  font-size: 14px;
}
.menu li:hover {
  background: #e74c3c;
}
.menu > li > a {
  -webkit-transform: skewX(-25deg);
  padding: 1em 2em;
}
/* Dropdown */
 .submenu {
  position: absolute;
  width: 200px;
  left: 50%;
  margin-left: -100px;
  -webkit-transform: skewX(-25deg);
  -webkit-transform-origin: left top;
}
.submenu li {
  background-color: #34495e;
  position: relative;
  overflow: hidden;
}
.submenu > li > a {
  padding: 1em 2em;
}
.submenu > li::after {
  content:'';
  position: absolute;
  top: -125%;
  height: 100%;
  width: 100%;
  box-shadow: 0 0 50px rgba(0, 0, 0, .9);
}
/* Odd stuff */
.submenu > li:nth-child(odd) {
  -webkit-transform: skewX(-25deg) translateX(0);
}
.submenu > li:nth-child(odd) > a {
  -webkit-transform: skewX(25deg);
}
.submenu > li:nth-child(odd)::after {
  right: -50%;
  -webkit-transform: skewX(-25deg) rotate(3deg);
}
/* Even stuff */
.submenu > li:nth-child(even) {
  -webkit-transform: skewX(25deg) translateX(0);
}
.submenu > li:nth-child(even) > a {
  -webkit-transform: skewX(-25deg);
}
.submenu > li:nth-child(even)::after {
  left: -50%;
  -webkit-transform: skewX(25deg) rotate(3deg);
}
/* Show dropdown */
.submenu, .submenu li {
  opacity: 0;
  visibility: hidden;
}
.submenu li {
  transition: .2s ease -webkit-transform;
} */
.menu > li:hover .submenu, .menu > li:hover .submenu li {
  opacity: 1;
  visibility: visible;
}
.menu > li:hover .submenu li:nth-child(even) {
  -webkit-transform: skewX(25deg) translateX(15px);
}
.menu > li:hover .submenu li:nth-child(odd) {
  -webkit-transform: skewX(-25deg) translateX(-15px);
}
.background-image{
  background-image: url("img/back4.jpg");
  background-size: cover;
  background-image: no-repeat;
}
.let{
	color: black;
    font-family:cursive;
font-weight: 500;
  font-size: 12px;
text-transform: uppercase;
padding: 20px 15px;
  text-align: center;
  font-weight: 800;
    text-overflow: auto;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color:black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-family:cursive;
font-weight: 500;
  font-size: 12px;
text-transform: uppercase;
padding: 20px 15px;
  text-align: center;
  font-weight: 800;
    text-overflow: auto;
}
input[type=number] {
  width: 200px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

</style>
<head><p>
	<title>SCHEDULES</title>
</head>
<body class="background-image" >
<p align="center"><img src="img/icclogotran.png" style="width: 300px;padding-bottom: 0px;height: 150px;"></p>

<ul class="menu">
                  <li><a href="user1st.html">HOME</a></li></form>
                   <li><a href="schedule_u.php">SCHEDULES</a></li></form>
                  <li><a href="rank_u.php">RANKINGS</a></li></form>
                   <li><a href="stadium_u.php">STADIUMS</a></li></form>
                   <li><a href="cricket_boards_u.php">CRICKET BOARDS</a></li></form>
                   
                 </ul>
	 <div class="tb1-header" >
	<table align="center">
		<tr>
			<th>MATCH no</th>
      <th>date</th>
			<th>Team1</th>
      <th>flag</th>
			<th>Team2</th>
      <th>flag</th>
			<th>VENUE</th>
		
		</tr>
  </table></div>
 <div class="tb1-content"><table align="center">
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select s.match_no , s.date , s.team1 ,t1.flag as flag1,s.team2 , t2.flag as flag2 , s.stadium_name  from schedules s ,team t1 , team t2 where s.team1=t1.name and s.team2=t2.name order by s.date";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr><th>".
				$row["match_no"]."</th>
				<th>".$row["date"]."</th><th>".
				$row["team1"]."</th>
				<th height="."100%"."><img src=".$row["flag1"]." width="."100px"."></th><th>".
				$row["team2"]."</th>
				<th height="."100%"."><img src=".$row["flag2"]." width="."100px"."></th>
				<th>".$row["stadium_name"]."</th></tr>";
				}
		}
		mysqli_close($con);
		?>
    </table></div>

<div class="let">
		 <form action="ttu.php" method="post" >
            <p >Enter Match Number to retrieve players players of avilable in both team</p>
            <input type="number" name="match_no" style="width: 300;height: 25;"><br><br>
          <input type="submit" style="float:center;" value="submit">
            
    </form>
    </div>



</body>
</html>