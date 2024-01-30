<?php
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

   
    $website = test_input($_POST["website"]);

    
    $comment = test_input($_POST["comment"]);

    
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<h2>Absolute classes registration</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>

    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    <label for="website">Website:</label>
    <input type="text" name="website" id="website">
    <br><br>

    <label for="comment">Classes:</label>
    <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>

    <label for="courses">Courses:</label>
    <select name="courses" id="courses">
        <option value="math">PHP</option>
        <option value="science">Java Scrript</option>
        <option value="history">My Sql</option>
        <option value="history">Html</option>
     
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<h2>Your given values are as:</h2>
<?php
echo $name . "<br>";
echo $email . "<br>";
echo $website . "<br>";
echo $comment . "<br>";
echo $gender;
if(isset($_POST['courses'])){ echo "Selected Courses: " . $_POST['courses']; }
?>

</body>
</html>