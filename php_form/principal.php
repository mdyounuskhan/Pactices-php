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
            <h2>Add Notice List : </h2>
            <hr>
            <table class="table table-bordered">
                <tr>
                    <th>Principal Name</th>
                    <th>Message</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <?php
                require_once "db.php";
                $get_principal = "SELECT * FROM principals";
                $get_principal_result = mysqli_query($db_connection, $get_principal);
                $after_assoc = mysqli_fetch_assoc($get_principal_result);

                foreach ($get_principal_result as $principal) {
                    ?>

                <tr>
                    <td><?= $principal['name']; ?></td>
                    <td><?= $principal['message']; ?></td>
                    <td>
                        <img src="uploads/principal/<?= $principal['image']; ?>" alt="not found" width="100">
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="edit_principal.php?id=<?= $principal['id'] ?>&silder_name=<?= $principal['image'] ?>" type="button" class="btn btn-info">Edit</a>
                            <a href="delete_principal.php?id=<?= $principal['id']; ?>" type="button" class="btn btn-danger">Delete</a>
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
                <div class="card-header bg-success">PRINCIPAL DETAILS</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="principal_details_post.php" method="post" enctype="multipart/form-data">
                            <div class=" form-group">
                                <label>Name:</label>
                                <input type="text class=" form-control" name="name">
                                <br>
                                <br>
                                <label>message</label>
                                <textarea name="message" cols="30" rows="5" class="form-control"></textarea>
                                <br>
                                <label>Principal Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <button type="submit" class="btn btn-danger">Add</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>