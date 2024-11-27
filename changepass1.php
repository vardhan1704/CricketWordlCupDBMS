<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $newpass= $_POST['npsw'];
    $newpassc=$_POST['npswc'];

    $check_u = "select * from admin where username ='$username'";
    $res_u = mysqli_query($con,$check_u) or die(mysqli_error($con));
    $check_p = "select * from admin where username = '$username' and password = '$password'";
    $res_p = mysqli_query($con,$check_p) or die(mysqli_error($con));
    if(mysqli_num_rows($res_u)==0)
    {
      echo "<script type='text/javascript'>alert('Incorrect username!!');</script>";
      header("refresh: 0.01; url=changepass1.html");
    }

    if(mysqli_num_rows($res_p)==0)
    {
      echo "<script type='text/javascript'>alert('Incorrect password!!');</script>";
      header("refresh: 0.01; url=changepass1.html");
    }
    if($newpass!=$newpassc)
    {
        echo "<script type='text/javascript'>alert('both new password and confirm passwrod should be same!!');</script>";
      header("refresh: 0.01; url=changepass1.html");
    }
    $change_p = "update admin set password='$newpass' where username='$username' ";
    $res_c= mysqli_query($con,$change_p) or die(mysqli_error($con));
    if($res_c)
    {
        
        echo "<script type='text/javascript'>alert('PASS WORD CHANGED SUCCESFULLY');</script>";
      header("refresh: 0.01; url=admin.html");
    }
    else
    {
        
        echo "<script type='text/javascript'>alert('PASSWORD NOT SET!!');</script>";
      header("refresh: 0.01; url=changepass1.html");
    }