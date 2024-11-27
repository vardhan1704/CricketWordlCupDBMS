<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $capno=$_POST['cap_no'];
    $playername=$_POST['playername'];
    
    
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $runs=$_POST['runs'];
    $wickets=$_POST['wickets'];
    $type=$_POST['type'];
    $num=$_POST['no_of_matches'];
    $rank=$_POST['rank'];
    $batting=$_POST['batting_best'];
    $bowling=$_POST['bowling_best'];
    $image=$_POST['image'];
    $teamname=$_POST['team'];
    $query="insert into player (cap_no,age,dob,runs,wickets,type,no_of_matches,rank,batting_best,bowling_best,playername,image,teamname) values ('$capno','$age','$dob','$runs','$wickets','$type','$num','$rank','$batting','$bowling','$playername','$image','$teamname')";
    if(mysqli_query($con,$query))
    {
        echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=admin1st.html");
    }
    else
    {
    	echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addplayeroption.php");
    	mysqli_error($con);
    }

    
    ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<button style="float:right;" ><a href="addplayeroption.php">Logout</a></button>
</body>
</html> -->
    