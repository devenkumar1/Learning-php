<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings</title>
</head>
<form action="" class="formStyle" Method="POST">
    <label for="name">
        Full Name
        <br>
        <input type="text" name="userName">
        <br>
    </label>
    
    <label for="time">
        Select Time of the Day
        <br>
    <select name="time" id="time">
        <option value="morning" >Morning</option> 
        <option value="afterNoon">AfterNoon</option> 
        <option value="evening">Evening</option> 
        <option value="night">Night</option> 
    </select>
    
    </label>
    <br>
    <button type="submit">Generate Greetings</button>
</form>
<body>
    
</body>
<!-- <style>
    .formStyle{
        display:flex;
        flex-direction:coulmn;
    }
</style> -->
</html>



<?php
function greetUser($username,$time){
    if($time==="morning"){
        echo "Good Morning ".$username;
    }
    elseif($time==="evening"){
        echo "Good Evening ".$username;
    }
    elseif($time==="afterNoon"){
        echo "Good AfterNoon ".$username;
    }
    elseif($time==="night"){
        echo "Good Night ".$username;
    }
    else{
        echo "not a valid option";
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username=$_POST["userName"];
    $currentTime =$_POST["time"];
    $result= greetUser($username,$currentTime);

    echo "<span>".$result."</span>";
}

?>

