<style >
  table{
  margin-top: 10px;
    margin-left: 1%;
    margin-right: 1%;
  width: ;
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
.background-image{
  background-image: url("img/back4.jpg");
  background-size: cover;
  background-image: no-repeat;
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
.let{
	color:yellow;
    font-family:cursive;
font-weight: 500;
  font-size: 12px;
text-transform: uppercase;
padding: 20px 15px;
  text-align: center;
  font-weight: 800;
    text-overflow: auto;
}
</style>
<html>
<head><p>
	<title>Squad</title>
</head>
<body class="background-image">

<p align="center"><img src="img/icclogotran.png" style="width: 300px;padding-bottom: 0px;height: 150px;"></p>

<ul class="menu" >
                  <li><a href="admin1st.html">HOME</a></li></form>
                   <li><a href="schedule.php">SCHEDULES</a></li></form>
                  <li><a href="rank.php">RANKINGS</a></li></form>
                   <li><a href="stadium.php">STADIUMS</a></li></form>
                   <li><a href="cricket_boards.php">CRICKET BOARDS</a></li></form>
                   
                </form>  
<table width="100%"; align="center"><tr><th>
	<?php
	$con=mysqli_connect("localhost","root","","cricket");
		 $match_no=$_POST['match_no'];
		 $que="select team1 from schedules where match_no='$match_no'";
				
		echo "Squad for match number $match_no ";
	
		?></th></tr></table>



<table width="100%"><tr><th>
 	<table align="center">
		<div class="let">
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query1="SELECT p.playername as ppp FROM schedules s,player p WHERE s.team1=p.teamname AND s.match_no='$match_no'";
		
		$query="select sc.team1 from schedules sc where  sc.match_no='$match_no' limit 0,1";
	    $res=mysqli_query($con,$query);
	    if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
            echo "<tr><th><b>".$row["team1"]."</b></th></tr>";
                    }
    	}
?></div>

<?php
    	$result1=mysqli_query($con,$query1);
		if(mysqli_num_rows($result1)>0)
		{
			while ($row=mysqli_fetch_assoc($result1)) {
			echo "<tr><th>".$row["ppp"]."</th></tr>";
			
			}
		}
		mysqli_close($con);
		?></table></th><th>


		<table align="center">
		<?php
 		$match_no=$_POST['match_no'];
 		$con=mysqli_connect("localhost","root","","cricket");
		$query1="SELECT p.playername FROM schedules s,player p WHERE s.team2=p.teamname AND s.match_no='$match_no'";
		$result1=mysqli_query($con,$query1);
		
		$query="select sc.team2 from schedules sc where  sc.match_no='$match_no' limit 0,1";
	    $res=mysqli_query($con,$query);
	    if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
            echo "<tr><th><b color:>".$row["team2"]."</b></th></tr>";
                    }
    	}


		if(mysqli_num_rows($result1)>0)
		{
			while ($row=mysqli_fetch_assoc($result1)) {
			echo "<tr><th>".$row["playername"]."</th></tr>";
			
			}
		}
		mysqli_close($con);
		?></table></th></tr></table>
		<br><br>


		<ul class="menu" style="margin-bottom: 200px;background-position: bottom;">
                  <li><a href="addplayeroption.php">ADD PLAYER</a></li>
                   <li><a href="addschedulesoption.php">ADD SCHEDULE</a></li>
                  <li><a href="addstadiumoption.php">ADD STADIUMS</a></li>
                   <li><a href="deleteplayer1.php">DELETE PLAYER</a></li>
                   <li><a href="deleteschedule1.php">DELETE SCHEDULE</a></li>
                    <li><a href="deletestadium1.php">DELETE STADIUM</a></li>

                 
                    <li style="float: right;"><a href="admin.html">LOGOUT</a></button1></li>
                  <li style="float: right;"></li>
                </ul>




</body>
</html>