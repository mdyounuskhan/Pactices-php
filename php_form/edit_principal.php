<?php
session_start();
require_once 'header.php';
require_once "db.php";
$get_principal = "SELECT * FROM principals";
$get_principal_result = mysqli_query($db_connection, $get_principal);
$after_assoc = mysqli_fetch_assoc($get_principal_result);
?>

<div class="continar mt-3">
    <div class="row">
        <div class="col-6 offset-1">
            <?php
            if (isset($_SESSION['edit_notice'])) {
                ?>
            <div class="alert alert-success">
                Your Notice has be Changed Successfully !!
            </div>
            <?php
                unset($_SESSION['edit_notice']);
            } else {
                if (isset($_SESSION['delete_notice'])) {
                    ?>
            <div class="alert alert-danger">
                Your Notice has be Deleted Successfully !!
            </div>
            <?php
                    unset($_SESSION['delete_notice']);
                }
            }
            ?>
        </div>
        <div class="col-4 offset-4">
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">PRINCIPAL EDIT</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="principal_edit_post.php" method="post" enctype="multipart/form-data">
                            <div class=" form-group">
                                <label>Name:</label>
                                <input type="hidden" name="principal_id" value="<?= $after_assoc['id'] ?>">
                                <input type="hidden" name="principal_image_name" value="<?= $after_assoc['image'] ?>">
                                <input type="text class=" form-control" name="name" value="<?= $after_assoc['name'] ?>">
                                <br>
                                <br>
                                <label>message</label>
                                <textarea name="message" cols="30" rows="5" class="form-control"><?= $after_assoc['message'] ?></textarea>
                                <br>
                                <label>Principal Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <button type="submit" class="btn btn-danger">Edit</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>