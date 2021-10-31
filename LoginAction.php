<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginAction</title>
</head>
<body>

      <div class="bg1">

      <div class="topnav">

      <a>Log In</a>

       <div class="topnav-right">
          <a href="#search">Abouts</a>
          <a href="#about">Contact Us</a>
       </div>
   
    <div class="login-box">
   
        <h1 style="font-family:Calibri;font-size:250%" >Login Here</h1>
      
      
            <form action="Investor.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <br>
            <input type="submit" name="submit" value="Login"><br>
         
         New User? No worries,<br><br>
         <input type="submit" name="submit" value="Register Here">

            <a href="#">Forget Password</a>    
         
            </form>
      
        </div>
      </div>
   </div>







<?php

if ($_SERVER['REQUEST_METHOD'] === "POST")
{
			
    $UserName = $_POST['uname'];
    $Password = $_POST['upass']; 
    
    if(empty($UserName) or empty($password) )
    
     echo "fill up from properly";
     else
     {
        echo "UserName : " . sanitize($uname);	
        echo "<br>";
        echo "<br>";
        
       if(file_exists("register.json"))
        $handel=fopen("register.json","r");
        $arr1=array('fname'=> $FirstName ,'lname'=> $LastName,'remail'=>$Email,'rphone'=> $Phone);
        $data=fread($handel,$filesize("register.json"));
        $data=explode( "\n",$data);
        $arr1=array();
        $isalid=false;
        for($i=0; $i<count($data)+1; $i++)
        $json=json_decode($data[$i]);
        if($UserName== $json->uname and $password==$json->upass)
        {
          $isvalid=true;
        }
        if($isvalid)
        {
            echo "Login succesful";
        }
        else{
           echo" Login failed"; 
        }
     }

     function sanitize($data)
     {

        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
     }
}

?>
    <!-- <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["uname"])) 
        {
          $UserName= "Name is required";
        } 
        else 
        {
          $UserName = test_input($_POST["uname"]);
        }
       
        if(empty ($_POST["upass"]))
        {

            $Password="password required:";
        }  
        else
        {
            $Password=test_input($_POST["upass"]);
        }
    }
?> -->

<!-- <?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
        {
			
			$UserName = $_POST['uname'];
			$Password = $_POST['upass']; 

			if (empty($uname))
            {
				echo"UserName:".sanitize($uname);
			}
			else 
            {
                echo "Please fill up the form properly";
			}
		}
        ?> -->

<!-- <?php

if(isset ($_POST["uname"]) && isset($_POST ["upass"]))
{
    $UserName = $_POST["uname"];
    $Password = $_POST["upass"];
    if(!empty($UserName) && !empty($password))
    {
          echo"ok";
    }
    else
    {
       echo"fillup from ";
    }
}

?>     -->

</body>
</html>