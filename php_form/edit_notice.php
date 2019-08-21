<?php
session_start();
require_once 'header.php';
require_once 'db.php';
$notice_id = $_GET['id'];
$single_notice = "SELECT * FROM notices WHERE id=$notice_id";
$single_notice_query = mysqli_query($db_connection, $single_notice);
$after_assoc_single_notice = mysqli_fetch_assoc($single_notice_query);
?>


<div class="continar mt-3">
    <div class="row">
        <div class="col-6 offset-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="addnotice.php">Add Notice List</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $after_assoc_single_notice['notice_title']; ?></li>
                </ol>
            </nav>
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">ADD NOTICES</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="edit_notice_post.php" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $notice_id; ?>">
                                <label>Date</label>
                                <input value="<?= $after_assoc_single_notice['date']; ?>" type="date" class="form-control" name="date">
                                <label>Notice Title</label>
                                <input value="<?= $after_assoc_single_notice['notice_title']; ?>" type="text" class="form-control" name="notice_title" placeholder="Your Notice title here">
                                <label>Notice Details</label>
                                <textarea name="notice_details" cols="30" rows="5" class="form-control"><?= $after_assoc_single_notice['notice_details']; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Add Notice</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>