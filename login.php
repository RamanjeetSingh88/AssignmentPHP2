<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $name = $_POST['name'];
    $enteredPassword = $_POST['password'];

    $sql = "SELECT * FROM `account` WHERE name='$name'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedHashedPassword = $row['password'];

        // Verify the entered password with the stored hashed password
        if (password_verify($enteredPassword, $storedHashedPassword)) {
            $_SESSION['name'] = $name;
            header('Location: welcome.php'); // Redirect to welcome.php
            exit(); // Ensure that no further code is executed after the header
        } else {
            echo "Invalid credentials";
        }
    } else {
        echo "User not found";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="login/style.css" rel="stylesheet">
    <script src="js/j.js" defer></script>
</head>


    <?php include 'templates/header.php'; ?>
    <!-- Your HTML form for login goes here -->
    <body>
    <section>
    <div class="form-container">
        <form action="./display.php" method="get" enctype="multipart/form-data">
            <h2>Sign In</h2>
            <fieldset>
            <!-- Name -->
            <label for="username">Username:</label>
            <input type="text" name="name" placeholder="Username" required><br>

            <!-- Password -->
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password" id="password" title="Password must contain at least 8 characters, one uppercase letter, one lowercase letter, and one digit." required>

            <div class="checkbox"> <input type="checkbox" onclick="togglePasswordVisibility()"></div>&nbsp;
            <div class="pass">Show Password</div>

            <!-- Sign in -->
            <button type="submit" class="log">Log In</button>
            </fieldset>
        </form>
    </div>
    </section>
    <?php include 'templates/footer.php'; ?>

</body>
</html>





