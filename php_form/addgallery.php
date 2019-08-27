<?php
session_start();
require_once 'header.php';
require_once 'db.php';
$get_silder_query = "SELECT * FROM silders";
$get_silder_result = mysqli_query($db_connection, $get_silder_query);
?>

<div class="continar mt-3">
    <div class="row">
        <div class="col-7 offset-1">
            <h3>LIST Gallery</h3>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Silder Title</th>
                        <th>Silder Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($get_silder_result as $silder) {
                        ?>
                    <tr>
                        <td><?= $silder['silder_title'] ?></td>
                        <td>
                            <img src="uploads/silders/<?= $silder['silder_image'] ?>" alt="Not Found" width="100">
                        </td>
                        <td>
                            <?php
                                if ($silder['status'] == 1) {
                                    echo "Active";
                                } else {
                                    echo "Deactive";
                                }
                                ?>
                        </td>
                        <td>
                            <?php
                                if ($silder['status'] == 1) {
                                    ?>
                            <a href="makeactivesilder.php?id=<?= $silder['id'] ?>" class="btn btn-sm btn-danger">Deactive</a>
                            <?php
                                } else {
                                    ?>
                            <a href="makedeactivesilder.php?id=<?= $silder['id'] ?>" class="btn btn-sm btn-success">Active</a>
                            <?php
                                }
                                ?>
                            |
                            <a href="silderdelete.php?id=<?= $silder['id'] ?>&silder_name=<?= $silder['silder_image'] ?>" class="btn btn-sm btn-warning">Delete</a>
                            |
                            <a href="silderedit.php?id=<?= $silder['id'] ?>&silder_name=<?= $silder['silder_image'] ?>" class="btn btn-sm btn-info">Edit</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <div class="col-4">
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">ADD GALLERY</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="add_gallery_post.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Gallery tag</label>
                                <input type="text" class="form-control" name="gallery_tag">
                            </div>
                            <div class="form-group">
                                <label>Gallery Image</label>
                                <input type="file" class="form-control" name="gallery_image">
                            </div>
                            <button type="submit" class="btn btn-danger">Add gallery</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once 'footer.php';
    ?>