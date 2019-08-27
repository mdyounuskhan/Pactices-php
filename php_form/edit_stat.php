<?php
session_start();
require_once 'header.php';
require_once 'db.php';
// ORDER by id DESC LIMIT 4
$get_stat = "SELECT * FROM stats";
$get_stat_result = mysqli_query($db_connection, $get_stat);
$after_assoc = mysqli_fetch_assoc($get_stat_result);
?>

<div class="continar mt-3">
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">ADD STAT</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="edit_stat_post.php" method="post">
                            <div class="form-group">
                                <input type="hidden" value="<?= $_GET['id'] ?>" name="stat_id">
                                <label>Stat Name</label>
                                <input type="text" class="form-control" name="stat_name" value="<?= $after_assoc['stat_name'] ?>">
                                <label>stat icon</label>
                                <input type="text" class="form-control" name="stat_icon" value="<?= $after_assoc['stat_icon'] ?>">
                                <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome Icon, Please Click Here And Just Copy Text</a>
                                <br>
                                <br>
                                <label>Stat Amount</label>
                                <input type="number" name="stat_amount" class="form-control" value="<?= $after_assoc['stat_amount'] ?>">
                            </div>
                            <button type="submit" class="btn btn-danger">Add Stat</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>