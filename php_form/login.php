<?php
session_start();
unset($_SESSION['user_name']);
require_once 'header.php';
?>

<div class="continar">
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="text-center mt-3">Login Form</h1>
            <form action="login_post.php" method="post">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" placeholder="Enter Your email" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter Your password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="register.php">Register</a>
            </form>
        </div>
    </div>
</div>


<?php
require_once 'footer.php';
?>