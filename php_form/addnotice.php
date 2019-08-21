<?php
session_start();
require_once 'header.php';
?>






<div class="continar mt-3">
    <div class="row">
        <div class="col-6 offset-1">
            <h2>Add Notice List : </h2>
            <hr>
            <table class="table table-bordered">
                <tr>
                    <th>Notice Date</th>
                    <th>Notice Title</th>
                    <th>Notice Details</th>
                    <th>Action</th>
                </tr>
                <?php
                require_once "db.php";
                $notice_get_query = "SELECT * FROM notices ORDER by id DESC";
                $notice_get_result = mysqli_query($db_connection, $notice_get_query);
                $after_assoc = mysqli_fetch_assoc($notice_get_result);

                foreach ($notice_get_result as $notice) {
                    ?>

                <tr>
                    <td><?= $notice['date']; ?></td>
                    <td><?= $notice['notice_title']; ?></td>
                    <td><?= $notice['notice_details']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="edit_notice.php?id=<?= $notice['id']; ?>" type="button" class="btn btn-info">Edit</a>
                            <a href="delete_notice.php?id=<?= $notice['id']; ?>" type="button" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>

                <?php
                }
                ?>

            </table>
        </div>
        <div class="col-5">
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">ADD NOTICES</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="notice_post.php" method="post">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date">
                                <label>Notice Title</label>
                                <input type="text" class="form-control" name="notice_title" placeholder="Your Notice title here">
                                <label>Notice Details</label>
                                <textarea name="notice_details" cols="30" rows="5" class="form-control"></textarea>
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