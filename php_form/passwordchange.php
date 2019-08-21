<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('location: login.php');
}
require_once 'header.php';
?>

<div class="continar mt-3">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card  mb-3" style="max-width: 30rem;">
                <?php
                if (isset($_SESSION['password_change'])) {
                    ?>
                <div class="alert alert-success">
                    Your name has be Changed
                </div>
                <?php
                    unset($_SESSION['password_change']);
                }
                ?>
                <div class="card-header bg-success">Edit Profile</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="update_password.php" method="post">
                            <div class="form-group">
                                <input type="hidden" value="<?= $_SESSION['user_id'] ?>" class="form-control" name="id">
                                <label>Current Password</label>
                                <input type="password" class="form-control" name="password">
                                <label>Password</label>
                                <input type="password" class="form-control" name="re_password">
                                <label>Confiram Password</label>
                                <input type="password" class="form-control" name="confiram_password">
                            </div>
                            <button type="submit" class="btn btn-danger">Update</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>