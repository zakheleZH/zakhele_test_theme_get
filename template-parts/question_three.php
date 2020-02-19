<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2U test</title>
    <style>
    body{
        background-color:pink;
    }
    h1{
        color:#eda018;
    }
    p{
        color:#2f2f2f;
    }
    #button{
        color:#eda018;
    }
    </style>
</head>
<body>
<h1>Getsmart</h1>
<p>
Lorem Ipsum has been the industry's standard dummy 
text ever since the 1500s, when an unknown printer took a galley of
 type and scrambled it to make a type specimen book.
  It has survived not only five centuries,
   but also the leap into electronic typesetting, remaining essentially unchanged.
</p>
<form action="question_three.php" method="POST">
Username:<input type="text" name="username" id="username" placeholder="Please Enter your Username"><br>
Work Experience:<select name="work_experience" id="work_experience">
<option value="1-2 Years">1-2 Years</option>
<option value="3-4 Years">3-4 Years</option>
<option value="5+ Years">5+ Years</option>
</select><br>
<input type="submit" id="button" name="submit" onclick="Validate_data()" value="submit data"><br>


</select>
</form><br>
<?php
session_start(); // starting a section

if(isset($_POST['submit']))
{
    //declaring variables
    $username = $_POST['username'];
    $work_experience = $_POST['work_experience'];

    if($username || $work_experience)
    {
      echo   "<p>Please fill all Input field</p>";
    }

    else
    {
        $_SESSION['user_name'] =   $username;
        $_SESSION['experience'] =  $work_experience;
        header('location: data.php'); // navigating to data.php
    }
}

?>
<script src="js/validate.js"></script>
</body>
</html>