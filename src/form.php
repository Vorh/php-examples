<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = validateInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }

    }

    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    }else {
        $email = validateInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["website"])){
        $website = "";
    }else {
        $website = validateInput($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }


    if (empty($_POST["gender"])){
        $comment = "";
    }else {
        $comment = validateInput($_POST["comment"]);
    }

    if (empty($_POST["gender"])){
        $gender = "";
    }else {
        $gender = validateInput($_POST["gender"]);
    }

}



function validateInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlentities($data);
    return $data;
}
?>

<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="post">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br>
    Comment: <textarea  name="comment" rows="5" cols="40" ><?php echo $comment;?></textarea>
    Gender:
    <input type="radio" name="gender" value="female"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>> Female
    <input type="radio" name="gender" value="male"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>> Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit">
</form>
</body>
</html>

