
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
    <?php
    include_once('config.php');
    if(isset($_POST['submit']))
    {
    $surname=$_POST['surname'];
    $othername=$_POST['othername'];
    $classe=$_POST['classe'];
    $gender=$_POST['gender'];
    $regno=$_POST['regno'];
    $email=$_POST['email'];
    $passworde=md5($_POST['surname']);
    $bret=mysqli_query($con,"SELECT * FROM student WHERE email='".$_POST['email']."'");
$num=mysqli_fetch_array($bret);
if($num<0)
{
    $query="INSERT INTO student(surname,othername,class,gender,regno,email,passworde) VALUES ('$surname','$othername','$classe','$gender','$regno','$email','$passworde')";
        $result = mysqli_query($con,$query);}
        else{
        echo "<script>alert ('Email already Exists');</script>";
    }
        if($num) {
            echo "<div class='form'>
            <h3>You are registered successfully.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a></p>
            </div>";
        } else {
            echo  "<div class='form'>
            <h3>Required fields are missing.</h3><br/>
            <p class='link'>Click here to <a href='registration.php'>registration</a>again.</p>
            </div>";
        }
    } else {
    ?>
        <form class= "form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="surname" placeholder="Surname" required>
            <input type="text" class="login-input" name="othername" placeholder="Other names" required>
            <select name="classe" class="form-control" required="true">
				<option value="0">Select Class</option>
                <option value="SS1">SSS 1</option>
				<option value="SS2">SSS 2</option>
                <option value="SS3">SSS 3</option>							
			</select>
            <br><br>
            <label class="login-input">
									Gender
			</label>
			<div class="login-input">
									<input type="radio" id="rg-female" name="gender" value="female">
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
										Male
									</label>
			</div>
            <input type="text" class="login-input" name="regno" placeholder="Admission  Number" required>
            <input type="text" class="login-input" name="email" placeholder="Email Address" required>
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link"><a href="login.php">Click to Login</a></p>
        </form>
    <?php
    }
    ?>    
</body>
</html>