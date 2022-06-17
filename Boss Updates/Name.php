<?php
include("../Conn.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="styleSheet" type="text/css" href="../Sty2.css"/>
    <style>
    
        .d1
        {
            background-color:white;
            height: 456px;
            width: 600px;
        }
        .d1
        {
            padding-top:68px;         
            padding-left: 100px;
            margin-top: 50px;
            margin-left: 0px;
        }
        #textBox
        {
            height: 428px;
        }
        .d1
        {
          float: left;
            //padding-bottom: 50px;
        }
        #textBox
        {
            padding-top: 95px;
            text-align:center;
        }
      #Update 
      {
          padding-left: 30px;
          padding-right:30px ;
         
      }
      #name
      {
          height: 200px;
      }
     #textBox
     {
         height: 175px;
     }
     #name
    {
        text-align:center;
    }
    #Next
    {
        padding-top:22px;
        text-align:right;
    }
    #disp 
    {
        padding: 10px;
    }
   
   #nb 
   {
       padding: 100px;
   }
   #nb 
   {
       background-color:white;
       height: 170px;
       width: 108px;
   }
  #nb 
  {
      padding-left: 1200px;
  }

    </style>
</head>
<body>
    <form action="#"> 
        <div class="d1" id="name">
            <h1>Enter Employer new name </h1>
            <?php
           echo$name =$_GET['name1'];
		     $em= $_GET['em'];
         // echo"the uid is ".$name;
		 // echo"The ID  ".$em;
          
            ?>
        </div>
       <div hidden><input type="number"  id="ol" name="oldName" value="<?php echo$name;?>" ></div>
        <div hidden><input type="email"  id="email" name="em" value="<?php echo$em;?>" ></div>
      <div class="d1" id="textBox"><input type="textarea"  id="changeName" name="updateName">
              <?php
	  $test=$_GET['oldName'];
	  $email=$_GET['em'];
    if(isset($_GET['upd']))
    {

    $oldName  = $_GET['oldName'];
    $newName  = $_GET['updateName'];
	
    $update  ="update empl set ename='$newName'
	where eid=$oldName";
    $query   =mysqli_query($conn, $update);
    if ($query)
     {
        # code...
        echo"<br><h2>Employer is updated</h2>";
    }
    else 
	{
        echo"<br>updated failed";
    }
    
    
 
     }
    
    ?>   <br><br>
      <input type="submit" value="Update" id="Update" name="upd"><br>
     <div id="Next">
     
     </div>
       </div>
    
    </form>
    <form id="nb">
     <a href="../EditBoss.php?update=<?php echo$email;?>&name=<?php  echo$test;?>"> <input type="button" value="click here to view the changes" id="disp"></a><br>
      </form> 
</body>
</html>