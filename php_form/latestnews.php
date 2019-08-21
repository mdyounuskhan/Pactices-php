<?php
session_start();
require_once 'header.php';
?>

<div class="continar mt-3">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">ADD LATEST NEWS</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="latest_news_post.php" method="post">
                            <div class="form-group">
                                <label>latest News</label>
                                <textarea name="latest_news" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Add Latest News</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>