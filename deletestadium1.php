<?php
$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
$query1="select stadium_name from `stadiums` order by stadium_name ";
$result1=mysqli_query($con,$query1);
// $query1="select * from `cricket_boards` ";
$result2=mysqli_query($con,$query1);
?>
<html>
    <head>
        <title>Delete Stadium</title>
        <link rel="stylesheet" href="addoption.css">
        <style>
  body{
    background-image: url("img/back6.jpg");
  }
</style>
         
            </head>
        <body>
        <a href="admin1st.html"><button>Back</button></a>
        <div style="margin-top:225px;" >
            <form action="delete_stadium.php" method="post"><table><tr align="center">
            <p style="text-align: center;font-size: 25;">Enter Stadium Name :
                <!-- <input type="text" name="stadium_name" style="width: 300;height: 25;"> -->
                
                <select type="text" name="stadium_name" id="stadium_name" style="width: 300;height: 25;">
        <?php while($row1=mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[0];?></option>
        <?php endwhile;?>
    </select>
            <br></br>
          <input type="submit" style="float:center;" value="Submit">
            </p></tr></table>
    </form>
    <a href="admin.html"><button style="float:right;" >Logout</button></a>
   </body>
</html>