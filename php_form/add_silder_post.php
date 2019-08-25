<?php
require_once 'db.php';
$silder_name = $_FILES['silder_image']['name'];
$silder_title = $_POST['silder_title'];

if ($silder_title) {
    if ($silder_name) {
        // get the photo
        $our_upload_file = $_FILES['silder_image'];

        //get photo name
        $our_upload_photo_name = $our_upload_file['name'];

        //get extension by explode func
        $after_explode = explode(".", $our_upload_photo_name);

        //to get last value
        $our_upload_file_extension = end($after_explode);

        // valid extension list
        $valid_image_extention = array('jpg', 'png', 'jpeg');

        // chack if valid or not
        if (in_array($our_upload_file_extension, $valid_image_extention)) {

            // chack is size is less then 2mb
            if ($our_upload_file['size'] <= 2000000) {

                // get silder title
                $silder_title = $_POST['silder_title'];

                // insert to db
                $insert_query = "INSERT INTO silders (silder_title) VALUES ('$silder_title')";
                mysqli_query($db_connection, $insert_query);

                // get last inserted id
                $inserted_id = mysqli_insert_id($db_connection);

                // create new name
                $new_silder_image_name = $inserted_id . "." . $our_upload_file_extension;

                // create new location
                $new_upload_location = "uploads/silders/" . $new_silder_image_name;

                // move the file
                move_uploaded_file($our_upload_file['tmp_name'], $new_upload_location);

                // update new name to db
                $update_query = "UPDATE silders SET silder_image='$new_silder_image_name' WHERE id=$inserted_id";
                mysqli_query($db_connection, $update_query);
                header('location: addsilder.php');
            } else {
                echo "size besi hoyse";
            }
        } else {
            echo "Photo Format Tik Nai";
        }
    } else {
        // get silder title
        $silder_title = $_POST['silder_title'];
        // insert to db
        $insert_query = "INSERT INTO silders (silder_title) VALUES ('$silder_title')";
        mysqli_query($db_connection, $insert_query);
        header('location: addsilder.php');
    }
}
else {
    echo "Please Your Silder Title ";
}
