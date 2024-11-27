<?php
$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
$query1="select * from `team` ";
$result1=mysqli_query($con,$query1);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="addoption.css">
<style>
  body{
    background-image: url("img/back6.jpg");
  }
</style>
</head>
<body  >
<a href="admin1st.html"><button>Back</button></a>
<h3>Add Player</h3>
<div class="container">
  <form action="addplayer.php" method="post">

    <label for="cap_no">Cap Number</label>
    <input type="number" name="cap_no" placeholder="Player Cap Number..">

    <label for="playername">Player Name</label>
    <input type="text" name="playername" placeholder="Enter Player Name..">

    <!-- <label for="name">Team Name</label>
    <input type="text" name="name" placeholder="Team Name.."> -->

    

    <label for="age">age</label>
    <input type="number" name="age" placeholder="Player Age..">

    
     <label for="dob">DOB</label>
    <input type="date" name="dob" placeholder="Player Date of Birth..">

     <label for="runs">Runs</label>
    <input type="number" name="runs" placeholder="Player Runs..">

     <label for="wickets">Wickets</label>
    <input type="number" name="wickets" placeholder="Player Wickets..">

     <label for="type">Type</label>
     <br>
    <select id="text" name="type" placeholder="player type">
      <option value="Batsman">Batsman</option>
      <option value="Bowler">bowler</option>
      <option value="All rounder">All-Rounder</option>
    </select>
    <br></br>
    <label for="no_of_matches">No of Matches</label>
    <input type="number" name="no_of_matches" placeholder="Number of Matches Played..">

     <label for="rank">Rank</label>
    <input type="number" name="rank" placeholder="Player rank ..">

     <label for="batting_best">Batting Best</label>
    <input type="text" name="batting_best" placeholder="Player's Batting Best..">

     <label for="bowling_best">Bowling Best</label>
    <input type="text" name="bowling_best" placeholder="Player's Bowling Best..">

     <label for="image">Insert Player's Image here</label>
    <input type="text" name="image" placeholder="(e.g.) p.png">
<br>
    <label for="team">Team Name</label><br>
    <select name="team" id="team" placeholder="">
        <?php while($row1=mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[0];?></option>
        <?php endwhile;?>
    </select>
    <br></br>
    <input type="submit" style="float:left;" value="Submit"><a href="admin.html"><button style="float:right;" >Logout</button></a>
  </form>
</div>
</body>
</html>
