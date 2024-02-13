<?php

session_start();

require_once __DIR__ . '/../db/config.php'; // Adjust the path as needed

function loginUser($username, $password) {
    global $mysqli;

    // Prepare a select statement with an INNER JOIN to fetch the role name
    $sql = "SELECT users.UserID, users.Username, users.Password, users.RoleID, roles.RoleName FROM users 
            INNER JOIN roles ON users.RoleID = roles.RoleID WHERE users.Username = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $param_username);
        $param_username = $username;

        if ($stmt->execute()) {
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                $stmt->bind_result($UserID, $Username, $hashed_password, $RoleID, $RoleName);
                if ($stmt->fetch()) {
                    if (password_verify($password, $hashed_password)) {
                        $_SESSION['loggedin'] = true;
                        $_SESSION['UserID'] = $UserID;
                        $_SESSION['Username'] = $Username;
                        $_SESSION['RoleID'] = $RoleID;
                        $_SESSION['RoleName'] = $RoleName;
                        
                        // Close statement and connection
                        $stmt->close();
                        $mysqli->close();

                        // Return RoleName for redirection
                        return $RoleName;
                    } else {
                        $stmt->close();
                        $mysqli->close();
                        return false;
                    }
                }
            }
            $stmt->close();
        }
        $mysqli->close();
    }
    
    return false; // Default return false if no conditions are met
}

// Handle the login submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $roleName = loginUser($username, $password);

    if ($roleName) {
        switch ($roleName) {
            case 'Admin':
                header("location: ../dashboards/admin_dashboard.php");
                exit;
            case 'Inventory Manager':
                header("location: ../dashboards/inventory_manager_dashboard.php");
                exit;
            // Add cases for other roles as needed
            default:
                header("location: ../error.php");
                exit;
        }
    } else {
        $_SESSION['login_error'] = 'Invalid username or password.';
        header("location: ../public/index.php");
        exit;
    }
}

function redirectToLogin() {
    header("location: /inventoryv1/public/index.php");
    exit;
}

function checkUserLoggedIn() {
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        redirectToLogin();
    }
}

function logoutUser() {
    if (isset($_GET['logout'])) {
        $_SESSION = array();
        session_destroy();
        redirectToLogin();
    }
}

function preventCache() {
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Content-Type: text/html; charset=UTF-8");
}

?>
