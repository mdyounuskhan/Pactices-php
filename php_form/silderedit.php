<?php
session_start();
require_once 'header.php';
require_once 'db.php';
?>

<div class="continar mt-3">
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">EDIT SILDER</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="edit_silder_post.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Silder Image</label>
                                <input type="hidden" name="old_silder_id" value="<?=$_GET['id']?>">
                                <input type="hidden" name="old_silder_name" value="<?=$_GET['silder_name']?>">
                                <input type="file" class="form-control" name="silder_image">
                            </div>
                            <button type="submit" class="btn btn-danger">Edit Silder</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once 'footer.php';
    ?>