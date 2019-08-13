<?php
session_start();
require_once 'header.php';
?>

<div class="continar mt-3">
    <div class="row">
        <div class="col-6 offset-3">


            <div class="card text-white bg-success mb-3" style="max-width: 30rem;">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php

                        if (isset($_SESSION['user_name'])) {
                            ?>
                        <h1>Hello, <?= $_SESSION['user_name'] ?></h1>
                        <?php
                        } else {
                            header('location: login.php');
                        }
                        ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once 'footer.php';
    ?>