<?php
$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
$query1="select * from `cricket_boards` ";
$result1=mysqli_query($con,$query1);
// $query1="select * from `cricket_boards` ";
$result2=mysqli_query($con,$query1);
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
<body>
    <a href="admin1st.html"><button>Back</button></a>
<h3>Add Stadium</h3>

<div class="container">
  <form action="addstadium.php" method="post">


    <label for="stadium_name">Stadium Name</label>
    <input type="text" name="stadium_name" placeholder="Enter Stadium Name..">
    <label for="board_name">Board Name</label>
    <select name="board_name" id="board_name">
        <?php while($row1=mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[0];?></option>
        <?php endwhile;?>
    </select>
    <!-- <label for="board_name">Board Name</label>
    <input type="txt" name="board_name" placeholder="Board Name.."> -->
    <label for="team">Team Name</label>
    <select name="team" id="team">
         <!-- <option>---</option> -->
        <?php while($row1=mysqli_fetch_array($result2)):;?>
        <option><?php echo $row1[2];?></option>
        <?php endwhile;?>
    </select>
     <!-- <label for="team">Team</label>
    <input type="txt" name="team" placeholder="Team.."> -->

    <label for="capacity">Capacity</label>
    <input type="number" name="capacity" placeholder="Capacity of Stadium..">

    
    <input type="submit" style="float:left;" value="Submit"><a href="admin.html"><button style="float:right;" >Logout</button></a>
  
  </form>
  </form>
</div>

</body>
</html>
