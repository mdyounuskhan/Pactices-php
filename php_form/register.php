<?php
require_once 'header.php';
?>

<div class="continar">
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="text-center mt-3">Register Form</h1>
            <form action="register_post.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" placeholder="Enter Your email" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter Your password" name="password">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role">
                        <option value="">-SELECT ONE-</option>
                        <option value="1">Admin</option>
                        <option value="2">Student</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Register Me</button>
                <a href="login.php">Login</a>
            </form>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';
?>