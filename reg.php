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

    if(isset($_POST['submit'])) {
        $surname = $_POST['surname'];
        $othername = $_POST['othername'];
        $classe = $_POST['classe'];
        $gender = $_POST['gender'];
        $regno = $_POST['regno'];
        $email = $_POST['email'];
        $password = $_POST['password']; // Assuming you have a password input in your form

        // Check if the email already exists
        $stmt = $con->prepare("SELECT * FROM student WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $num = $result->num_rows;
        $stmt->close();

        if($num == 0) {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Insert user data into the database
            $stmt = $con->prepare("INSERT INTO student (surname, othername, class, gender, regno, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $surname, $othername, $classe, $gender, $regno, $email, $hashed_password);
            $result = $stmt->execute();
            $stmt->close();

            if($result) {
                echo "<div class='form'>
                <h3>You are registered successfully.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                </div>";
            } else {
                echo "<div class='form'>
                <h3>Error in registration. Please try again.</h3><br/>
                <p class='link'>Click here to <a href='registration.php'>registration</a>again.</p>
                </div>";
            }
        } else {
            echo "<script>alert ('Email already Exists');</script>";
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
             <input type="password" class="login-input" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link"><a href="login.php">Click to Login</a></p>
        </form>
    <?php
    }
    ?>    
</body>
</html>
