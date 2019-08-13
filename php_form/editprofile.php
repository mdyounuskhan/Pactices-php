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
                if (isset($_SESSION['update_status'])) {
                    ?>
                <div class="alert alert-success">
                    Your name has be Changed
                </div>
                <?php
                    unset($_SESSION['update_status']);
                }
                ?>
                <div class="card-header bg-success">Edit Profile</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="edit_profile_post.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="hidden" value="<?= $_SESSION['user_id'] ?>" class="form-control" name="id">
                                <input type="text" value="<?= $_SESSION['user_name'] ?>" class="form-control" name="name">
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