<?php
session_start();
require_once 'header.php';
?>

<div class="continar mt-3">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">ADD SILDER</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="add_silder_post.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Silder Title</label>
                                <input type="text" class="form-control" name="silder_title">
                            </div>
                            <div class="form-group">
                                <label>Silder Image</label>
                                <input type="file" class="form-control" name="silder_image">
                            </div>
                            <button type="submit" class="btn btn-danger">Add Silder</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>

            <?php
            require_once 'footer.php';
            ?>