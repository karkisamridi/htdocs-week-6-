<?php 
    $nameinput_default='';
    $emailinput_default='';
    $password_one_default='';
    $password_two_default='';

if (isset($_POST["Registration"]))
{ 
    $nameinput =$_POST["name input"];
    $emailinput =$_POST["email input"];
    $password_one =$_POST["password_one"];
    $password_two =$_POST["password_two"];

    $nameinput_default=$nameinput;
    $emailinput_default=$emailinput;
    $password_one_default=$password_one;
    $password_two_default=$password_two;

    if($password_one_default != $password_two_default)
    {
        else
      
    {
        echo"confirm password is different";
    }
    
    }

    if ($nameinput =='')
    {
        echo"<p style='color:HOTPINK;'>PLEASE ENTER NAME</p>";
    }
    elseif ($emailinput ==''){
        echo"<p style='color:HOTPINK;'>PLEASE ENTER EMAIL</p>";
    }
    elseif ($password_one ==''){
        echo"<p style='color:HOTPINK;'>PLEASE ENTER PASSWORD_ONE</p>";
    }
    elseif ($password_two ==''){
        echo"<p style='color:HOTPINK;'>PLEASE ENTER PASSWORD_TWO</p>";
    }
    else
    {
        if($password_one_default != $password_two_default)
    {
        echo"confirm password is different";
    }
    else
    {
        $mydataarray=array();
        $mydataarray['nameinput']=$name_input;
        $mydataarray['emailinput']=$emailinput;
        $mydataarray['password_one']=$password_one;
        $mydataarray['password_two']=$password_two;

        $jsondata=json_encode($mydataarray);
        echo $jsondata;
    }

    }



}
$mytitle="Week 6 workshop"
$h5tag_1="Registration page";

  
    $mytitle ="Week 6 Workshop";
    $h5tag_1="Registration page";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title><?php echo $h5tag_1;?></title>
    <style type="text/css">
        .mb5{
            margin-bottom:8px;
        }
    </style>
</head>
<body>
    <h5><?php echo $h5tag_1;?></h5>

    
    <form method="POST" action="">
     <div class="mb5">
       <label>Name</label>
    <input type ="text" class="myform" placeholder ="PLEASE ENTER YOUR NAME"
    name="name input" value="<?php echo$ required  $nameinput_default; ?>">
    <br>
</div>

     <div class ="mb5">
    <label>E-mail</label>
    <input type ="email" class="myform" placeholder ="PLEASE ENTER YOUR EMAIL"
    name="email input"  required><br>
</div>

<div class ="mb5">
    <label>Password</label>
    <input type ="password" class="myform" placeholder ="PLEASE ENTER YOUR PASSWORD"
    name="password_one"  required><br>
</div>

<div class ="mb5">
    <label>Confirm password</label>
    <input type ="password" class="myform" placeholder ="PLEASE ENTER YOUR PASSWORD"
    name="password_one" required>
</div>

<button type="Submit" name="Registration">Submit Form</button>
<button type="button" id="Resetform" onclick="reset form();">Reset </button>


</form>

</body>
</html>

<script type="text/javascript">
