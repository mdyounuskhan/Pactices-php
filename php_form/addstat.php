<?php
session_start();
require_once 'header.php';
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
            <h2>Add Stat List : </h2>
            <hr>
            <table class="table table-bordered">
                <tr>
                    <th>Stat Name</th>
                    <th>Stat Icon</th>
                    <th>Stat Amount</th>
                    <th>Action</th>
                </tr>
                <?php
                require_once "db.php";
                // ORDER by id DESC LIMIT 4
                $get_stat = "SELECT * FROM stats";
                $get_stat_result = mysqli_query($db_connection, $get_stat);

                foreach ($get_stat_result as $stat) {
                    ?>

                <tr>
                    <td><?= $stat['stat_name']; ?></td>
                    <td>
                        <span class="fa <?= $stat['stat_icon']; ?>"></span>
                    </td>
                    <td><?= $stat['stat_amount']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="edit_stat.php?id=<?= $stat['id'] ?>&stat_name=<?= $stat['stat_name']; ?>" type="button" class="btn btn-info">Edit</a>
                            <a href="delete_stat.php?id=<?= $stat['id']; ?>" type="button" class="btn btn-danger">Delete</a>
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
                <div class="card-header bg-success">ADD STAT</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="stat_post.php" method="post">
                            <div class="form-group">
                                <label>Stat Name</label>
                                <input type="text" class="form-control" name="stat_name">
                                <label>stat icon</label>
                                <input type="text" class="form-control" name="stat_icon" placeholder="Exmple : fa-book">
                                <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome Icon, Please Click Here And Just Copy Text</a>
                                <br>
                                <br>
                                <label>Stat Amount</label>
                                <input type="number" name="stat_amount" class="form-control">
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