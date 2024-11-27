<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
   table{
  margin-top: 10px;
    margin-left: 1%;
    margin-right: 1%;
  width: 100%;
    color:greenyellow;
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
  font-size: 15px;

  text-transform: uppercase;
} 

tr{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 500;
  font-size: 15px;
  color:aliceblue;
  border-bottom: solid 1px black;
  border: 1px solid black;
}
body
{
    background-image: url("img/back10.jpeg");
  background-size: cover;
  background-image: no-repeat;
  font-family: cursive;
  text-transform: uppercase;


}
button
{
  background-color:blue;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
</style>
<body background=""><a href="user1st.html" style="color: white"><button >Back</button></a><br><br>


<div style="color:aliceblue;" >

<?php

    

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $player=$_POST['playername'];
    $query="select * from player  where playername like '%$player%'";
   
    
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){

       

        echo " <h1><p align="."center".">".$row["playername"]."<p></h1><table  width="."100%"." height="."400px"."><tr><th height="."100%"."><img src=".$row["image"]." width="."300px"."></th><th><table width="."100%".">
        <tr><th>PLAYERNAME</th><th>".$row["playername"]."</th></tr>
        <tr><th>RANK</th><th>".$row["rank"]."</th></tr>
        <tr><th>TEAM</th><th>".$row["teamname"]."</th></tr>
        <tr><th>RUNS</th><th>".$row["runs"]."</th></tr>
        <tr><th>TYPE</th><th>".$row["type"]."</th></tr>
        <tr><th>BATTING BEST</th><th>".$row["batting_best"]."</th></tr>
        <tr><th>BOWLING BEST</th><th>".$row["bowling_best"]."</th></tr></table></th>
        </tr></table>";



    }

    }

else
{
     echo "<script type='text/javascript'>alert('PLAYER NOT FOUND!!');</script>";
      header("refresh: 0.01; url=user1st.html");
    
}

mysqli_close($con);    ?></div>

</body></html>