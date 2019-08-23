
<?php
session_start();
require_once 'header.php';
require_once 'db.php';
$news_id = $_GET['id'];
$single_news = "SELECT * FROM latest_news WHERE id=$news_id";
$single_news_query = mysqli_query($db_connection, $single_news);
$after_assoc_single_news = mysqli_fetch_assoc($single_news_query);
?>


<div class="continar mt-3">
    <div class="row">
        <div class="col-6 offset-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="latestnews.php">Add Notice List</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $after_assoc_single_news['latest_news']; ?></li>
                </ol>
            </nav>
            <div class="card  mb-3" style="max-width: 30rem;">
                <div class="card-header bg-success">Edit Latest News</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action="edit_latest_news_post.php" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $news_id; ?>">
                                <label>latest News</label>
                                <input value="<?= $after_assoc_single_news['latest_news']; ?>" type="text" class="form-control" name="latest_news">
                            </div>
                            <button type="submit" class="btn btn-danger">Add Edit News</button>
                        </form>
                    </h5>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>