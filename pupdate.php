
<?php

    session_start();
    $name=$_POST['name'];
   

    $runs=$_POST['runs'];
    $wickets=$_POST['wickets'];

    $no_of_matches=$_POST['no_of_matches'];

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
    $q1="select runs as oldruns , wickets as oldwickwts , no_of_matches as oldmatches from player where playername='$name'";

    if($result2=mysqli_query($con,$q1))
    {
      $row=mysqli_fetch_array($result2);
  
        $runs=$runs+$row["oldruns"];
        $wickets=$wickets+$row["oldwickwts"];
        $no_of_matches=$no_of_matches+$row["oldmatches"];
    
    $q="update player set runs='$runs',wickets='$wickets',no_of_matches='$no_of_matches' where playername='$name'";
    if(mysqli_query($con,$q))
    {
    	header("refresh: 0.01; url=rank.php");
    }
    else
    {echo "<script type='text/javascript'>alert('ERROR!!111');</script>";
      header("refresh: 0.01; url=rank.php");
    
    	//echo "error";
    	//header("refresh: 0.01; url=admin1st.html");
    }
  }
  else
  {echo "<script type='text/javascript'>alert('ERROR!!2222');</script>";
    header("refresh: 0.01; url=rank.php");
  
    //echo "error";
    //header("refresh: 0.01; url=admin1st.html");
  }
    ?>