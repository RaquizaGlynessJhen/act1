<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <div id="userProfile">
        <?php
        // PHP to retrieve and display user data from local storage
        $userData = json_decode($_COOKIE['user_data'], true);

        if ($userData) {
            echo "<p><strong>Username:</strong> " . $userData['username'] . "</p>";
            echo "<p><strong>Email:</strong> " . $userData['email'] . "</p>";
            echo "<p><strong>Password:</strong> " . $userData['password'] . "</p>";
        }
        ?>
    </div>
</body>
</html>
