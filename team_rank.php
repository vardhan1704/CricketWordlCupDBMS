<html>
  <head>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="adminlogin.css">
  </head>
<style >
	/* table{
		border: 0px solid black;
	}
	tr{
		border: 1px solid black;
		background-color:cornflowerblue;
	}
	th{
		border: 1px solid black;
		color: black;
	} */
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
    <p style="color:blueviolet; font-family:cursive; font-weight:800; font-size:20px" align="center">TEAM RANKING</p>

    <div class="tb1-header">
	<table align="center" style="color:red;">
		<tr >
			<th>Rank</th>
			<th>Name</th>
			<th>Rating</th>
		</tr>
  </table>
    </div>
    <div class="tb1-content"><table align="center">
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		



		$query="select * from team order by rating desc";
		$result=mysqli_query($con,$query);
		[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {

			 $i=$i+1;
			$nm = $row["name"];
			$q="update team set rank='$i' where name='$nm'";
    
    		mysqli_query($con,$q);
			echo "<tr  ><th>"
			.floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["rating"]."</th></tr>";
			}
		}?>
</table></div>

	<form class="login-container" action="update.php" method="POST"> 
   <label for="name"> TEAM NAME</label>
	<input type="text" name="name" placeholder="INDIA" align="padding-right">
  <label for="rating">TEAM RATING</label>
    <input type="number" name="rating" placeholder="129/130/..."  >
  <input type="Submit" style="float:center;" value="update" name="submit">
    </tr></form>

</body>
</html>