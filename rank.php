<!DOCTYPE html>
<html>
<style >
	table{
		border: 0px solid black;
	}
	tr{
		border: 1px solid black;
		background-color:cornflowerblue;
	}
	th{
		border: 1px solid black;
		color: black;
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
  background-image: url("img/back5.jpg");
  background-size: cover;
  background-image: no-repeat;
}


</style>
<head>
	<title>RANKS</title>
</head>
<body class="background-image" >

<p align="center"><img src="img/icclogotran.png" style="width: 300px;padding-bottom: 0px;height: 150px;"></p>
	<ul class="menu">
                  <li><a href="admin1st.html">HOME</a></li></form>
                   <li><a href="schedule.php">SCHEDULES</a></li></form>
                  <li><a href="rank.php">RANKINGS</a></li></form>
                   <li><a href="stadium.php">STADIUMS</a></li></form>
                   <li><a href="cricket_boards.php">CRICKET BOARDS</a></li></form>
                   
                </form>     
                 </ul>
<br></br>
<br></br>
<ul class="menu" >
                  <li style="background-color:darkred"><a href="team_rank.php">TEAM</a></li></form>
                   <li style="background-color:darkred"><a href="batsman_rank.php">BATSMAN</a></li></form>
                  <li style="background-color:darkred;"><a href="bowler_rank.php">BOWLER</a></li></form>
				  <li style="background-color:darkred;"><a href="all_rounder_rank.php">ALL ROUNDER</a></li></form>
                </form>     
                 </ul>
<br></br>
<br></br>
	
	
<br></br>
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