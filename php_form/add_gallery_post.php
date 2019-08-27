<?php
require_once 'db.php';
$gallery_tag = $_POST['gallery_tag'];
$gallery_image_name = $_FILES['gallery_image']['name'];

if ($gallery_tag) {
    if ($gallery_image_name) {
        // get the photo
        $our_upload_file = $_FILES['gallery_image'];

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
                $gallery_tag = $_POST['gallery_tag'];

                // insert to db
                $insert_query = "INSERT INTO galleries (gallery_tag) VALUES ('$gallery_tag')";
                mysqli_query($db_connection, $insert_query);

                // get last inserted id
                $inserted_id = mysqli_insert_id($db_connection);

                // create new name
                $new_gallery_image_name = $inserted_id . "." . $our_upload_file_extension;

                // create new location
                $new_upload_location = "uploads/galleries/" . $new_gallery_image_name;

                // move the file
                move_uploaded_file($our_upload_file['tmp_name'], $new_upload_location);

                // update new name to db
                $update_query = "UPDATE galleries SET gallery_image='$new_gallery_image_name' WHERE id=$inserted_id";
                mysqli_query($db_connection, $update_query);
                header('location: addgallery.php');
            } else {
                echo "size besi hoyse";
            }
        } else {
            echo "Photo Format Tik Nai";
        }
    } else {
        // get silder title
        $gallery_tag = $_POST['gallery_tag'];
        // insert to db
        $insert_query = "INSERT INTO galleries (gallery_tag) VALUES ('$gallery_tag')";
        mysqli_query($db_connection, $insert_query);
        header('location: addgallery.php');
    }
} else {
    echo "Please Your Gallery Tag ";
}
?>