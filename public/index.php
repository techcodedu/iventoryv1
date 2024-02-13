<?php
// Include the login processing functions
require_once '../functions/user.php'; // Adjust the path as needed

// Initialize an error message variable
$login_error = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Attempt to log in
    $result = loginUser($username, $password);
    if ($result === false) {
        // Login failed, set an error message
        $login_error = 'Invalid username or password.';
    }
    // Successful login will redirect within loginUser(), so no need to handle that here
}

// Clear the login error from the session after displaying it
if(isset($_SESSION['login_error'])) {
    $login_error = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}
?>

<?php include_once '../templates/header.php'; ?>

<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center mb-3">Authorized Access Only</h4>
                    <?php if($login_error): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $login_error; ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group mb-3">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../templates/footer.php'; ?>
