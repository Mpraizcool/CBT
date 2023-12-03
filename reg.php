<?php
session_start();
include_once('config.php');

// Function to generate CSRF token
function generateCSRFToken() {
    $token = bin2hex(random_bytes(32)); // Generate a random token
    $_SESSION['csrf_token'] = $token; // Store it in the session
    return $token;
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed!");
    }

    // Your existing code for form processing
    $surname = $_POST['surname'];
    $othername = $_POST['othername'];
    $classe = $_POST['classe'];
    $gender = $_POST['gender'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $stmt = $con->prepare("SELECT * FROM student WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $num = $result->num_rows;
    $stmt->close();

    if ($num == 0) {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert user data into the database
        $stmt = $con->prepare("INSERT INTO student (surname, othername, class, gender, regno, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $surname, $othername, $classe, $gender, $regno, $email, $hashed_password);
        $result = $stmt->execute();
        $stmt->close();

        if ($result) {
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

    // Regenerate CSRF token after form submission
    generateCSRFToken();
} else {
    // Generate CSRF token for the initial page load
    generateCSRFToken();
?>
    <!-- Your existing form -->
    <form class="form" action="" method="post">
        <!-- ... (your form fields) -->
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
}
?>
