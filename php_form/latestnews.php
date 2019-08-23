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



    <div class="continar mt-3">
        <div class="row">
            <div class="col-6 offset-1">
                <h2>Add Latest News List : </h2>
                <hr>
                <table class="table table-bordered">
                    <tr>
                        <th>News</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    require_once "db.php";
                    $news_get_query = "SELECT * FROM latest_news";
                    $news_get_result = mysqli_query($db_connection, $news_get_query);
                    $after_assoc = mysqli_fetch_assoc($news_get_result);

                    foreach ($news_get_result as $news) {
                        ?>

                    <tr>
                        <td><?= $news['latest_news']; ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="edit_news.php?id=<?= $news['id']; ?>" type="button" class="btn btn-info">Edit</a>
                                <a href="delete_news.php?id=<?= $news['id']; ?>" type="button" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>

                </table>
            </div>

            <?php
            require_once 'footer.php';
            ?>