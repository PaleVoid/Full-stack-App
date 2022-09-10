<?php
    session_start();

    //print_r($_FILES['profile_pic']);

    // Value Field
    $path = "../../datas/registers/";
    $file = $path . basename($_FILES["profile_pic"]["name"]);
    $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'png', 'jpeg'];

    // File Handler - Array Maker
    foreach($_POST as $key => $value) 
    {
        $fp = fopen($path, 'w');

        
      
    };

    /*

    // File Handler - Profile Picture
    if (isset($_POST["regist"])) 
    {
        // Check type
        if (!in_array($imageFileType, $allowedTypes)) 
        {
            echo "We only accept: '.jpg', '.png', '.jpeg' file.";

        } 
        // Check if file already exists
        elseif (file_exists($file)) 
        {
            echo "Oops, that file already exist. Please change the name or upload another pic.";

        } 
        // Check file size
        elseif ($_FILES["profile_pic"]["size"] > 5000000) 
        {
            echo "Hold on there! What are you even trying to upload!";
            
        } 
        // Upload if All Clear
        elseif (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $file)) 
        {
            echo "Congrat! You Successed on Uploading The Pic " . basename($_FILES["profile_pic"]["name"]);

        }

    }

    */

?>
