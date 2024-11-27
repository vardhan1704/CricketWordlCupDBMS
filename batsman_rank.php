<html>
  <head>
  <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="adminlogin.css">
  </head>
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

.background-image{
  background-image: url("img/back5.jpg");
  background-size: cover;
  background-image: no-repeat;
}

</style>
<head>
	<title>RANKS</title>
</head>
<body class="background-image">
	
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
    <p style="color:blueviolet; font-family:cursive; font-weight:800; font-size:20px" align="center">BATSMAN RANKING</p>

    <div class="tb1-header">
<table align="center" style="color:red;">
		<tr >
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>Runs</th>
		</tr>
</table></div>
<div class="tb1-content"><table align="center">
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from player  where type='batsman' order by runs desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
				$nm = $row["cap_no"];
			$q="update player set rank='$i' where cap_no='$nm'";
    		mysqli_query($con,$q);
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["teamname"]."</th><th>".
			$row["runs"]."</th></tr>";
			}
		}?></table></div>
<br></br>
<br></br>
<br></br>
	<form class="login-container" action="pupdate.php" method="POST">
  <h2>UPDATE PLAYER DETAILS</h2>
    <label for="name">ENTER PLAYERNAME :</label>
	<input type="text" name="name" placeholder="virat">
  <label for="runs">ENTER RUNS TO BE ADDED:</label>
	<input type="number" name="runs" placeholder="211">
  <label for="wickets">ENTER WICKETS TO BE ADDED:</label>
  <input type="number" name="wickets" placeholder="23">
  <label for="no_of_matches">ENTER NUMBER_OF_MATCHES TO BE ADDED:</label>

	 <select type="number" name="no_of_matches">
    <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
  </select>
  <input type="submit" style="float:center;" value="update" name="submit">
  </form>


 

</body>
</html>